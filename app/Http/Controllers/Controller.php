<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use App\Models\Product;
use App\Models\tblCart;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pelanggan.home', [
            'title' => 'Pelanggaan'
        ]);
    }

    public function shop()
    {
        $countKeranjang = tblCart::where(['idUser' => 'gues123', 'status' => 0])->count();
        $product = Product::orderBy('created_at', 'desc')->paginate(6);
        return view('pelanggan.shop', [
            'title' => 'Shop',
            'products' => $product,
            'count_keranjang' => $countKeranjang
        ]);
    }

    public function transaksi()
    {
        $co = tblCart::with('product')->where(['idUser' => 'gues123', 'status' => 0])->get();
        $countKeranjang = tblCart::where(['idUser' => 'gues123', 'status' => 0])->count();
        return view('pelanggan.transaksi', [
            'title' => 'Transaksi',
            'count_keranjang' => $countKeranjang,
            'co' => $co
        ]);
    }

    public function contact()
    {
        $countKeranjang = tblCart::where(['idUser' => 'gues123', 'status' => 0])->count();
        return view('pelanggan.contact', [
            'title' => 'Contact',
            'count_keranjang' => $countKeranjang
        ]);
    }

    public function checkout()
    {
        $countKeranjang = tblCart::where(['idUser' => 'gues123', 'status' => 0])->count();
        $code = Transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        $detailBelanja = detailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->sum('price');

        $jumlahBarang = detailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->sum('qty');
        $qtyBarang = detailTransaksi::where(['id_transaksi' => $codeTransaksi, 'status' => 0])->count('id_barang');
        return view('pelanggan.checkout', [
            'title' => 'Checkout',
            'count_keranjang' => $countKeranjang,
            'detailBelanja' => $detailBelanja,
            'jumlahBarang' => $jumlahBarang,
            'qtyOrder' => $qtyBarang,
            'codeTransaksi' => $codeTransaksi,
        ]);
    }

    public function prosesPembayaran(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $dbTransaksi = new Transaksi;
        $field = [
            'code_transaksi' => $data['code'],
            'total_qty' => $data['total_qty'],
            'total_harga' => $data['dibayarkan'],
            'nama_customer' => $data['namaPenerima'],
            'alamat' => $data['alamatPenerima'],
            'no_tlp' => $data['tlp'],
            'ekspedisi' => $data['ekspedisi'],
        ];
        $dbTransaksi->create($field);

        $dataCart = detailTransaksi::where('id_transaksi', $data['code'])->get();
        foreach ($dataCart as $x) {
            $dataUp = detailTransaksi::where('id', $x->id)->first();
            $dataUp->update(['status' => 1]);

            $idProduct = Product::where('id', $x->id_barang)->first();
            $idProduct->quantity = $idProduct->quantity - $x->qty;
            $idProduct->quantity_out = $x->qty;
            $idProduct->save();
        }
        Alert::toast('Transaksi Berhasil, di tunggu barangnya', 'success');

        return redirect()->route('beranda');

    }

    public function prosesCheckout(Request $request, $id)
    {
        $data = $request->all();
        $findId = tblCart::find($id);
        $code = Transaksi::count();
        $codeTransaksi = date('Ymd') . $code + 1;
        // $data = tblCart::find($id);
        // dd($data);

        $detailTansaksi = new detailTransaksi;
        // ketika si user ini sudah transaksi dan dia back mau ganti transaksi maka jadi update
        $fieldDetail = [
            'id_transaksi' => $codeTransaksi,
            'id_barang' => $data['id_barang'],
            'qty' => $data['qty'],
            'price' => $data['total'],
        ];

        $detailTansaksi->create($fieldDetail);

        $fieldCart = [
            'qty' => $data['qty'],
            'price' => $data['total'],
            'status' => 1,
        ];

        $findId->update($fieldCart);
        Alert::toast('Checkout Berhasil', 'success');

        return redirect()->route('checkout');

    }

    public function admin()
    {
        return view('admin.dashboard', [
            'name' => 'Dashboard',
            'title' => 'Admin'
        ]);
    }

    public function product()
    {
        return view('admin.product', [
            'name' => 'Product',
            'title' => 'product'
        ]);
    }
    public function userManagement()
    {
        return view('admin.user', [
            'name' => 'User Management',
            'title' => 'user management'
        ]);
    }
    public function report()
    {
        return view('admin.report', [
            'name' => 'Repport',
            'title' => 'repport'
        ]);
    }

    public function login()
    {
        return view('admin.login', [
            'name' => 'Login',
            'title' => 'Admin Login',
        ]);
    }

    public function loginproses(Request $request)
    {
        // dd($request->all());
        // Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->is_admin == 0) {
                Alert::toast('Maaf Anda bukan admin', 'error');
                return back();
            } else {
                if (Auth::attempt($dataLogin)) {
                    // Session::flash('success', 'Login Berhasil');
                    Alert::toast('Kamu Login Berhasil', 'success');
                    $request->session()->regenerate();
                    return redirect()->route('admin');
                } else {
                    Alert::toast('Email dan Password tidak valid', 'error');
                    return back();
                }
            }
        } else {
            Session::flash('error', 'Email tidak ditemukan');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu Berhasil logout', 'success');
        return redirect()->route('login');
    }
}

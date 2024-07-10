<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $product = Product::orderBy('created_at', 'desc')->paginate(6);
        return view('pelanggan.shop', [
            'title' => 'Shop',
            'products' => $product
        ]);
    }

    public function transaksi()
    {
        return view('pelanggan.transaksi', [
            'title' => 'Transaksi'
        ]);
    }

    public function contact()
    {
        return view('pelanggan.contact', [
            'title' => 'Contact'
        ]);
    }

    public function checkout()
    {
        return view('pelanggan.checkout', [
            'title' => 'Checkout'
        ]);
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

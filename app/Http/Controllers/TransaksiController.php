<?php

namespace App\Http\Controllers;

use App\Models\tblCart;
use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $best = Product::where('quantity_out', '>', 5)->orderBy('created_at', 'desc')->get();
        $products = Product::orderBy('created_at', 'desc')->get();
        $countKeranjang = tblCart::count();
        return view('pelanggan.home', [
            'title' => 'Pelanggaan',
            'products' => $products,
            'bests' => $best,
            'count_keranjang' => $countKeranjang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request, $id)
    {
        $idProduct = $request->input('idProduct');
        $db = new tblCart;
        $product = Product::find($id);
        $field = [
            'idUser' => 'gues123',
            'id_barang' => $product->id,
            'qty' => 1,
            'price' => $product->harga,
        ];

        tblCart::create($field);
        Alert::toast('Produk ditambahkan ke keranjang', 'success');
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}

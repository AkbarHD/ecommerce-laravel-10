<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Console\View\Components\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product', [
            'name' => 'Product',
            'title' => 'product',
            'product' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addModal()
    {
        return view('admin.modal.addModal', [
            'title' => 'Add Product',
            'sku' => 'BRG' . rand(100000, 999999),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        // dd($request->all());
        $data = new Product();
        $data->sku = $request->sku;
        $data->nama_product = $request->nama_product;
        $data->type = $request->type;
        $data->kategory = $request->kategory;
        $data->harga = $request->harga;
        $data->quantity = $request->quantity;
        $data->foto = $request->foto;
        $data->discount = 10 / 100;
        $data->is_active = 1;

        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $fileName = date('Ymd') . '-' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $fileName);
            $data->foto = $fileName;
        }

        $data->save();
        return redirect()->route('product')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

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
        $data = Product::paginate(2);
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
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('admin.modal.editModal', [
            'title' => 'Edit Product',
            'product' => $data,
        ])->render();
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
    public function update(UpdateProductRequest $request, $id)
    {
        $data = Product::findOrFail($id);
        $oldPhoto = $data->foto; // simpan nama file foto lama
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '-' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;

            // Hapus foto lama jika ada dan berbeda dengan foto default (misalnya tidak kosong atau nama tertentu)
            if ($oldPhoto && file_exists(public_path('storage/product/' . $oldPhoto))) {
                unlink(public_path('storage/product/' . $oldPhoto));
            }
        } else {
            $filename = $request->foto;
        }

        $field = [
            'sku' => $request->sku,
            'nama_product' => $request->nama_product,
            'type' => $request->type,
            'kategory' => $request->kategory,
            'harga' => $request->harga,
            'quantity' => $request->quantity,
            'discount' => 10 / 100,
            'is_active' => 1,
            'foto' => $filename
        ];

        $data->update($field);
        return redirect()->route('product')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);

        // Hapus file foto jika ada
        if ($data->foto) {
            $fotoPath = public_path('storage/product/' . $data->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        $data->delete();
        return response()->json(['success' => 'Product deleted successfully.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::simplePaginate(10);
        return view('products.index', compact('products'));
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('landingPage', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required',
        ]);
        $proses = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'type' => $request->type,
        ]);
        if ($proses) {
            return redirect()->route('products.index')->with('success', 'Berhasil Menambahkan Product');
        } else {
            return redirect()->back()->with('failed', 'gagal menambahkan data product');
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
            'type' => 'required',
        ]);
        $proses = Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'type' => $request->type,
        ]);
        if ($proses) {
            return redirect()->route('products.index')->with('success', 'Berhasil Mengedit Product');
        } else {
            return redirect()->back()->with('failed', 'gagal mengedit data product');
        }
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return redirect()->route('products.index')->with('success', 'Berhasil Menghapus Product');
    }
}

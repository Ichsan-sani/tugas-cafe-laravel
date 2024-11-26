<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'type' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');

            $imagePath = $image->store('public/img');
            $imagePath = str_replace('public/', 'storage/', $imagePath);
        }

        $proses = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'img' => $imagePath ?? null,
            'type' => $request->type,
        ]);

        if ($proses) {
            return redirect()->route('products.index')->with('success', 'Berhasil Menambahkan Product');
        } else {
            return redirect()->back()->with('failed', 'Gagal menambahkan data product');
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
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::find($id);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
            'type' => $request->type,
        ];

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagePath = $image->store('public/img');
            $data['img'] = str_replace('public/', 'storage/', $imagePath);
        }

        $proses = $product->update($data);

        if ($proses) {
            return redirect()->route('products.index')->with('success', 'Berhasil Mengedit Product');
        } else {
            return redirect()->back()->with('failed', 'Gagal Mengedit Data Product');
        }
    }


    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return redirect()->route('products.index')->with('success', 'Berhasil Menghapus Product');
    }
}

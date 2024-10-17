<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::simplePaginate(5);
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'stock'=>'required|numeric',
            'price'=>'required|numeric',
            'type'=>'required',
        ]);
        $proses = Product::create([
            'name'=> $request-> name,
            'stock'=> $request-> stock,
            'price'=> $request-> price,
            'type'=> $request-> type,
        ]);
        if ($proses) {
            return redirect()->route('products')->with('success','Berhasil Menambahkan Product');
        }else{
            return redirect()->back()->with('failed','gagal menambahkan data product');
        }
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
    public function edit($id)
{
    $product = Product::find($id);  
    return view('products.edit', compact('product'));
}
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'stock'=>'required|numeric',
            'price'=>'required|numeric',
            'type'=>'required',
        ]);
        $proses = Product::where('id',$id)->update([
            'name'=> $request-> name,
            'stock'=> $request-> stock,
            'price'=> $request-> price,
            'type'=> $request-> type,
        ]);
        if ($proses) {
            return redirect()->route('products')->with('success','Berhasil Mengedit Product');
        }else{
            return redirect()->back()->with('failed','gagal mengedit data product');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::where('id',$id)->delete();

        return redirect()->route('products')->with('success','Berhasil Menghapus Product');
    }
}

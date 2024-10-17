<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::simplePaginate(5);
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'role'=>'required',
                'password'=>'required|min:6',
            ]
            );

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,                     
            'password' => Hash::make($request->password),   
        ]);

        return redirect()->route('users')->with('success','Berhasil Menambahkan User');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);   
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'role'=>'required',
        ]);

        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users')->with('success','Berhasil Mengedit User');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id',$id)->delete();

        return redirect()->route('users')->with('success','Berhasil Menghapus User');
    }
}

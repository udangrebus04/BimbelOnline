<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all(); //ngambil semua data user
        return view('user.index', compact('users'));
    }

    public function create(){
        $data = [
            "roles" => Role::all()
        ];
        return view('user.create',$data);
    }

    public function store(Request $request){
       
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
            'role_id' => ['required', 'numeric'],
        ]);

        $users = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role_id' => $request->input('role_id'),
        ]);

        return redirect()->route('user.index')->with('success', 'Data Baru Berhasil Ditambahkan');
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    }

        // In your controller method
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'role_id' => 'required|numeric',
        ]);
    
        $user->update($validatedData);
    
        return redirect()->route('user.index')->with('success', 'Data Berhasil Diperbaharui');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus.');
    }
}
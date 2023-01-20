<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        $users  = User::get();
        // dd($users);

        return view('users.index', compact('users'));
  
    }

    public function show($id) {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }


    public function create() {

        return view('users.create');
    }

    public function store(StoreUserRequest $request) {
        
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        User::create($data);
       //dd($request->all());

       return redirect()->route('users.index');
    }
}

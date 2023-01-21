<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $model;
    public function __construct(User $user)
    {
        $this->model = $user; //User::
    }

    public function index(Request $request)
    {
        $search = $request->search;
        $users = $this->model
            ->getUsers(search: $request->search ?? '');
        //$users  = User::get();  // dd($users);

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = $this->model->findOrFail($id);

        return view('users.show', compact('user'));
    }


    public function create()
    {

        return view('users.create');
    }


    public function store(StoreUserRequest $request)
    {

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        User::create($data);
        //dd($request->all());

        return redirect()->route('users.index');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }


    public function update(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::findOrFail($request->id)->update($data);
        //  dd($data);
    }


    public function destroy(Request $request, $id)
    {
        $id = $request['index_id'];
        dd('teste', $id);
        User::findOrFail($id)->delete();

        //  return redirect('/users/dashboard')->with('mensagem', 'Usuario deletado com Sucesso!'); 
    }
}

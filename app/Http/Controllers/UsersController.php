<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UserRequest $request) // A classe form Request realiza as validações em formulários no laravel
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return 'Cliente Criado com Sucesso!';
    }

    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', ['usuario' => $usuario]);
    }

    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function update(UserRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) 
        ]);

        return "Produto Atualizado com Sucesso";
    }

    public function delete($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.delete', ['usuario' => $usuario]);
    }

    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return "Usuário excluído com sucesso!";
    }

}

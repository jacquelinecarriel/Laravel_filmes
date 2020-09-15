<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsuarioController extends Controller
{
            public function exibirTodos(Request $request)
        {
            $todosUsuarios = User::all();
            return response()->json($todosUsuarios);
        }
            public function exibirUmUsuario(Request $request, $id)
        {
            $usuarios = User::find($id);
            return response()->json($usuarios);

        }
    
        public function criarUmUsuario(Request $request)
        {
            $usuarios = new User();
            $usuarios->name = $request->name;
            $usuarios->email = $request->email;
            $usuarios->password = Hash::make($request->password);
            $usuarios->save();

            return response()->json(['usuario criado com sucesso!']);

        }
        
        public function atualizarUmUsuario(Request $request, $id)
        {
            $usuarios = User::find($id);
            $usuarios->name = $request->name;
            $usuarios->email = $request->email;
            $usuarios->password = Hash::make($request->password);
            $usuarios->save();

            return response()->json(['Atualizado com sucesso!']);
        }
        public function deletarUmUsuario(Request $request, $id)
        {
            $usuarios = User::find($id);
            $usuarios->delete();
        }
}


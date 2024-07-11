<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        $dados = User::all();

        $users = User::orderBy('name', 'asc')->get();

        return view('users.index', [
            'users' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('users.cadastrar');
    }

    public function gravar(Request $form){
        $dados = $form->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'admin' => 'boolean'
        ]);
        $dados['password'] = Hash::make($dados['password']);
        User::create($dados);
        
        return redirect()->route('users');
    }

    public function editar(User $user) {
        return view('users/editar', ['user' => $user]);
       }

    public function editarGravar(Request $form, User $user)
        {
            $dados = $form->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users',
                'username' => 'required|max:255',
                'password' => 'required|max:255',
                'admin' => 'boolean'
            ]);

            $user->fill($dados);
            $user->save();
            return redirect()->route('users');
        }

    public function apagar(User $user){
        return view('users.apagar', [
            'user' => $user,
        ]);
    }

    public function deletar(User $user){
        $user->delete();
        return redirect()->route('users');
    }

    public function login(Request $form){
        if($form->isMethod('POST')){
            dd($form);
        }
        return view('users.login');
    }

    public function logout(){

    }
}

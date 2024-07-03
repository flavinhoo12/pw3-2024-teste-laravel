<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimaisController extends Controller{
    public function index(){
        $dados = Animal::all();

        return view('animais.index', [
            'animais' => $dados,
        ]);
    }

    public function cadastrar(){
        return view('animais.cadastrar');
    }

    public function gravar(Request $form){
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer'
        ]);
        Animal::create($dados);
        
        return redirect()->route('animais');
    }

    public function editar(Animal $animal) {
        return view('animais/editar', ['animal' => $animal]);
       }

    public function editarGravar(Request $form, Animal $animal)
        {
            $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer',
            ]);

            $animal->fill($dados);
            $animal->save();
            return redirect()->route('animais');
        }

    public function apagar(Animal $animal){
        return view('animais.apagar', [
            'animal' => $animal,
        ]);
    }

    public function deletar(Animal $animal){
        $animal->delete();
        return redirect()->route('animais');
    }
}

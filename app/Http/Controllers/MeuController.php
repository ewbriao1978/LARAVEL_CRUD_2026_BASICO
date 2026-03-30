<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class MeuController extends Controller
{
    //
    public function mostraTela() {
        return view('minha_tela');
    }
    public function mostraProdutos() {
        $data = Usuarios::all(); 
        return view('produtos', ['usuarios' => $data]);
    }
    public function mostraFormulario() {
        return view('formulario');
    }
    public function processaFormulario(Request $request) {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $dados = [
            'nome' => $nome,
            'email' => $email
        ];
        Usuarios::create($dados);

       return view('apresenta_dados_formulario', $dados);
    }

    public function deletaProduto(Request $request, $id_excluir) {
       
        Usuarios::destroy($id_excluir);
        return redirect('/produtos');
    }
}

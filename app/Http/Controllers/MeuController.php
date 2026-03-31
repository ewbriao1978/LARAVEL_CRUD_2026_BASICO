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

    public function mostraFormularioEditar(Request $request, $id_editar) {
        $usuario = Usuarios::find($id_editar);
        return view('formulario_editar', ['usuario' => $usuario]);
    }
    public function atualizaUsuario(Request $request, $id_para_atualizar) {
        $data = [
            'id' => $id_para_atualizar,
            'nome' => $request->input('nome'),
            'email' => $request->input('email')
         ];
        Usuarios::where('id', $id_para_atualizar)->update($data);
         

        
        
        return redirect('/produtos');
    }
}

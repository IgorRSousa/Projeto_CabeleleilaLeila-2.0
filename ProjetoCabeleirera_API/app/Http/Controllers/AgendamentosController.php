<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamentos;

class AgendamentosController extends Controller{

    public function agendar(Request $request){
        // Validação dos dados recebidos do front-end
        
        // Criar uma nova instância do modelo e definir os atributos com os dados recebidos
        $usuario = new Agendamentos;
        $usuario->nome = $request->input('nome');
        $usuario->data = $request->input('data');
        $usuario->hora = $request->input('hora');
        $usuario->servico = $request->input('servico');
        if($request->input('observacao') == ''){
            $obs = "Nenhuma observação registrada.";
        }else{
            $obs = $request->input('observacao');
        }
        $usuario->observacao = $obs;

        // Salvar o objeto no banco de dados
        $usuario->save();

        // Retornar a resposta adequada para o front-end
        return response()->json(['mensagem' => 'Agendamento salvo com sucesso'], 201);
    }

    public function listarAgenda(){

        $dados = Agendamentos::orderBy('data','asc')->orderBy('hora', 'asc')->get();
        return response()->json($dados);
    }

    public function consultar($id){

        $usuario = Agendamentos::find($id);
        return response()->json($usuario);
    }

    public function alterar(Request $request, $id){
        
        $usuario = Agendamentos::find($id);
        if($usuario){
            $usuario->nome = $request->input('nome');
            $usuario->data = $request->input('data');
            $usuario->hora = $request->input('hora');
            $usuario->servico = $request->input('servico');
            $usuario->observacao = $request->input('observacao');

            $usuario->save();

            return response()->json(['mensagem' => 'Agendamento alterado com sucesso'], 201);
        }else{
            return response()->json([
                'erro' => 'Registro não encontrado'
            ], 404);
        }
        
    }
} 
?>
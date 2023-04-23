<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamentos;

class AgendamentosController extends Controller{

    public function agendar(Request $request){

        $usuario = Agendamentos::where('data', $request->input('data'))->where('hora', $request->input('hora'))->first();
        
        if($usuario){
            return response()->json(['mensagem' => 'Ja exixte agendamento salvo nessa data e hora !'], 201);
        }else{
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

            $usuario->save();

            return response()->json(['mensagem' => 'Agendamento salvo com sucesso !'], 201);
        }
        
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
    
    public function deletar($id){

        $usuario = Agendamentos::find($id);
        $usuario->delete();
        return response()->json(['mensagem' => 'Agendamento deletado com sucesso'], 201);
    }
} 
?>
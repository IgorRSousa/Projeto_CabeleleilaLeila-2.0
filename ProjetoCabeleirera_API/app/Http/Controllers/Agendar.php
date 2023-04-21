<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Agendamento;

class Agendar extends BaseController{

    public function agendar(Request $request){
        // Validação dos dados recebidos do front-end
        
        // Criar uma nova instância do modelo e definir os atributos com os dados recebidos
        $usuario = new Agendamento;
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
        return response()->json(['mensagem' => 'Dados salvos com sucesso'], 201);
    }
} 
?>
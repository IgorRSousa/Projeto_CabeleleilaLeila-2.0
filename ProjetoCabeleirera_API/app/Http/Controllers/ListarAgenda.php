<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\ListarA;

class ListarAgenda extends BaseController{

    public function listarAgenda(){

        $dados = ListarA::orderBy('data','asc')->orderBy('hora', 'asc')->get();
        return response()->json($dados);
    }
} 
?>
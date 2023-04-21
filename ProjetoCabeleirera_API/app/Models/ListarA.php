<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class ListarA extends Model{
    protected $table = 'agendamentos';
    protected $fillable = ['id','nome', 'data', 'hora', 'servico', 'observacao'];
}
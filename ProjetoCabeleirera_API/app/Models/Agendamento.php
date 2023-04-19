<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Agendamento extends Model{
    protected $table = 'agendamentos';
    protected $fillable = ['nome', 'data', 'hora', 'servico', 'observacao'];
    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'alterado_em';
}
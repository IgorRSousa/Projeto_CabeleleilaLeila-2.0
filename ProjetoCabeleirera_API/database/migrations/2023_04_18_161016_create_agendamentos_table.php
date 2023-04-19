<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->date("data");
            $table->time("hora");
            $table->string("servico");
            $table->text("observacao");
            $table->timestamp('criado_em');
            $table->timestamp('alterado_em');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};

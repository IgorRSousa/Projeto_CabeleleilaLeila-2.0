<?php

use Illuminate\Support\Facades\Date;

    $url = 'http://localhost:8000/consultarAgendamento/'.$_POST["id"].'';
    $dado = file_get_contents($url); // executa link da api e recebe a resposta
    $jsonDados = json_decode($dado);

    $data_agendamento = new Datetime($jsonDados->data);
    $data_atual = new Datetime(date('Y-m-d'));
    $diferenca = $data_agendamento->diff($data_atual);
?>

<h1 class="m-3 text-center">Editar Serviço</h1>
<form action="<?php if($diferenca->d <= 2){print 'listarAgenda';}else{print 'salvarAlteracaoAgendamento';}?>" method="post">
<input type="hidden" name="id" value="<?php print $_POST["id"]?>">
    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">  
            <label>Nome</label>
            <input type="text" name="nome" class="form-control"  placeholder="Nome"  value="<?php print $jsonDados->nome?>" <?php if($diferenca->d <= 2){print 'disabled=""';}?>required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">
            <label>Serviço desejado</label>
            <input type="text" name="servico" class="form-control"  placeholder="Serviço desejado" value="<?php print $jsonDados->servico?>" <?php if($diferenca->d <= 2){print 'disabled=""';}?> required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-3">
            <label>Data do Agendamento</label>
            <input type="date" name="data" class="form-control"  value="<?php print $jsonDados->data?>" <?php if($diferenca->d <= 2){print 'disabled=""';}?> required>
        </div>
        <div class="col-sm-3">
            <label>Horario do Agendamento</label>
            <input type="time" name="hora" class="form-control" value="<?php print $jsonDados->hora?>" <?php if($diferenca->d <= 2){print 'disabled=""';}?> required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col sm"></div>
        <div class="col-sm-6">
            <label>Observação</label>
            <input type="text" name="observacao" class="form-control" placeholder="Observação" value="<?php print $jsonDados->observacao?>" <?php if($diferenca->d <= 2){print 'disabled=""';}?>>
        </div> 
        <div class="col"></div>
    </div>

    <?php
    if($diferenca->d <= 2){ 
        print'<div class="row mx-5 mb-3">
            <div class="col sm"></div>
                <div id="emailHelp" class="form-text col-sm-6">Menos de dois dias para o Serviço caso queira reagendar ligar para (14) 1234-5678.</div>
            <div class="col"></div>
        </div>';
    }
    ?>
    
    <div class="row mx-5">
            <div class="col-sm-3"></div>
            <div class="col">
            <?php 
            if($diferenca->d <= 2){
                print '<button type="submit" class="btn btn-primary">Voltar</button>';
            }else{
                print '<button type="submit" class="btn btn-primary">Enviar</button>';
            }?>
            </div>
            
    </div>
</form>
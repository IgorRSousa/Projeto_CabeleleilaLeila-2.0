<?php
    $url = 'http://localhost:8000/consultarAgendamento/'.$_POST["id"].'';
    $dado = file_get_contents($url); // executa link da api e recebe a resposta
    $jsonDados = json_decode($dado);
?>

<h1 class="m-3 text-center">Editar Serviço</h1>
<form action="salvarAlteracaoAgendamento" method="post">
<input type="hidden" name="id" value="<?php print $_POST["id"]?>">
    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">  
            <label>Nome</label>
            <input type="text" name="nome" class="form-control"  placeholder="Nome"  value="<?php print $jsonDados->nome?>" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">
            <label>Serviço desejado</label>
            <input type="text" name="servico" class="form-control"  placeholder="Serviço desejado" value="<?php print $jsonDados->servico?>" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-3">
            <label>Data do Agendamento</label>
            <input type="date" name="data" class="form-control"  value="<?php print $jsonDados->data?>" required>
        </div>
        <div class="col-sm-3">
            <label>Horario do Agendamento</label>
            <input type="time" name="hora" class="form-control" value="<?php print $jsonDados->hora?>" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col sm"></div>
        <div class="col-sm-6">
            <label>Observação</label>
            <input type="text" name="observacao" class="form-control" placeholder="Observação" value="<?php print $jsonDados->observacao?>">
        </div>  
        <div class="col"></div>
    </div>

    <div class="row mx-5">
            <div class="col-sm-3"></div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    </div>
</form>
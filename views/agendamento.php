<h1 class="m-3 text-center">Agendar Serviço</h1>
<form action="criarAgendamento" method="post">
    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">  
            <label>Nome</label>
            <input type="text" name="nome" class="form-control"  placeholder="Nome" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-6">
            <label>Serviço desejado</label>
            <input type="text" name="servico" class="form-control"  placeholder="Serviço desejado" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col"></div>
        <div class="col-sm-3">
            <label>Data do Agendamento</label>
            <input type="date" name="data" class="form-control" required>
        </div>
        <div class="col-sm-3">
            <label>Horario do Agendamento</label>
            <input type="time" name="hora" class="form-control" required>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mx-5 mb-3">
        <div class="col sm"></div>
        <div class="col-sm-6">
            <label>Observação</label>
            <input type="text" name="observacao" class="form-control" placeholder="Observação">
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
<h1 class="my-3 mx-5">Serviços Agendados: </h1>
<div class="mx-5">
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Data</th>
        <th scope="col">Hora</th>
        <th scope="col">Serviço</th>
        <th scope="col">Observação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $url = 'http://localhost:8000/listarAgenda';
            $dado = file_get_contents($url); // executa link da api e recebe a resposta
            $jsonDados = json_decode($dado);

            foreach($jsonDados as $dado) {
                echo '<tr>';
                echo '<td>'.$dado->id.'</th>';
                echo '<td>'.$dado->nome.'</th>';
                echo '<td>'.$dado->data.'</th>';
                echo '<td>'.$dado->hora.'</th>';
                echo '<td>'.$dado->servico.'</th>';
                echo '<td>'.$dado->observacao.'</th>';
                echo '</tr>';
            }
        ?>
    </tbody>
    </table>
</div>
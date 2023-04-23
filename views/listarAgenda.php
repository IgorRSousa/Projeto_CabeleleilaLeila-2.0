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
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $url = 'http://localhost:8000/listarAgenda';
                $dado = file_get_contents($url); // executa link da api e recebe a resposta
                $jsonDados = json_decode($dado);

                $dataFormatada = new DateTime();

                foreach($jsonDados as $dado) {
                    print '<tr>';
                    print '<td>'.$dado->id.'</th>';
                    print '<td>'.$dado->nome.'</th>';
                    print '<td>'.date("d-m-Y", strtotime($dado->data)).'</th>';
                    print '<td>'.date("H:i", strtotime($dado->hora)).'</th>';
                    print '<td>'.$dado->servico.'</th>';
                    print '<td>'.$dado->observacao.'</th>';
                    print '<td><button class="btn btn-warning" onclick=\'location.href="/views/Controles/encaminhar_id.php?id='.$dado->id.'"\'>Editar</button></th>';
                    print '</tr>';
                }
            ?>
        </tbody>    
    </table>
</div>
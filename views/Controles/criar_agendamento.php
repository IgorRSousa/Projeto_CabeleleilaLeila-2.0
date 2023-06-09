<?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $servico = $_POST["servico"];
    $observacao = $_POST["observacao"];

    $dataAtual = new DateTime();
    $dataSelecionada = new DateTime($data);

    if ($dataSelecionada > $dataAtual) {
        $dados = array(
            'nome' => $nome,
            'data' => $data,
            'hora' => $hora,
            'servico' => $servico,
            'observacao' => $observacao,
        );
    
        $curl = curl_init();
        $url = "http://localhost:8000/criarAgendamento";
    
        // Configurar as opções da requisição
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($dados));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
        ));
    
        $resultado = curl_exec($curl);
        curl_close($curl);
    
        $resposta = json_decode($resultado, true);
    
        if ($resposta === false) {
            echo '<script>alert("Erro ao decodificar a resposta da API")</script>';
        } else {
            echo '<script>alert("'.$resposta['mensagem'].'")</script>';
        }
        print "<script>location.href='agendar';</script>";
    }else{
        print '<script>alert("Data informada já passou impossivel completar agendamento !")</script>';
        print "<script>location.href='agendar';</script>";
    }

?>
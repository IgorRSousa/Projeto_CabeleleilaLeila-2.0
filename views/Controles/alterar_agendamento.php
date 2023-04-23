<?php
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $hora = $_POST["hora"];
    $servico = $_POST["servico"];
    $observacao = $_POST["observacao"];

    $dados = array(
        'nome' => $nome,
        'data' => $data,
        'hora' => $hora,
        'servico' => $servico,
        'observacao' => $observacao,
    );

    $curl = curl_init();
    $url = "http://localhost:8000/alterarAgendamento/".$_POST["id"];

    // Configurar as opções da requisição
    /*CURLOPT_URL: define a URL da requisição que será enviada.
      CURLOPT_CUSTOMREQUEST: define o método HTTP que será usado na requisição. Neste caso, é "PUT", indicando que a requisição será do tipo PUT.
      CURLOPT_POSTFIELDS: define os dados da requisição que serão enviados no corpo da mensagem. Neste caso, são os dados do usuário que serão atualizados.
      CURLOPT_RETURNTRANSFER: define se a função curl_exec() deve retornar a resposta da requisição como uma string. Neste caso, é true, o que significa que a resposta será retornada.
    */
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($dados));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $resultado = curl_exec($curl);
    curl_close($curl);

    $resposta = json_decode($resultado, true);

    if ($resposta === false) {
        echo '<script>alert("Erro ao decodificar a resposta da API")</script>';
    } else {
        echo '<script>alert("'.$resposta['mensagem'].'")</script>';
    }
    print "<script>location.href='listarAgenda';</script>";
?>
<?php
  $curl = curl_init();
  $url = "http://localhost:8000/deletarAgendamento/".$_REQUEST["id"];

  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $resultado = curl_exec($curl);
  curl_close($curl);

  $resposta = json_decode($resultado, true);

  if ($resposta === false) {
      echo '<script>alert("Erro ao decodificar a resposta da API")</script>';
  } else {
      echo '<script>alert("'.$resposta['mensagem'].'")</script>';
  }
  print "<script>location.href='../../listarAgenda';</script>";
?>
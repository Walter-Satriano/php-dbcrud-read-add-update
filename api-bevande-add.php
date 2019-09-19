<?php

  header('Content-type: application/json');

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'drinkdb';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {

    var_dump('error');
    var_dump($conn);
    die();
  }

  $nome_bevanda = $_GET["nome_bevanda"];
  $marca = $_GET["marca"];
  $prezzo = $_GET["prezzo"];
  $data_di_scadenza = $_GET["data_di_scadenza"];




  $query = "
    INSERT
    INTO bevande (nome_bevanda, marca, prezzo, data_di_scadenza)
    VALUES
      ('" . $nome_bevanda . "', '" . $marca . "', " . $prezzo . ", '" . $data_di_scadenza . "')
  ";

  $res = $conn -> query($query);

  $conn->close();
  echo json_encode($res);

?>

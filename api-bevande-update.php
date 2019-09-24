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

  $id = $_GET["id"];
  $newBevanda = $_GET["nome_bevanda"];
  $newMarca = $_GET["marca"];
  $newPrezzo = $_GET["prezzo"];
  $newScadenza = $_GET["data_di_scadenza"];



  $query = "
    UPDATE bevande
    SET
      nome_bevanda = '" . $newBevanda . "',
      marca = '" . $newMarca . "',
      prezzo = " . $newPrezzo . ",
      data_di_scadenza = '" . $newScadenza . "'
    WHERE id = " . $id . "
  ";

  $res = $conn -> query($query);

  $conn->close();
  echo json_encode($res);

?>

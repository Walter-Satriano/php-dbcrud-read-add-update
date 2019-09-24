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

  $query = "
    DELETE
    FROM bevande
    WHERE id = " . $id . "
  ";


  $res = $conn -> query($query);

  $conn->close();
  echo json_encode($res);

?>

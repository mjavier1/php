<?php
//la conexion conn.php una liberia reconoce formato 


  require "conn.php";

  $data = $conn->query("SELECT * FROM posts");

  $one = $data->fetchColumn(3);
//https://www.phptutorial.net/php-pdo/fetchcolumn/
//definction
  echo $one;
  ?>
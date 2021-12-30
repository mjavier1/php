<?php 

  require "conn.php";
  

  $title = "title number ten";
  $body = "body number ten";

 

  $insert = $conn->prepare("INSERT INTO posts (body, title) VALUES (?, ?)");
  $insert->execute(array(
   $body,
     $title
  

  ));

  echo ($conn->lastInsertId());
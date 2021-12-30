<?php
require "conn.php";
$newTitle = "hello from post one";
$id = 1;
$update = $conn->prepare("UPDATE posts SET body= :body WHERE id=:id");

$update->execute(array(
 
  ":body"=>$newTitle,
  ":id"=>$id
));

?>
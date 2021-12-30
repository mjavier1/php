<?php
require "conn.php";
$body="bodt four";
$title ="title four";

$insert = $conn->prepare("INSERT INTO posts (`body`,`title`) VALUES
(?, ?)");

$insert->execute(array(
    $body,
    $title
   

 ));

 



?>
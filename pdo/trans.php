<?php
require "conn.php";

try {
  //  $conn = new PDO ("mysql:host=$host;dbname=$dbname","$user","$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->query("INSERT INTO posts (body, title) VALUES ('js', 'titlejs')");
    $conn->commit();

    //code...
}catch(Exception $e) {
    $conn->rollback();
    echo $e->getMessage();
    //throw $th;
}

?>

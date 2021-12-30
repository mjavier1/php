<?php


 require "conn.php";
 $rows =  $conn->query("select body from posts");
   foreach($rows as $row) {
 	echo $row['body'] . "<br>";
   }
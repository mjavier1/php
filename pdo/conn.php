<?php
//blogpost
//mi nombre Marcos J Aguirre
/*
pdo creacion sistema php con base de datos
se ultilzo formato 
try{

}catch()
para valizacion de sistema base de datos 
tambien se creo variable
dbname lo escribi db esta mal 
palabra corresta dbname

*/

try {


$host="localhost";
$dbname="blogpost";
$user="mj";
$password="datasql";
$conn = new PDO ("mysql:host=$host;dbname=$dbname","$user","$password");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  echo $e->getMessage();
//die(""); error database 



// $rows = $conn->query("select body from posts");
  // foreach($rows as $row) {
  // 	echo $row['body'] . "<br>";
  // }

}



$rows = $conn->query("select body from posts");
 foreach($rows as $row) {
 	echo $row['body'] . "<br>";
 }





/*

$host="localhost";
$db="blogpost";
$user="mj";
$password="datasql";
$conn = new PDO ("mysql:host=$host;db=$db","$user","$password");
echo"ok";
if ($conn==true) {
    # code...
    echo"database is working fine";
}
else
{
    echo"smth is wrong";
}
*/
?>

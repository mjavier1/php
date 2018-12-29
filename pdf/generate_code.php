

<?php 

if(isset($_POST['generate_text']))
{
$conexion=mysqli_connect('localhost','mj','datasql','qrimagen');
 include('phpqrcode/qrlib.php'); 


$na=$_POST['na'];	
$ape=$_POST['ape'];
$em=$_POST['em'];



 $text=$_POST['qr_text'];
 $folder="images/";
 $file_name="qr.png";

 $file_name=$folder.$file_name; 
 $x=($text.$na.$ape.$em);
 QRcode::png($x,$file_name);


 echo"<img src='images/qr.png' style='width:1000px;height:1000px;'>";
 
 //To Display Code Without Storing 

 QRcode::png($x);

  $sql="INSERT INTO qrcode (`imagen`,`nombre`,`apellido`,`mail`) VALUES ('$x','$na','$ape','$em')";
 mysqli_query($conexion,$sql);




}
?>
<li><a href="pdfgerenator.php">pdf</a>

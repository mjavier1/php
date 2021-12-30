<?php
require"conn.php";
$data =$conn->query("SELECT * FROM posts");
$all =$data ->fetchAll(PDO::FETCH_ASSOC);

//FETCH_NUM
echo"<pre>";
print_r($all);
echo"</pre>";

echo $all['1']['body'];
?>

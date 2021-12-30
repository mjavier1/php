<?php

require "conn.php";
$data = $conn->query("SELECT * FROM posts");
//print_r($data->rowCount());
if ($data->rowCount()> 0) {
    # code...

    while ($row=$rows->fetch(PDO::FETCH_ASSOC)) {
        echo $row['body']."<br>";
        # code...
    }
} else{
    echo "no result yet";
}

?>
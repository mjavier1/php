<?php

require "conn.php";
if(isset($_POST['mytask']))
{
$task = $_POST['task'];
$insert=$conn->prepare("INSERT INTO tasks (mame) VALUES (:name)");

$insert->execute([':name'=>$task]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">

  

<div class="form-ground mx-sm 3 mb">

  
  <form method="POST" action="index.php" class="form-inline">

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter email" name="name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

</body>
</html>

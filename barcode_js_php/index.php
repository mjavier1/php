<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="JsBarcode.all.min.js"></script>
	<title></title>
</head>
<body>
<div class="container">
	<h1>Genera codigo de barras dinamico con jsbarcode</h1>
	<div class="row">
		<div class="col-sm-4">
<form action="php/in.php" method="post">
	<label>Nombre</label>
	<input type="text" name="codigo" class="form-control">

<br>
<button type="submit" class="btn btn-primary">Crear general</button>
</form>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-10">	


	        
<?php require_once"tablein.php"; ?>

</div>
</div>
</body>
</html>

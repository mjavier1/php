<?php
require_once"php/conn.php";
$conexion=conexion();
$sql="SELECT * from t_productos";
$result=mysqli_query($conexion,$sql);
$arrayCodigos=array();
?>
<table class="table">
	<caption>Codigo de barras</caption>
	<tr>

	<td>nombre</td>
	<td>codigobarra</td>	
	</tr>

	<?php while($ver=mysqli_fetch_row($result)): 
$arrayCodigos[]=(string)$ver[2];

		?>

	<tr>
	<td><?php echo $ver[1]; ?></td>
        <td>

	<svg id='<?php echo "barcode".$ver[2]; ?>'>

	</td>	
	</tr>
<?php endwhile; ?>
</table>

<script type="text/javascript">

		function arrayjsonbarcode(j){
			json=JSON.parse(j);
			arr=[];
			for (var x in json) {
				arr.push(json[x]);
			}
			return arr;
		}

		jsonvalor='<?php echo json_encode($arrayCodigos) ?>';
		valores=arrayjsonbarcode(jsonvalor);

		for (var i = 0; i < valores.length; i++) {

			JsBarcode("#barcode" + valores[i], valores[i].toString(), {
				format: "codabar",
				lineColor: "#000",
				width: 2,
				height: 30,
				displayValue: true
			});
		}
		
	</script>
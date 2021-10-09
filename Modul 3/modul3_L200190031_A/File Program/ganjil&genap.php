<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Program Ganjil Genap</title>
</head>
<body>  
	<form method="post" action="">  
	  Masukan angka: <input type="text" name="bilangan" size="5"><br>
	  <input type="submit" name="submit" value="Submit" size="3">  
	</form><br>
	
	<?php
	$display = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bilangan = $_POST["bilangan"];
			
			if ($bilangan % 2 == 0){ 
			    echo "$bilangan adalah angka Genap";
		}else {
			    echo "$bilangan adalah angka Ganjil";
		}
	}
?>
</body>
</html>
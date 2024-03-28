	<!DOCTYPE html>
<html lang="pt-b">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora php</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
<audio id="meuAudio" autoplay>
<source src="drake-hotline-bling.mp3" type="audio/mp3">
</audio>
	<div class="container">
	<form name="calculator">
	<h1>Calculadora</h1>
<?php 
	if(isset($_GET['operacao']) && isset($_GET['x']) && isset($_GET['y'])){

		if($_GET['operacao'] == "adicao"){
			echo $_GET['x'] + $_GET['y'];
		}
		else if($_GET['operacao'] == "subtracao"){	
			echo $_GET['x'] - $_GET['y'];
		}
		else if($_GET['operacao'] == "multiplicacao"){
			echo $_GET['x'] * $_GET['y'];
		}
		else if($_GET['operacao'] == "divisao"){
			echo $_GET['x'] / $_GET['y'];
		}
		else{
			echo "<h3 id=idf> Operação selecionada incorretamente. </h3>";
		}
	}
	else{
		echo "<h3 id=idf> Nada selecionado. </h3>";
	}
?>
	</form>
	</div>
</body>
</html>
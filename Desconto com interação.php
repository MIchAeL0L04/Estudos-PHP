<doctype html>
<html>

<head>
	<title>PHP</title>
	
<style type="text/css">

</style>
</head>

<body>

	<?php
	
		$preco = $_GET ["p"];
		echo "O preço do produto é $preco";
		$preco = $preco - ($preco*10/100);
		
		echo "</br>E o novo preço com o desconto de 10 será: " .$preco;
		
		
		
	
		
	?>
	
</body>

</html>
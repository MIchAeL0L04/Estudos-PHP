<html>

<head>
	<title>PHP</title>
	
<style type="text/css">


</style>
</head>

<body>

	<?php
	
		$n1 = $_GET ["n1"];
		$n2 = $_GET ["n2"];
		$n3 = $_GET ["n3"];
		$n4 = $_GET ["n4"];
		
		$me = ($n1 + $n2 + $n3 + $n4) /4;
		
		
		echo "Primeira Nota: ". $n1;
		echo "</br>Segunda Nota: ". $n2;
		echo "</br>Terceira Nota: ". $n3;
		echo "</br>Quarta Nota: ". $n4;
		
		echo "</br></br>Média Final: ". $me;
		
		echo "</br></br>n1 = primeira nota.... até sn4";
		
		$ns = 9;
		$an = &$ns;
		$an += 5;
		
		echo "</br>$ns"
		
		
		
	
		
	?>
	
</body>

</html>
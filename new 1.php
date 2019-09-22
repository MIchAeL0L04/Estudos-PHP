<doctype html>
<html>

<head>
	<title>PHP</title>
	
<style type="text/css">

H1
{
	color:blue;
	text-shadow: 1px 1px 1px black;
}
</style>
</head>

<body>

	<?php
	
		$n1 = $_GET ["a"];
		$n2 = $_GET ["b"];
		$n3 = $_GET ["c"];
		$rai = sqrt($n1);
		
		echo "<h1>Valores Recebidos $n1 e $n2 e $n3</h1>";
		
		echo "</br>A potência de $n1 <sup> $n2 </sup> é ". pow($n1, $n2);
	    echo "</br>Hmmmmm 4 <sup> 5 </sup>". pow(4,5);
		
		
		echo "</br> O resultado $n1 + $n2 + $n3 vale ". ($n1+$n2+$n3); 
		
		echo " </br>O resultado de $n1 - $n2 vale ". ($n1-$n2);
	
		echo "	</br> O resultado de $n1 / $n2 vale ". ($n1 / $n2);
		
		echo "</br>A raiz de $n1 é ". sqrt($n1);
		
		echo "</br> A raiz de $n1 arredondada é ". ceil($rai);  // ceil arredonda para cima e floor para baixo.
		
		echo "</br> A parte inteira de $n1 arredondada é ". intval($rai);
		
		echo "</br> A raiz de $n1 formatada com duas casas decimais é R$". number_format($rai,2); 
		
		
		$l = 5;
		
		$l++;             // ++ para adicionar o valor "1".....
		
		echo "</br>$l";
		
		
	
		
	?>
	
</body>

</html>
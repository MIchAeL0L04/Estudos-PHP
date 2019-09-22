<?php

$n1 = $GET_['a'];
$n2 = $GET_['b'];
$tipo = $GET_['op'];

echo "Os valores passados foram $n1 e $n2 <br/>";

$r = ($tipo == 's') ? $n1 + $n2: $n1*$n2; 



?>
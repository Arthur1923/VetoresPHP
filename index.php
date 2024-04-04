<?php

echo"<pre>";

$lista[] = 10;
$lista[] = 11;
$lista[] = 12;

for ($i=0; $i < count($lista); $i++);

var_dump($lista);

$lista1 = array();

var_dump($lista1);

$lista1 = array();

$lista2 = [1,2,3, "teste", 5];
var_dump($lista2);
unset($lista2[3]);
$lista2[] = 20;

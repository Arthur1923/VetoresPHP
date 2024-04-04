<?php

echo"<pre>";

$lista["A"] = 10;
$lista["B"] = 11;
$lista["C"] = 12;
$lista["D"] = 13;
$lista["E"] = 14;

$lista["alunos"] = array("matricula"=>1,"email"=>"aluno@etecjk");
$lista["materias"] = array("DES I","PWII");


for ($i=0; $i < count($lista); $i++); {

    echo "Posição;".$i. "valor:".$lista[$i]. "<br>";
}

foreach ($lista as $valor){}

var_dump($lista);

$lista1 = array();

var_dump($lista1);

$lista1 = array();

$lista2 = [1,2,3, "teste", 5];
var_dump($lista2);
unset($lista2[3]);
$lista2[] = 20;

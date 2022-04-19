<?php
$a = 1000;
$b = $a / 2;
echo $b;
echo '<br>';

$a = 100;
$b = $a * 3;
echo $b;
echo '<br>';

$a = 20;
echo $a;
echo '<br>';
$a = 21;
echo $a;
echo '<br>';
echo '<br>';

$a = 20;
echo $a++;
echo '<br>';
echo $a;
echo '<br>';
echo '<br>';

$a = 100;
$b = 250;
$c = $a + $b;
$c ++;
echo $c;

//Joke
$nome = 'adriano';
echo '<hr>';
echo " ". strlen($nome);
echo '<hr>';
//joke2
$nome = 'adriano';
$nome2 =  str_replace($nome,"a","o");
echo $nome2;
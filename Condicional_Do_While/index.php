<?php
# Ciclos / Loops
# Do While

# É muito semelhante ao ciclo WHILE, contudo, nete caso a condição é avaliada após a execução do ciclo.

$x = 0;
do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<hr>';

# De modo igual, quando só temos uma expressão a executar, podemos ignorar as chaves.
$x = 0;
do
echo $x++ . '<br>';
while ($x < 10);
echo '<hr';










?>
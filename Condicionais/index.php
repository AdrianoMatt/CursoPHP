<?php
#Declaração de instruções condicionais
#IF - definição de blocos de código que só executam caso condição seja true

$nome = 'Adriano';
if($nome =='Adriano')
{
echo 'O nome foi validado.';
}

echo '<br>';
echo '<br>';
echo '<br>';

#If e ELSE
$idade = 24;
if($idade <=24)
{echo 'Jovem';}
else{echo 'Museu';}

echo '<br>';
echo '<br>';
echo '<br>';

#IF, ELSEIF e ELSE
$nota = 9;
if($nota <=2){
    echo 'Nota fraca :(';}
    elseif($nota <=4){
        echo 'Nota insulficiente :(';
    }
    elseif($nota <=6){
        echo 'Nota Positiva!';}
        elseif($nota <=8){
            echo 'Nota muito positiva!!';}
            else{
                echo 'Nota excelente!!!';
            }
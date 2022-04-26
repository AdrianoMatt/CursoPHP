<?php
#Declaração/Instruções condicionais
#SWITCH - alternativa de IF

$nome = 'joao';
switch ($nome){
    case 'joao':
    #codigo 1
    break;
    case 'ana':
    #codigo 2
    break;
    default:
    #codigo 3
    break;
}

switch ($nome){
    case 'joao':
        echo '1';
        break;
    case 'ana':
        echo '2';
        break;
    default:
    echo 'outra coisa qualquer';
    break;
}


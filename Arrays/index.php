<?php
# Um array (matriz) é uma coleção de valores. Funciona como uma variável, mas que pode conter muitos valores
# "arrumados" cada um do seu espaço. Esse "espaço" é designado por índice do array.

# Resumindo é uma coleção constituida por chaves/índices e valores. As chaves/índices podem ser numéricos
# (array numérico) ou string (array associativo). Os valores podem ser de qualquer tipo, inclusive serem
# outros arrays.

# Exemplos:

$valores = array(1,2,3,10,20,30);
$nomes = array('joao', 'ana', 'carlos');

# A partir do PHP 5.4, passou a ser possível escrever os arrays de forma mais simplificada
$valores = [1,2,3,10,20,30];
$nomes = ['joao', 'ana', 'carlos'];

# Estes arrays são de índice numérico.
# Para apresentar um dos seus valores, procedemos da seguinte forma:
    echo $valores[0];
    echo $valores[1];

# NUNCA ESQUECER QUE OS ARRAYS TEM O ÍNDICE DE BASE 0
# Não tem obrigatoriedade de ter chaves sequenciais
$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000,
];

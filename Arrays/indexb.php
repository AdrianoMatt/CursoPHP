<?php
#Arrays associativos

# Ao contrário dos arrays numéricos, as chaves são do tipo string:
$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
];
# Ou
$dados = [
    'nome' => 'joao',
    'email' => 'joao@gmail.com',
    'nacionalidade' => 'Portugal',
    'telefone' => '4199999999'
];

# Da mesma forma que nos arrays numéricos não devem existir duas chaves iguais, nos associativos tambem não.
# Na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último.
$dados = [
    'nome' => 'joao',
    'nome' => 'carlos'
];

echo $dados ['nome'];



?>
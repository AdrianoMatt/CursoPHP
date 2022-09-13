<?php
# Arrays Multidimensionais
# São arrays, numéricos ou associativos, cujos valores são outros arrays. Por exemplo:
$dados = [
    [10,20,30,40],
    [100,200,300,400],
    [1000,2000,3000,4000]
];

# Neste caso, para apresentar os detalhes deste array:
echo $dados[1][2]; # 300
echo $dados[0][3]; # 40

# Podemos ter arrays multidimesionais associativos:
$cidades = [
    'portugal' => ['lisboa', 'porto', 'coimbra'],
    'brasil' => ['brasilia', 'sao paulo', 'rio de janeiro'],
    'espanha' => ['madrid', 'barcelona', 'sevilha']
];
echo $cidades['brasil'][1]; # sao paulo
echo $cidades['esoanha'][0]; # madrid
echo $cidades['portugal'][2]; #coimbra

# Os arrays podem ter mais do que duas dimensões.

?>
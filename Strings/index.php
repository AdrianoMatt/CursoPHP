<?php
$nome ='Adriano';
$sobrenome = 'Matt';
$completo = $nome." ".$sobrenome;
//$maiuscula = strtoupper($completo);
//$caractere = strlen($completo);

//teste 1

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de String</title>
</head>
<body>
<h3>O meu nome é:</h3>    
<h1><?= "$nome $sobrenome"?></h1>
<br>
<?= "O meu nome é ". strtoupper($nome) ." e o sobrenome é ". strtoupper($sobrenome) . " completo fica: " . strtoupper($completo) ?>
<br>

<!?= "O meu nome tem ". $caractere ." caracteres"?>

</body>
</html>
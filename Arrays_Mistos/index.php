<?php
#Arrays Mistos (Mixed Arrays)

# É possível criar um array que combina índices numéricos e strings.
# Embora não seja de necessidade muito frequente, é possível da seguinte forma:
    $dados = [
        0 => 10,
        'nome' => 'Antônio',
        'apelido' => 'Silva',
        10 => 10000,
        11 => 'Rua de Lisboa',
        12 => 'Portugal'
    ];

# Uma estrutura deste tipo é mais complexa de gerir devido à mistura de índices e tipos de dados.

#Para apresentar dados do array, procedemos sempre da mesma forma:
echo $dados[0]; #10
echo $dados['apelido']; #Silva




?>

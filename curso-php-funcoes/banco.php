<?php

require('funcoes.php');

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Ygor',
        'saldo' => 10000
    ],
    10987654321 => [
        'titular' => 'Jorge',
        'saldo' => 750
    ], 
    10192837465 => [
        'titular' => 'João',
        'saldo' => 10001
    ]
];

$contasCorrentes[10987654321] = sacar($contasCorrentes[10987654321], 500);
$contasCorrentes[12345678910] = sacar($contasCorrentes[12345678910], 150);

$contasCorrentes[12345678910] = depositar($contasCorrentes[12345678910], 1500);

letrasMaiusculas($contasCorrentes[12345678910]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Gory</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?php echo $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
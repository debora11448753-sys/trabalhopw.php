<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de pw</title>
</head>
<body>
    <h1>Qustão 8</h1>
    <?php
$produtos =[
    "perfume" => 209,
    "celular" => 2000 ,
    "gucci" => 20000,
];
foreach ($produtos as $produto => $valor) {
    echo "$produto: R$ $valor. <br>";
}
?>

<br><a href="questao_7.php">Questão 7</a><br>
<a href="questao_9.php">Questão 9</a>

</body>
</html>
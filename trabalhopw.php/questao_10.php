<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de pw</title>
</head>
<body>
    <h1>Questão 10</h1>
    <?php     
    $numeros = [22, 13, 17, 9, 100];
    
    $dobro = array_map (function ($n) {
        return ($n) * 2;
    }, $numeros);
    foreach ($dobro as $valor){
    echo "$valor <br>";
}       
?>

<br><a href="questao_9.php">Questão 9</a><br>
<a href="index.php">Questão 1</a>

</body>
</html>
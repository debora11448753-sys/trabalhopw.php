<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho de pw</title>
</head>
<body>
    <h1>Questão 9</h1>
    <?php
$email = "debora.11448753@aluno.mg.gov.br";

function validarEmail($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "O $email é válido!";
    } else {
        echo "O $email é inválido!";
    }
}
validarEmail($email);   
?>

<br><a href="questao_8.php">Questão 8</a><br>
<a href="questao_10.php">Questão 10</a>

</body>
</html>
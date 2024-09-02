<?php
include 'db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $novoNome = $_POST['novoNome'];
    $nomeAtual = $_POST['nomeAtual'];

    $sql = "UPDATE user SET name = '$novoNome' where name = '$nomeAtual'";

    if($conn -> query($sql) === true){
        echo "Novo registro adicionado com sucesso";
    } else {
        echo "Erro  $sql <br>" . $conn -> error;
    }

}

$conn -> close();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form method="POST"  action="update.php" name="novoNome">
        <label for="nomeAtual">Digite o nome que você quer mudar:</label>
        <input type="text" name="nomeAtual">
        <label for="novoNome">Digite o novo nome:</label>
        <input type="text" name="novoNome">
        <input type="submit" value="Enviar" >
    </form>

</body>
</html>
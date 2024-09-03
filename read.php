
<?php

include 'db.php';

$sql = "SELECT * FROM user";

$result = $conn -> query($sql);

$users = []; 

if ($result->num_rows > 0 ){
    while($row = $result -> fetch_assoc()){
        array_push($users,$row);
    }
}
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>
<body>
    <table border='1'>
        <tr>
            <th> ID </th>
            <th> Nome </th>
            <th> Email </th>
            <th> Data de Criação </th>
            <th> Ações </th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td> <?= $user["id"]?> </td>
            <td> <?= $user["name"]?></td>
            <td> <?= $user["email"]?> </td>
            <td> <?= $user["created_at"]?> </td>
            <td>
                <a href="update.php?id=<?= $user["id"]?>">Editar</a> | <a href="delete.php?id=<?= $user["id"]?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
        
    </table>

    
</body>
</html>
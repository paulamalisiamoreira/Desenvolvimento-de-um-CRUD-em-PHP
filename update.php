<?php
include 'db.php';

$user = null;

if(isset($_GET["id"])){
    $id = (int)$_GET["id"];
    $result = $conn->query("SELECT * FROM user WHERE id = '$id'");
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
    }
}



?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php if ($user === null):?>
        <p>Sem registros.</p>
    <?php else: ?>
    <form method="POST"  action="update.php" name="novoNome">
        <label for="name">Nome</label>
        <input type="text" name="name" value="<?php echo $user['name']?>">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?php echo $user['email']?>">
        <!-- continuar .... -->
    </form>
    <?php endif ?>   

</body>
</html>
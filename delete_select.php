<?php
    require('connect.php');

    $sql = $pdo->prepare('SELECT * FROM note');

    $sql->execute();

    $pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">My Note</a></h1>

    <?php foreach($sql as $data): ?>
        <p>
            <form action="delete.php" method="POST">
                <input type="submit" value="delete">
                <?= hsc($data['title']) ?>
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
            </form>
        </p>
    <?php endforeach; ?>
</body>
</html>

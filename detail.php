<?php
    require('connect.php');

    $sql = $pdo->prepare('SELECT * FROM note WHERE id=?');

    $sql->execute([$_POST['id']]);

    foreach($sql as $data);

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

    <p>
        <form action="update_form.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="submit" value="update">
        </form>
    </p>

    <p>title : <?= hsc($data['title']) ?></p>
    <p>text : <?= hsc($data['body']) ?></p>
</body>
</html>

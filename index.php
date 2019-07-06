<?php
    require('connect.php');

    $sql = $pdo->prepare('SELECT * FROM note');

    $sql->execute();

    $pdo = null;

    $count = 0;
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

    <p><a href="create_form.php">new note</a></p>

    <p><a href="delete_select.php">delete</a></P>

    <?php foreach($sql as $data): ?>
        <p>
            <form action="detail.php" method="POST" name="detail_form_<?= $count ?>">
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <ul><li><a href="javascript: detail_form_<?= $count ?>.submit()"><?= hsc($data['title']) ?></a></li></ul>
            </form>
        </p>

        <?php $count++; ?>
    <?php endforeach; ?>
</body>
</html>

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
    <a href="index.php"><h1>My Note</h1></a>

    <form action="update.php" method="POST">
        <table>
            <tr>
                <td><label>title</label></td>
                <td><input type="text" name="title" value="<?= hsc($data['title']) ?>"></td>
            </tr>
            <tr>
                <td><label>text</label></td>
                <td><input type="text" name="body" value="<?= hsc($data['body']) ?>"></td>
            </tr>
            <tr><input type="hidden" name="id" value="<?= $data['id'] ?>"></tr>
            <tr>
                <td><input type="submit" value="save"></td>
                <td><input type="reset" value="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>

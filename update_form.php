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

    <?php
        require('connect.php');

        $sql = $pdo->prepare('SELECT * FROM note WHERE id=?');

        $sql->execute([$_POST['id']]);

        foreach($sql as $data);

        printf('<form action="update.php" method="POST">');
            printf('<table>');
                printf('<tr>');
                    printf('<td><label>title</label></td>');
                    printf('<td><input type="text" name="title" value="%s"></td>', $data['title']);
                printf('</tr>');
                printf('<tr>');
                    printf('<td><label>text</label></td>');
                    printf('<td><input type="text" name="body" value="%s"></td>', $data['body']);
                printf('</tr>');
                printf('<tr><input type="hidden" name="id" value="%d"></tr>', $data['id']);
                printf('<tr>');
                    printf('<td><input type="submit" value="save"></td>');
                    printf('<td><input type="reset" value="reset"></td>');
                printf('</tr>');
            printf('</table>');
        printf('</form>');

        $pdo = null;
    ?>
</body>
</html>

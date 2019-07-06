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

        $sql = $pdo->prepare('SELECT * FROM note');

        $sql->execute();

        foreach($sql as $data){
            printf('<p>');
                printf('<form action="delete.php" method="POST">');
                    printf('<tr>');
                        printf('<td><input type="submit" value="delete"></td>');
                        printf('<td>%s</td>', hsc($data['title']));
                        printf('<td><input type="hidden" name="id" value="%d"></td>', $data['id']);
                    printf('</tr>');
                printf('</form>');
            printf('</p>');
        }

        $pdo = null;
    ?>
</body>
</html>

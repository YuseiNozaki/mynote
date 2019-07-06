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

    <p><a href="create_form.php">new note</a></p>

    <p><a href="delete_select.php">delete</a></P>

    <?php
        require('connect.php');

        $sql = $pdo->prepare('SELECT * FROM note');

        $sql->execute();

        $count = 0;

        foreach($sql as $data){
            printf('<p>');
                printf('<form action="detail.php" method="POST" name=detail_form_%d>', $count);
                    printf('<input type="hidden" name="id" value="%d">', $data['id']);
                    printf('・ <a href="javascript: detail_form_%d.submit()">%s</a>', $count, hsc($data['title']));
                printf('</form>');
            printf('</p>');

            $count++;
        }

        $pdo = null;
    ?>
</body>
</html>

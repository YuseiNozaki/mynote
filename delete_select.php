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

        $pdo = null;

        foreach($sql as $data){
            echo '<p>';
                echo '<form action="delete.php" method="POST">';
                        echo '<input type="submit" value="delete">';
                        echo hsc($data['title']);
                        echo '<input type="hidden" name="id" value="', $data['id'], '">';
                echo '</form>';
            echo '</p>';
        }
    ?>
</body>
</html>

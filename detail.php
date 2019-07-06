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
        printf('<p>');
        printf('<form action="update_form.php" method="POST">');
            printf('<input type="hidden" name="id" value="%d">', $_POST['id']);
            printf('<input type="submit" value="update">');
        printf('</form>');
        printf('</p>');

        require('connect.php');

        $sql = $pdo->prepare('SELECT * FROM note WHERE id=?');

        $sql->execute([$_POST['id']]);

        foreach($sql as $data);

        printf('<p>');
            printf('title : %s', hsc($data['title']));  
        printf('</p>');
        printf('<p>');
            printf('text : %s', hsc($data['body']));
        printf('</p>');

        $pdo = null;
    ?>
</body>
</html>

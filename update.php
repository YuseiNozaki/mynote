<?php
    if(!empty($_POST['title']) && !empty($_POST['body'])){

        require('connect.php');

        $sql = $pdo->prepare('UPDATE note SET title=?, body=? WHERE id=?');

        $sql->execute([$_POST['title'], $_POST['body'], $_POST['id']]);

        $pdo = null;
    
        header('location: index.php');
        exit();

    }else{
        printf('<script>');
            printf('alart("error");');
        printf('</script>');

        header('location: index.php');
        exit();
    }
?>

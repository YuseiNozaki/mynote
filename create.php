<?php
    if(!empty($_POST['title']) && !empty($_POST['body'])){
        require('connect.php');

        $sql = $pdo->prepare('INSERT INTO note(title, body) VALUES(?, ?)');
        
        $sql->execute([$_POST['title'], $_POST['body']]);

        $pdo = null;

        header('location: index.php');
        exit();
        
    }else{
        header('location: create_form.html');
        exit();
    }
?>

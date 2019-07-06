<?php
    try{
        $dsn = 'mysql:host=localhost; dbname=notepad2; charset=utf8';
        $pdo = new PDO($dsn, 'notepad2_user', 'password');

    }catch(PDOException $e){
        printf('link faild: %s', $e->getMessage());
    }

    function hsc($str){
        return htmlspecialchars($str);
    }
?>

<?php
    require('connect.php');

    $sql = $pdo->prepare('DELETE FROM note WHERE id=?');

    $sql->execute([$_POST['id']]);

    $pdo = null;

    header('location: delete_select.php');
    exit();
?>

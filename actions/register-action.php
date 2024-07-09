<!-- action -->

<?php
    include '../classes/User.php';

    $user = new User;

    $user->store($_POST); 
    // 全てのデータが転送される
?>
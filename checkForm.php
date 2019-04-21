<?php

session_start();

$message = [];

if (empty($_POST['loginName'])) {
    $message['loginName'] = 'Session Failed';
}else{
    $_SESSION['loginName'] = $_POST['loginName'];
    header('Location: index.php');
}


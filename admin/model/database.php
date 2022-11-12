<?php
    $dsn = 'mysql:host=localhost;dbname=abctrveldb';
    $username = 'root';
    $password = '';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    try {
        $db = new PDO($dsn, $username, $password, $options);
    }
    catch(PDOException $e) {
        $error_code = 2;
        header('location:./index.php?action=error&errorCode=' . $error_code);
    }
?>
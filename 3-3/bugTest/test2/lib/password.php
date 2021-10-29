<?php
    define('DB_DATABASE', 'sql_yigroupBlog');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    try {
        $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        echo '';
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }

    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    ?>
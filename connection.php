<?php
try{
$db = new PDO("mysql:host=localhost; dbname=onlinebookshopping", 'root', '');
    }
catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
?>
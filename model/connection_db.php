<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=common-database;charset=utf8', 'aurelien', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}

?>
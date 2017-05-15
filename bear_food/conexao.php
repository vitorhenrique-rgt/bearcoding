<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=bear_food", "root", "");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
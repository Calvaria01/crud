<?php

try {
    $pdo = new PDO('mysql:dbname=; host=localhost', '', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

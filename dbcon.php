<?php
$pdo = new PDO('mysql:host=localhost;dbname=inter_urban_transportation_db', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
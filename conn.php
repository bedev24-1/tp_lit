<?php 
 $hostname = 'mysql:host=localhost; dbname=tp_lit';
 $root = "root";
 $password = "";

try {
    $conn = new PDO($hostname,$root,$password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPETION);
    // echo"connexion reusie";
} catch (PDOException $e) {
    echo"Erreur de connexion : ".$e;
}


?>
<?php
include_once "conn.php";

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$matricule = $_POST['matricule'];
$username = $_POST['username'];

try {
    $query = $conn->prepare("INSERT INTO etudiant(nom_etudiant, prenom_etudiant,matricule,user_name) VALUE(:nom,:prenom,:matricule,:user_name)");
    $result = $query->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':matricule' => $matricule,
        ':user_name' => $username
    ]);
    if ($result) {
        // echo"insertion reussie";
        header('Location: formulaire.php');
    }
       
} catch (Exception $e) {
    echo"erreur".$e;
}

?>
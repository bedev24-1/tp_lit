<?php 
include_once "conn.php";

try {
    $query = "SELECT * FROM etudiant;";
    $result = $conn->query($query);
    if ($result) {
    //    echo"donnee recuperer ";
      
        echo"<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Matricule</th>
            <th>UserName</th>
        </tr>
    </thead>
    <tbody>";
    while($data=$result->fetch()){
        echo"
        <tr>
            <td>".$data['id_etudiant']."</td>
            <td>".$data['nom_etudiant']."</td>
            <td>".$data['prenom_etudiant']."</td>
            <td>".$data['matricule']."</td>
            <td>".$data['user_name']."</td>
        </tr>";}
    echo"</tbody>
</table>";
       
    }else{
       echo"erreur de recuperation";
    }
} catch (Exception $e) {
    echo"erreur".$e;
}
?>
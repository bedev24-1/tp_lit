<?php
header('Content-Type: application/json');
require 'conn.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);
$username = $data['username'] ?? '';

$response = ['existe' => false];

if (!empty($username)) {
    $query = $conn->prepare("SELECT COUNT(*) FROM etudiant WHERE user_name=?");

    $query->execute([$username]);

    if ($query->fetchColumn() > 0) {
        $response['existe'] = true;
    }
}
echo json_encode($response);
?>
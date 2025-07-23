<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$role = $data['role'];
$status = $data['status'];

$sql = "INSERT INTO users (name, email, role, status) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $role, $status);
$stmt->execute();

echo json_encode(["success" => true]);
?>

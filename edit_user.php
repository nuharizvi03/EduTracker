<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data["id"];
$name = $data["name"];
$email = $data["email"];
$role = $data["role"];
$status = $data["status"];

$sql = "UPDATE users SET name=?, email=?, role=?, status=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $name, $email, $role, $status, $id);
$stmt->execute();

echo json_encode(["success" => true]);
?>

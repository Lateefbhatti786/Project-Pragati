<?php
include 'config.php';

$sql = "SELECT * FROM partners ORDER BY id DESC";
$result = $conn->query($sql);

$partners = [];

while ($row = $result->fetch_assoc()) {
    $partners[] = $row;
}

echo json_encode($partners);
?>
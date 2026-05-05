<?php
include 'config.php';

$id = $_POST['id'];

$conn->query("DELETE FROM volunteers WHERE id=$id");

echo "success";
?>
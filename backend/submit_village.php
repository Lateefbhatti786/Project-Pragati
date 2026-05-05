<?php
include 'config.php';

$village = $_POST['village-name'];
$panchayat = $_POST['panchayat'];
$contact = $_POST['contact-person'];
$phone = $_POST['phone-village'];
$women = $_POST['women-count'];
$livelihood = $_POST['livelihood'];

$sql = "INSERT INTO village_requests 
(village_name, panchayat, contact_person, phone, women_count, livelihood)
VALUES 
('$village', '$panchayat', '$contact', '$phone', '$women', '$livelihood')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}
?>
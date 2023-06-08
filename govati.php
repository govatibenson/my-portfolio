<?php
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'my_skills';

$conn = new mysqli($host, $username, $password, $my_skills);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
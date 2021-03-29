<?php
$servername = "localhost";
$username = "angelosweb";
$password = "tigersaurus500";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
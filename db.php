<?php
$servername = "localhost";
$username = "angelosweb";
$password = "tigersaurus500";
$dbname = "angelosweb_kdgame2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
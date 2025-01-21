<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
return $db;
?>
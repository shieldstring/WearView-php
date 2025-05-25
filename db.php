<?php
$mysqli = new mysqli('localhost', 'your-username', 'your_password', 'wearview');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

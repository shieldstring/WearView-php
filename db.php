<?php
$mysqli = new mysqli('sql107.infinityfree.com', 'if0_39069939', 'ul8mMt6FqAp', 'if0_39069939_wearview');

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

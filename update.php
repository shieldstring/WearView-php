<?php
require 'db.php';
$id = intval($_GET['id']);
$mysqli->query("UPDATE issues SET status='complete' WHERE id=$id");
header('Location: jobs.php?status=incomplete');
?>
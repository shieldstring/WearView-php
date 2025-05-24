<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name']);
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $location = trim($_POST['location']);
  $description = trim($_POST['description']);

  if ($name && $email && $location && $description) {
    $stmt = $mysqli->prepare("INSERT INTO issues (name, email, location, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $location, $description);
    $stmt->execute();
    header('Location: thank-you.html');
  } else {
    echo "<p>Invalid input. Please fill all fields correctly.</p>";
  }
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === 'staffmember' && $password === 'letmein!123') {
    header('Location: report.php');
  } elseif ($username === 'admin' && $password === 'heretohelp!456') {
    header('Location: jobs.php?status=incomplete');
  } else {
    $error = "Invalid login credentials.";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WearView Login</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<header class="site-header">
        <h1>WearView Academy&nbsp;IT Support</h1>
      </header>
      <main>
      <h2>Login to IT Support System</h2>
  <form method="POST" id="loginForm">
    <input name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
  </main>

  <footer>
    <small>&copy; 2025 WearView Academy</small>
  </footer>
  
</body>
</html>


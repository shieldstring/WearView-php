<?php
require 'db.php';
$status = $_GET['status'] ?? 'incomplete';
$result = $mysqli->query("SELECT * FROM issues WHERE status = '$status'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT Job List</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
<body>
<header class="site-header">
        <h1>WearView Academy&nbsp;IT Support</h1>
      </header>
<main>
  <h2 id="pageTitle"><?php echo ucfirst($status); ?> Jobs</h2>
  <table >
    <tr><th>Name</th><th>Email</th><th>Location</th><th>Description</th><th>Status</th><th>Action</th></tr>
    <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['location'] ?></td>
        <td><?= $row['description'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
          <?php if ($status === 'incomplete'): ?>
            <a href="update.php?id=<?= $row['id'] ?>">Mark Complete</a>
          <?php endif; ?>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
  <br>
  <a href="?status=<?= $status === 'incomplete' ? 'complete' : 'incomplete' ?>">
    View <?= $status === 'incomplete' ? 'Completed' : 'Incomplete' ?> Jobs
  </a>
  </main>
    <footer>
        <small>&copy; 2025 WearView Academy</small>
      </footer>
</body>
</html>

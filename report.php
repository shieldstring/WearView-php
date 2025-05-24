<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>WearView IT Support – Report a Fault</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<header class="site-header">
    <h1>WearView Academy&nbsp;IT Support</h1>
  </header>
  <main>
  <h2>Log an IT Request</h2>
  <form action="submit.php" method="POST">
    <fieldset>
        <legend>Fault details</legend>

        <label for="name">Your name<span aria-hidden="true">*</span></label>
        <input type="text" id="name" name="name" required />

        <label for="email">Email address<span aria-hidden="true">*</span></label>
        <input type="email" id="email" name="email" required
               inputmode="email" autocomplete="email" />

        <label for="location">Location / Room<span aria-hidden="true">*</span></label>
        <input type="text" id="location" name="Location" required />

        <label for="description">Brief description<span aria-hidden="true">*</span></label>
        <textarea id="description" name="Description" rows="4" required></textarea>

        <button type="submit">Submit request</button>
      </fieldset>
  </form>
  </main>

<footer>
  <small>&copy; 2025 WearView Academy</small>
</footer>
<script src="validation.js"></script>
</body>
</html>
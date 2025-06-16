<?php
session_start();
// var_dump($_SESSION); // Hapus atau komentari baris ini
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit;
}
$error = isset($_GET['error']) && $_GET['error'] == 1;
?>
<!DOCTYPE html>
<html>
<head>
  <title>My App</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="top-bar">
    <span class="music-icon">🎵</span>
    <span class="site-title">Vintage Vinyl</span>
  </div>
  <h2>Login</h2>
  <?php if ($error): ?>
    <div id="message">Username atau password salah</div>
  <?php endif; ?>
  <form action="login.php" method="post" id="loginForm">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
  <p id="message"></p>
  <script src="script.js"></script>
</body>
</html>

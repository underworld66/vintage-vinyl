<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>
<div class="top-bar">
  <span class="music-icon">🎵</span>
  <span class="site-title">Vintage Vinyl</span>
</div>
<?php
// Tampilkan konten home di sini
echo "Selamat datang, " . htmlspecialchars($_SESSION['username']);
?>
<br><br>
<div class="container-wrapper">
  <div class="photo-container">
    <img src="american_football.jpg" alt="American Football" class="photo-img">
    <div class="photo-title">American Football</div>
  </div>
  <div class="photo-container">
    <img src="weezer.jpg" alt="Weezer" class="photo-img">
    <div class="photo-title">Weezer</div>
  </div>
  <div class="photo-container">
    <img src="tittle_fight.jpg" alt="Tittle Fight" class="photo-img">
    <div class="photo-title">Tittle Fight</div>
  </div>
</div>
<br>
<a href="logout.php">Logout</a>
<link rel="stylesheet" href="style.css">

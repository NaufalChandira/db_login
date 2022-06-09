<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
    <header>
      <nav class="navbar">
        <ul tabindex="0">
          <li class="navbar-logo">Hungry Its Angry</li>
          <button class="navbar-toggle" tabindex="0"><i class="fa-solid fa-bars"></i></button>
          <li class="navbar-links"><a href="/Project/src/pages/tanatap/home.html">Home</a></li>
          <li class="navbar-links"><a href="/Project/src/pages/tanatap/catalogue.html">Catalogue</a></li>
          <li class="navbar-links"><a href="/Project/src/dewan-komentar/index.php">Review</a></li>
          <li class="navbar-links"><a href="/Project/src/db_login/index.php">Admin</a></li>
          <li class="navbar-links"><a href="https://www.instagram.com/naufalchand_/">About Us</a></li>
        </ul>
      </nav>
      <div class="hero-header" id="home" tabindex="0"></div>
    </header>
</body>
</html>
<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
?>

<a href="register.php">Register</a>
<a href="login.php" id="login">Login</a>
<a href="" id="logout">Logout</a>

<h1>Welcome to Esther's Upload Gallery <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User! Please register and login to use this tool' ?></h1>
<?php if (!isset($_SESSION['loggedin'])) {
    die();
} ?>
<h2>Upload as many photos as you like! From horses to landscapes</h2>
<div id="message"></div>
<script defer src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>
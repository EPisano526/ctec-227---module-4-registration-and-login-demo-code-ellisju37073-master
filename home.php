<?php
// home.php
session_start();
$pageTitle = "Home";
require "inc/header.inc.php";
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12 col-md-12">
            <a href="register.php">Register</a>
            <?php
            if (isset($_SESSION["loggedin"])) {
                echo "<a href='logout.php' id='logout'>Logout</a>&nbsp;";
            } else {
                echo "<a href='login.php' id='login'>Login</a>&nbsp;";
            }
            ?>
            <h1>Welcome to the Upload Gallery <?= isset($_SESSION["first_name"]) ? $_SESSION["first_name"] : "New User! Please register and login to use this tool" ?>!</h1>
            <?php if (!isset($_SESSION["loggedin"])) {
                die();
            } ?>
            <h2>Upload as many photos as you like! From horses to landscapes</h2>
            <div id="message"></div>
        </div>
    </div>
</div>
<script defer src="js/script.js"></script>
<?php require "inc/footer.inc.php" ?>
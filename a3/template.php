<link rel="stylesheet" href="css/stylesheet.css">

<?php
session_name("Website");
session_start();
$host = "localhost";
$user = "vikabr24"; // e.g. wagner24
$pwd = "m5icdOQDGp"; // e.g takeAbath@06h30
$db = "vikabr24"; // e.g wagner24
$mysqli = new mysqli($host, $user, $pwd, $db);

$navigation = <<<EOT
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
  </nav>

EOT;
?>
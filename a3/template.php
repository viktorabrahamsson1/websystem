<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <title>Document</title>
</head>

<?php
session_name('Website');
session_start();
$host = "localhost";
$user = "vikabr24"; // e.g. evanil18
$pwd = "m5icdOQDGp"; // e.g takeAbath@06h30
$db = "vikabr24"; // e.g wagdem20_db
$mysqli = new mysqli($host, $user, $pwd, $db);
$navigation = <<<END
    <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="add_product.php">Add product</a>
    <a href="products.php">Products</a>
    <a href="send.php">Send</a>
    <a href="product_details.php">Product details</a>

END;
if (isset($_SESSION['userId'])) {
  $navigation .= <<<END
      <a href="logout.php">Logout</a>
      Logged in as {$_SESSION['username']}
END;
}

if (!isset($_SESSION['userId'])) {
  $navigation .= <<<END
    <a href="login.php">Log in</a>
    <a href="register.php">Register</a>
  END;
}



$navigation .= '</nav>';

?>

<?php // temoplate file ?>
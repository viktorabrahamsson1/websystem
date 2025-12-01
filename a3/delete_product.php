<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <title>Document</title>
</head>

<body>
  <?php
  include_once('template.php');
  if (isset($_GET['id']) and isset($_SESSION['userId'])) {
    $query = <<<END
DELETE FROM products
WHERE id = '{$_GET['id']}'
END;
    $mysqli->query($query);
    header('Location:products.php');
  }
  echo $navigation;
  ?>
</body>

</html>
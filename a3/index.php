<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/stylesheet.css">
  <title>Webshop</title>
</head>

<body>
  <?php
  include('template.php');
  $content = <<<END
    <h1>Welcome to this website</h1>
    <p>This is gonna be a webshop</p>
  END;
  echo $navigation;
  echo $content;

  ?>
</body>

</html>
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
  require_once('template.php');
  $content = '<h1>Products</h1>';
  $query = <<<END
SELECT * FROM products
ORDER BY created_at DESC
END;
  $res = $mysqli->query($query);
  if ($res->num_rows > 0) {
    while ($row = $res->fetch_object()) {
      $content .= <<<END
{$row->name}|
{$row->price}<br>
<a href="product_details.php?id={$row->id}">Description</a>|
END;
    }
    if (isset($_SESSION["user_id"]))
      $content .= <<<END
    <a href="delete_product.php?id={$row->id}" onclick="return confirm('Are you sure?')">
Remove product</a>|
<a href="edit_product.php?id={$row->id}">Edit product</a><br>
<hr>
END;

  }
  echo $navigation;
  echo $content;
  ?>
</body>

</html>
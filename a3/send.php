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
  include('template.php');
  if (isset($_POST)) {
    $content = <<<END
    <h3>Message was sent:</h3>
    Name: {$_POST["name"]}
    <br>
    Message: {$_POST["msg"]}
  END;

    $to = "vikabr24@student.hh.se"; //change this to your email address
    $subject = "Test-mail";
    $msg = $_POST["msg"];
    $headers = "From: " . $_POST["name"];
    mail($to, $subject, $msg, $headers);
  }
  echo $navigation;
  echo $content;

  ?>

</body>

</html>
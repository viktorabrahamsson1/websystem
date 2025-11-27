<?php
include('template.php');

if(isset($_POST["username"]) and isset($_POST["password"])){
  $query = <<<END
  SELECT username, password, id FROM users
  WHERE username = '{$_POST["username"]}'
  AND password = '{$_POST["password"]}'
  END;
}

$result = $mysqli->query($query);
$res = mysqli_fetch_assoc($result);
echo mysqli_num_rows($result);

$content = <<<END
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" value="Login">
</form>
END;
echo $navigation;
echo $content;
?>
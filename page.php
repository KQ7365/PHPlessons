<?php

$username = $_COOKIE["username"] ?? "Guest";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>
<h1>Welconme <?= $username ?></h1>
<body>

  <a href="destroy.php">Delete cookie</a>
</body>

</html>
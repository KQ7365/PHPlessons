<?php

//if this was in different directories, may need to use folders or /
require "database.php";

//Prepare a SELECT statement ((This starts a 3 step process to fetch all using PDO))
//$pdo is accessible from database.php. Also, prepare is a method to make a query
//step 1
$stmt = $pdo->prepare("SELECT * FROM posts");
//Execute statement
//step 2
$stmt->execute();

//Fetch results
//step 3 ((The argument PDO::Fetch_Assoc will return data as object. But, we can do this in Database))
$posts = $stmt->fetchAll();

//lets see the data
// echo "<pre>";
// var_dump($results);
// echo "<pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <?php foreach($posts as $post) : ?>
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post["title"]?></h2>
          <p class="text-gray-700 text-lg mt-2"><?= $post["body"]?></p>
        </div>
      </div>
    </div>
    <?php endforeach  ?>
  </div>
</body>

</html>
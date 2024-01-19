<?php
$output = null;
$fruits = [
  ["Apple", "Red"],
  ["Orange", "Orange"],
  ["Banana", "Yellow"]
];
//This gets Apple
$output = $fruits[0][0];
//This gets "Red"
$output = $fruits[0][1];
//Add a fruit
$fruits[] = ["Grapes", "Purple"];

//realistic array
$users = [
  ["name" => "John", "email" => "john@gmail", "password" => "123456"],
  ["name" => "Mary", "email" => "mary@gmail", "password" => "123456"],
  ["name" => "Ken", "email" => "ken@gmail", "password" => "123456"]
];
//access data
$output = $users[1]["email"];

//add user
$users[] = ["name" => "Mike", "email" => "mike@gmail", "password" => "123456"];

//count users
$output = count($users);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <p><pre>
        <?php print_r($users) ?>
      </pre></p>
    </div>
  </div>
</body>

</html>
<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ["user1", "user2", "user3"];

//count
$output = count($ids);
//sort
sort($ids);
sort($users);
//reverse sort
rsort($ids);
rsort($users);
//array push!!!!!! Adds value onto end of array - takes two arguments
array_push($ids, 100);
array_push($users, "user4");
//pop removes end of array. Only one argument as it just instantly removes last one
array_pop($ids); 
array_pop($users);

//slice (which makes new array not affecting original) and splice which manipulates existing array
$ids2 = array_slice($ids, 2, 3);
// var_dump($ids2);

array_splice($ids, 1, 1, "New ID");
array_splice($users, 0, 1, "New User");

//functions now that return something

//array_sum
$output = 'Sum of IDs: ' . array_sum($ids);

//array_search  finds the index of array
$output = "User 2 is at index: " . array_search("user2", $users);

//in_array checks if value exists in array
$output = "User 2 exists: " . in_array("user4", $users); //this actually prints a boolean if you var_dumps()

//explode or implode. explode turns String into Array. Explode would be useful if someone is typing into new tags, and on input could use explode to make array for iteration¡¡
$tags = "tech,code,programming";
$tagsArr = explode(",", $tags);
// var_dump($tagsArr);

//implode Here we took an array of users and made it a string which can be outputted on browser!
$output = implode(", ", $users);

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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p><pre>
                <?php print_r($ids); ?>
            </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p><pre>
                <?php print_r($users); ?>
            </pre>
            </p>
        </div>
    </div>
</body>

</html>
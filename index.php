<?php 
//BASIC FOR LOOP
//runs the code, starts a 0, if its < 10 it keeps going, and then increments by 1 and starts over.
// for($i = 0; $i < 10; $i++) {
//     echo $i . "<br />";
// };

//BASIC WHILE LOOP
$i = 0;

while($i < 10) {
    echo $i . "<br />";
    $i++;
}

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
            <ul>
               <?php  $i = 0;
               while ($i < 10) : ?>
                <li>Number: <?= $i ?></li>
                <?php $i++;
            endwhile; ?>
            </ul>
        </div>
    </div>
</body>

</html>
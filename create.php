<?php
//DONT FORGET TO BRING IN DATABASE
require_once 'database.php';

//this statement is saying, if the method is = POST, AND, the form is submitted...then do this
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $title = htmlspecialchars($_POST['title']);
  $body = htmlspecialchars($_POST['body']);
  //above takes care of data being passed in the submit form

// now insert into database
//keep in mind the same steps usually consist of this 1)Create query 2)prepare stmt 3)replacing any placeholders 4) execute

$sql = 'INSERT INTO posts (title, body) VALUES (:title, :body)';

$stmt = $pdo->prepare($sql);

$params = [
  'title' => $title,
  'body' => $body
];

$stmt->execute($params);

//now after it is executed, the following code will REDIRECT us to whatever page we want to go. ROUTES!!!
header('Location: index.php');
exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Blog Post</h1>
      <form method="post">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter post title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="body" class="block text-gray-700 font-medium">Body</label>
          <textarea id="body" name="body" placeholder="Enter post body" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
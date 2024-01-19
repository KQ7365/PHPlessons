<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$arrayOfNumbers = [1, 2, 3, 4, 5];
$numberSum = array_sum($arrayOfNumbers);
$indexValueOfArray = count($arrayOfNumbers);
echo '<h3>Sum Of An Array</h3>';
echo "The sum of the {$indexValueOfArray} numbers is: {$numberSum}. ";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';
$colors = ['red', 'blue', 'green', 'yellow'];
$colorsReverse = array_reverse($colors);

array_push($colorsReverse, "purple", "orange"); //or $colors[] = "purple", "orange";
array_splice($colorsReverse, 1, 1, "pink");
array_pop($colorsReverse);
var_dump($colorsReverse);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';
$job_listings = [
  ["id" => 1, "job_title" => "Manager", "company" => "Udemy", "contact_email" => "me@gmail.com", "contact_phone" => 9102222222, "skills" => ["PHP", "JS", "CSS"]],
  ["id" => 2, "job_title" => "HR", "company" => "Precise", "contact_email" => "me@gmail.com", "contact_phone" => 9102222222, "skills" => ["PHP", "JS", "CSS"]],
  ["id" => 3, "job_title" => "Developer", "company" => "Yahoo", "contact_email" => "me@gmail.com", "contact_phone" => 9102222222, "skills" => ["PHP", "JS", "CSS"]]
];
array_push($job_listings, ["id" => 4, "job_title" => "Developer", "company" => "Yahoo", "contact_email" => "me@gmail.com", "contact_phone" => 9102222222, "skills" => ["PHP", "JS", "CSS"]]);
echo $job_listings[1]["job_title"];
print_r($job_listings[2]["skills"][0]);
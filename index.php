<?php

$number = 1;


while($number <= 10) {
    //if number divided by 2 has zero remained we know its an even number (checking conditional for even number)
    if ($number % 2 == 0) {
        echo $number . " is even <br>";
    } else {
        echo $number . " is odd <br>";
    }

    $number++; //!this is to increment or it'd be an infinite loop!!!!
}


//*Break out of a loop

for ($i = 0; $i <=10; $i++) {
    //So, once the below condition is TRUE then stop the loop(break)
    if($i == 5) {
        break;
    }

    echo $i . "<br>";
}

//*Skip and continue loop

for ($i = 0; $i <=10; $i++) {
    //So, once the below condition is TRUE then SKIP the number and continue the loop(continue)
    if($i == 5) {
        continue;
    }

    echo $i . "<br>";
}

//Conditional in forEach loop in an array

$studentGrades = array(
    "John" => 75,
    "Jack" => 92,
    "Jill" => 100,
    "Joan" => 80
);

foreach($studentGrades as $name => $grade) {
    if($grade >= 90) {
        echo $name . ", has an excellent grade in the 90s <br>";
    } else {
        echo $name . ", you have some work to do <br>";
    }
}

?>
<?php

function add($a = 1, $b = 1) {
    return $a + $b;
}

echo add(2, 4);
echo '<br>';
echo add(5,6); //Remember, arguments are the values you're passing in. So here the arguments is 5 and 6
echo '<br>';
echo add();

//splat operator

function addAll(...$numbers) {
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }
    return $total;
}
echo '<br>';
echo addAll(1,2,3,4);
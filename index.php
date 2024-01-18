<?php

$names = ["John", "Dave", "Steve"];

function inspect($value) {
    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    
}
inspect($names);
print_r($names);
echo $names[0];
?>
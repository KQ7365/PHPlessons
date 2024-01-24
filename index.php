<?php

//two parameters, const name and value
//defined to make a constant and dont use $
define("App_Name", "My App");
define("APP_VERSION", "1.0.0");

//we can also use const!!!!

const DB_NAME = "mydb";
const DB_HOST = "locahost";

echo DB_HOST, DB_NAME;

function run() {
    echo App_Name;
    echo DB_NAME, DB_HOST;
}

run();
<?php

include __DIR__ . "/helpers/functions.php";

//$app = config('app', 'arquivo');

try {
    $database = config('database', 'drivers');

    $username = $database["mysql"]["username"];
    $passwd =  $database["mysql"]["password"];

    var_dump($username) . PHP_EOL;
    var_dump($passwd);
} catch (Exception $exception) {
    echo $exception->getMessage();
}

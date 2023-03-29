<?php

require __DIR__ . '/debug.inc.php';

$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';

$request_pattern = ['firstname', 'lastname'];
$user_data = [];

foreach ($request_pattern as $key){
    $user_data[$key] = isset($_POST[$key]) ? $_POST[$key] : '';
}

foreach ($request_pattern as $key){
    $user_data[$key] = isset($_GET[$key]) ? $_GET[$key] : '';
}

function get_required_data(array $request, array $pattern): array{
    $result = [];

    foreach ($pattern as $key){
        $result[$key] = isset($request[$key]) ? $request[$key] : '';

    }
    return $result;
}
$user_data = get_required_data($_POST, $request_pattern);
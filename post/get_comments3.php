<?php

header('Content-Type: application/json');

session_start();
$session_id = session_id();
$jsonFile = 'comments3_' . $session_id . '.json';

if(file_exists($jsonFile)) {
    $comments = file_get_contents($jsonFile);
    echo $comments;
} else {
    echo json_encode([]); 
}

?>


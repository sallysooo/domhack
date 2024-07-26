<?php
header('Content-Type: application/json');

$file = 'comments.json';

if (file_exists($file)) {
    $comments = json_decode(file_get_contents($file), true);
    echo json_encode($comments);
} else {
    echo json_encode([]);
}
?>

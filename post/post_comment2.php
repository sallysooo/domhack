<?php 

header('Content-Type: application/json');

session_start();
$session_id = session_id();
$jsonFile = 'comments2_' . $session_id . '.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $comment = [
        'author' => $_POST['name'],
        'body' => $_POST['comment'],
        'email' => $_POST['email'],
        'website' => $_POST['website'],
        'date' => date('Y-m-d H:i:s') 
    ];

    if (file_exists($jsonFile)) {
        $comments = json_decode(file_get_contents($jsonFile), true);
    } else {
        $comments = [];
    }

    $comments[] = $comment;

    file_put_contents($jsonFile, json_encode($comments));

    echo json_encode(['status' => 'success']);
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}

?>

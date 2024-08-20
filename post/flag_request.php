<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $flag = "HCAMP{24d9e2fbc8edb3d82fff19d8afe15bcc4301f5f054d}";
    echo json_encode(['status' => 'success', 'flag' => "Here's your gift!: $flag"]);
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}

?>

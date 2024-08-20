<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
    echo "<script type='text/javascript'>
            alert('Thank you for your comment. You might want to Clobber something...?');
            window.location.href = 'guest_book.html';
            </script>";
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
?>

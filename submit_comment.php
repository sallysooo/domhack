<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];

    $correct_comment = '<a id=defaultAvatar><a id=defaultAvatar name=avatar href="cid:&quot;onerror=alert(\'Tiramisu\')//">';

    if ($comment === $correct_comment) {
        $_SESSION['can_access_flag'] = true;
        echo "<script type='text/javascript'>
                window.open('confirmation.php', '_blank');
                window.location.href = 'guest_book.html';
            </script>";
        exit;
    } else {
        echo "<script type='text/javascript'>
                alert('Thank you for your comment. Try more for special gift...');
                window.location.href = 'guest_book.html';
              </script>";
    }
} else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}
?>

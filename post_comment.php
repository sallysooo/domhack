<?php // 폼 제출 처리하고 댓글을 db에 저장하는 코드 
$servername = "localhost";
$username = "root";
$password = "root1234";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postId = $_POST['postId'];
    $author = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO comments (postId, author, email, website, body) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $postId, $author, $email, $website, $comment);

    if ($stmt->execute()) {
        header("Location: post1.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

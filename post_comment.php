<?php
$commentsFilePath = 'comments.json';

// POST 요청 처리
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $website = $_POST['website'] ?? '';
    $comment = $_POST['comment'] ?? '';
    $postId = $_POST['postId'] ?? '';

    if ($name && $email && $comment){
        // 새로운 댓글 작성
        $newComment = [
            'author' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
            'avatar' => null, // 사용자 아바타 URL을 저장할 수 있음
            'website' => htmlspecialchars($website, ENT_QUOTES, 'UTF-8'),
            'date' => date('Y-m-d H:i:s'),
            'body' => $comment
        ];

        // 기존 댓글 불러오기
        if(file_exists($commentsFilePath)){
            $comments = json_decode(file_get_contents($commentsFilePath), true);
        } else {
            $comments = [];
        }

        // 새로운 댓글 추가
        $comments[] = $newComment;

        // 댓글을 파일에 저장
        if(file_put_contents($commentsFilePath, json_encode($comments, JSON_PRETTY_PRINT))){
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to save comment']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Name, email, and comment are required']);
    }
}
?>
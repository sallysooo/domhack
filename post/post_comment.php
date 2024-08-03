<?php 
// 입력한 댓글을 JSON 파일에 저장하는 스크립트 
header('Content-Type: application/json');

$jsonFile = 'comments.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 입력된 데이터 받아오기
    $comment = [
        'author' => $_POST['name'],
        'body' => $_POST['comment'],
        'email' => $_POST['email'],
        'website' => $_POST['website'],
        'date' => date('Y-m-d H:i:s') // 현재 날짜와 시간
    ];

    // 현재 댓글 데이터 로드
    if (file_exists($jsonFile)) {
        $comments = json_decode(file_get_contents($jsonFile), true);
    } else {
        $comments = [];
    }

    // 새 댓글 추가
    $comments[] = $comment;

    // 댓글 데이터를 JSON 파일에 저장
    file_put_contents($jsonFile, json_encode($comments));

    // 성공적으로 저장되었다는 응답
    echo json_encode(['status' => 'success']);
} else {
    // 잘못된 요청 메서드에 대한 응답
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Method not allowed']);
}

?>

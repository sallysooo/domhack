<?php
// 댓글 로드하는 파일 
header('Content-Type: application/json');

$jsonFile = 'comments2.json';

if(file_exists($jsonFile)) {
    $comments = file_get_contents($jsonFile);
    echo $comments;
} else {
    echo json_encode([]); // 댓글이 없는 경우 빈 배열 반환 
}

?>


# TiRaMiSu CAKE

### 4주차 초안
<br/>홈페이지 -> index.html
<br/>포스팅 글 -> post1.html (post2.html, ...)
<br/>댓글 불러오기 -> get_comments.php => 댓글 등록 후 아직 화면에 display가 안되는 상황이라 더 손봐야 함
<br/>댓글 db에 등록 -> post_comment.php => db에 댓글 등록 자체는 잘 됨
<br/>취약점 포함 js 파일 -> loadComments.js
<br/>DOMPurify.js 및 취약점 관련 정보-> https://github.com/cure53/DOMPurify

<br/>

### 5주차 
<br/>홈페이지 -> index.html
<br/>포스팅 글 -> post1.html 만 일단 만들기로...함 / 그리고 postId도 구현해보려고 했는데 어케 하는지 몰라서 그냥 제거 
<br/>댓글 로드 -> get_comments.php 
<br/>댓글 서버로 가져와서 JSON 파일에 저장 -> post_comment.php => db 사용 안하고 loadComments.js 코드에 따라서 JSON 파일에 저장하는 방법 이용
<br/>취약점 포함 js 파일 -> loadComments.js
<br/>DOMPurify 외부에서 불러오기 -> https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.15/purify.min.js"
<br/>flag.py 코드 짜서 flag.txt 만들었음
<br/>댓글 JSON 파일에 저장되고 정상적으로 로드되는 모습!<br/>
![image](https://github.com/user-attachments/assets/db751ca1-4e24-4d8f-a58c-454cef3a8865)

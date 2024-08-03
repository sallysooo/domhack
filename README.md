# TiRaMiSu CAKE

### 4주차 초안
- 개발 환경 구축 (github 레포 설정, mysql 연동)
- 메인 홈페이지 -> index.html
- 포스팅 글 -> post1.html (post2.html, ...)
- 댓글 불러오기 -> get_comments.php => 댓글 등록 후 아직 화면에 display가 안되는 상황이라 더 손봐야 함
- 댓글 db에 등록 -> post_comment.php => db에 댓글 등록 자체는 잘 됨
- 취약점 포함 js 파일 -> loadComments.js
- DOMPurify.js 및 취약점 관련 정보-> https://github.com/cure53/DOMPurify

<br>

### 5주차 
- 포스팅 글 -> post1.html 만 일단 만들기로...함 / 그리고 ?postId도 구현해보려고 했는데 계속 구현이 잘 안되어서 그냥 제거해버림
- 댓글 로드 -> get_comments.php 
- 댓글 서버로 가져와서 JSON 파일에 저장 -> post_comment.php => db 사용 안하고 loadComments.js 코드에 따라서 JSON 파일에 저장하는 방법 이용
- 취약점 포함 js 파일 -> loadComments.js
- DOMPurify 외부에서 불러오기 -> https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.15/purify.min.js"
- flag.py 코드 짜서 flag.txt 만들었음
- 댓글 JSON 파일에 저장되고 정상적으로 로드되는 모습!
  <br><br>
![image](https://github.com/user-attachments/assets/e08ca710-3a6e-4de1-9ca3-5113e736b610)
<br><br>
- 익스 코드 삽입 후 alert() 정상적으로 동작하는 모습
  <br><br>
<img src="https://github.com/user-attachments/assets/304a734c-d4d9-4436-aea8-45ee195451fb" width="400" height="150">
<br><br>
- 적절한 위치에 삽입된 익스 코드
  <br><br>
<img src="https://github.com/user-attachments/assets/c03b3682-96be-4e87-8d99-b4672a0678e3" width="500" height="400">



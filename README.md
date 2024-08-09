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
- 댓글 로드 -> post/get_comments.php 
- 댓글 서버로 가져와서 JSON 파일에 저장 -> post/post_comment.php => db 사용 안하고 loadComments.js 코드에 따라서 JSON 파일에 저장하는 방법 이용
- 댓글 저장된 json 파일 -> post/comments.json
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

<br><br>

### 6주차 
- post1~5까지 모두 만드려고 했으나 php 작성 형식을 각 페이지 별로 대응시켜 구성하는 바람에 그냥 post2.html만 추가로 만듦.. (문제 풀이 시 추가 테스트 용도)
- 우분투에 구축하기 성공!
<br><br>
![image](https://github.com/user-attachments/assets/61075703-6f68-4c1d-bed4-f2e17d3cd73b)
<br><br>
- apache 및 php 설치하여 위와 같이 localhost로 문제 불러오기 완료
<br><br>
![image](https://github.com/user-attachments/assets/c837ab92-1e3f-43c1-9bfd-faa97f0ebd23)
<br><br>
- 댓글에 익스플로잇 코드 삽입
<br><br>
![image](https://github.com/user-attachments/assets/74c90ac5-3ab7-4c8d-8785-004db3257e47)
<br><br>
- 두 번째 댓글을 달아야 코드가 적용되어 flag 페이지로 이동 가능
<br><br>
![image](https://github.com/user-attachments/assets/b574181b-d615-486b-85a7-6c89895a7a39)
<br><br>
- 플래그 페이지까지 이동 가능한 것 확인 + 다른 익스 코드나 올바르지 않은 방식으로 displayFlag() 호출했을 때는 Forbidden으로 접근 제한되는 것도 확인 
<br><br>

<?php
session_start();

// 세션에 특정 값이 없으면 접근을 차단
if(!isset($_SESSION['can_access_flag']) || $_SESSION['can_access_flag'] !== true) {
    http_response_code(403);
    die("Forbidden");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link href=resources/css/labsBlog.css rel=stylesheet>
        <title>TiRaMiSu CAKE</title>
    </head>
    <body>
        <div theme="blog">
            <section class="maincontainer">
                <div class="container is-page">
                    <header class="navigation-header">
                        <section class="top-links">
                            <a href=index.html>Home</a><p>|</p>
                        </section>
                    </header>
                    <header class="notification-header">
                    </header>
                    <h1>Thank you for your comment! This is your flag~</h1>
                    <p>Your comment has been submitted.</p>
                    <?php
                        echo "HCAMP{24d9e2fbc8edb3d82fff19d8afe15bcc4301f5f054d}"
                    ?>
                    <div class="is-linkback">
                        <a href="index.html">Back to blog</a>
                    </div>
                </div>
            </section>
            <div class="footer-wrapper">
            </div>
        </div>
    </body>
</html>




<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <link href=resources/css/labsBlog.css rel=stylesheet>
        <title>TiRaMiSu CAKE</title>
    </head>
    <body>
        <div theme="blog">
            <section class="maincontainer">
                <div class="container is-page">
                    <header class="navigation-header">
                        <section class="top-links">
                            <a href="index.html">Home</a><p>|</p>
                        </section>
                    </header>
                    <header class="notification-header">
                    </header>
                    <div class="blog-post">
                        <br>
                        <img src="resources/images/tiramisu1.jpg" width="675" height="450"> 
                        <h1>All About Tiramisu</h1>
                        <p><span id=blog-author>Jisoo Kim</span> | 28 June 2024</p>
                        <hr>
                        <p>Tiramisu (Italian - tiramisù) is an Italian dessert made of ladyfinger pastries (savoiardi) dipped in coffee, layered with a whipped mixture of eggs, sugar, and mascarpone and flavoured with cocoa. The recipe has been adapted into many varieties of cakes and other desserts. Its origin is disputed between the Italian regions of Veneto and Friuli-Venezia Giulia. The name comes from the Italian tirami su ('pick me up' or 'cheer me up')</p>
                        <p>Traditional tiramisu contains ladyfingers (savoiardi), egg yolks, sugar, coffee, mascarpone, and cocoa powder. A common variant involves soaking the savoiardi in alcohol, such as Marsala wine, amaretto or a coffee-based liqueur. The original tiramisu made at Le Beccherie was circular.</p>
                        <p>The original shape of the cake is round, although the shape of the biscuits also allows the use of a rectangular or square pan. However, it is often assembled in round glasses, which show the various layers, or pyramids. Modern versions can have the addition of whipped cream or whipped egg whites, or both, combined with mascarpone. This makes the dish lighter, thick and foamy. Among the most common alcoholic changes includes the addition of Marsala wine. The cake is usually eaten cold.</p>
                        <br>
                        <p>+ By the way, we prepared a special gift for who makes an alert() of 'Tiramisu' through the comment section below.</p>
                        <p>Good Luck!</p>
                        <div>
                            <hr>
                            <h1>Comments</h1>
                            <span id='user-comments'>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.0.15/purify.min.js"></script>
                                <script src='resources/js/loadComments.js'></script>
                            </span>
                        <hr>
                        <section class="add-comment">
                            <h2>Leave a comment</h2>
                            <form id="commentForm">
                                <input required type="hidden" name="csrf" value="N6xOiYmiK8fc0QVFSBJe947MloJpnKkL">
                                <input required type="hidden" name="postId" value="1">
                                <label>Comment:</label>
                                <textarea required rows="12" cols="300" name="comment" placeholder="HTML is allowed"></textarea>
                                        <label>Name:</label>
                                        <input required type="text" name="name">
                                        <label>Email:</label>
                                        <input required type="email" name="email">
                                        <label>Website:</label>
                                        <input pattern="(http:|https:).+" type="text" name="website">
                                <button class="button" type="submit">Post Comment</button>
                            </form>
                        </section>
                        <div class="is-linkback">
                            <a href="index.html">Back to Blog</a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="footer-wrapper">
            </div>
        </div>
        <?php include('post/detect.php'); ?>
        <script src="resources/js/commentHandler.js"></script>
    </body>
</html>

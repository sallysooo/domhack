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
                        <img src="resources/images/tiramisu2.png" width="675" height="450"> 
                        <h1>My Favorite Tiramisu Layer Cake</h1>
                        <p><span id=blog-author>Christina Tosi</span> | 14 June 2024</p>
                        <hr>
                        <p>Tiramisu is so luxurious and fancy, even saying the word makes you want to put your pinky out. This Tiramisu Layer Cake is certainly lush, but it's got a lot of heart too.</p>
                        <p>On a trip to visit her father's family in Northern Italy, surrounded by warmth and the smell of fresh, strong coffee, Tosi learned her family's tiramisu recipe. Soon, the time came for her to celebrate this recipe-keepsake on her own terms. And this layer cake is just that.</p>
                        <p>This Milk Bar twist on Italy's famous dessert starts by giving your vanilla cake an invigorating bath in a deep, bitter coffee soak. Then layer those cake rounds with chunky chocolate crumbs, velvety coffee frosting, and a rich cannoli cream that combines liquid cheesecake, ricotta and mascarpone—because when your cake is extra, why not?</p>
                        <p>Fun baking fact: tiramisu (and cannoli filling) usually call for ricotta or mascarpone. At Milk Bar, we like to be extra, so our tiramisu has not one, not two, but three cheese components!</p>
                        <p>Bring this to your next fancy-ish get-together or share with your favorite people who love Italian desserts (or coffee) just as much as you.</p>
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
        <script src="resources/js/commentHandler2.js"></script>
    </body>
</html>

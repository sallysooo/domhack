document.getElementById('commentForm').addEventListener('submit', function(e) {
    e.preventDefault(); 

    let formData = new FormData(this);

    let comment = formData.get('comment');
    let sanitizedComment = DOMPurify.sanitize(comment, {
        ALLOWED_TAGS: ['b', 'i', 'em', 'strong', 'a', 'p'],
        ALLOWED_ATTR: ['href', 'id', 'name', 'target'],
        FORBID_TAGS: ['style', 'script', 'img', 'math', 'table', 'mglyph'],
        FORBID_ATTR: ['onerror', 'onclick', 'onload', 'title']
    });

    formData.set('comment', sanitizedComment);

    fetch('post/post_comment3.php', {
        method: 'POST',
        body: formData
    }).then(response => response.json()).then(data => {
        if (data.status === 'success') {
            location.reload();  
        } else {
            console.error('Error:', data.message);
        }
    }).catch(error => console.error('Error:', error));
});

window.onload = function() {
    loadComments('post/get_comments3.php');
};

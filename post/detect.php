<?php
echo "
<script>
(function() {
    var originalAlert = window.alert;
    window.alert = function(message) {
        if (message === 'Tiramisu') {
            fetch('post/flag_request.php', {
                method: 'POST'
            }).then(response => response.json()).then(data => {
                if (data.status === 'success') {
                    originalAlert(data.flag);
                } else {
                    console.error('Error:', data.message);
                }
            }).catch(error => console.error('Error:', error));
        }
        originalAlert(message);
    };
})();
</script>
";
?>

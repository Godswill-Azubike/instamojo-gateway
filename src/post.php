<?php
    echo '<form id="forms" action="http://127.0.0.1/instamojo-gateway/src/payresponse.php" method="post">';
        foreach ($_REQUEST as $key => $value) {
            echo '<input type="hidden" name="'.$key.'" value="'.$_REQUEST[$key].'">';
        }
    echo '</form>';
?>
<script type="text/javascript">
    document.getElementById('forms').submit();
</script>


<?php
require_once 'views/partials/nav.php';
require_once 'session_config.php';
?>

<div class="create-post">
    <form class="new-post" action="includes/createpost.inc.php" method="post">
        <input id="comment" name="body" type="comment" placeholder="What's new?">
        <button type="submit" class="post">Post</button>
    </form>
    <?php require_once 'views/createpost.view.php' ?>
</div>
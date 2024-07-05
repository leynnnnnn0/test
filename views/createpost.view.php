<?php

if(isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error) {
        echo '<p class="error">' . $error . '</p>';
    }
    unset($_SESSION['errors']);
}

if(isset($_SESSION['message'])) {
    echo '<p class="success">'. $_SESSION['message']. '</p>';
    unset($_SESSION['message']);
}

if(isset($_SESSION['posts'])) {
    foreach($_SESSION['posts'] as $key => $value) {
        echo '<div class="posts">';
        echo '<h6>'. "USERNAME". '</h6>';
        echo '<p>'. $value['content']. '</p>';
        echo '</div>';
    }
    unset($_SESSION['posts']);
}
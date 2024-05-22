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
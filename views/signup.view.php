<?php

if(isset($_SESSION['errors'])) {
    foreach($_SESSION['errors'] as $error) {
        echo '<p class="error">' .$error. '</p>';
    }
    unset($_SESSION['errors']);
}

echo '<p>' . var_dump($_SESSION) . '</p>'; 
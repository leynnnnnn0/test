<?php

if (isset($_SESSION['errors'])) { 
    foreach ($_SESSION['errors'] as $value) {
        echo '<p class="error">' . $value . '</p>';
    }
    unset($_SESSION['errors']);
}

if(isset($_GET['message'])) {
    echo '<p class="success">' . $_GET['message'] . '</p>';
}


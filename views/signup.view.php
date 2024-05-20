<?php

if(isset($_SESSION['errors'])) {
    echo '<p>' .$_SESSION['errors'] . '</p>';
}else {
    echo '<p>' .$_SESSION['errors'] . '</p>'; 
}

echo '<p>' . "HELLO" . '</p>'; 
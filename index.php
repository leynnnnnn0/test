<?php 
require_once 'views/partials/head.php';
require_once 'session_config.php';
require_once 'util.php';
?>

<?php 

// if(isset($_SESSION['user'])) {
//     if(isset($_GET['editDetails']) && $_GET['editDetails'] === 'true'){
//         require_once 'views/partials/nav.php';
//         require_once 'routes/editprofile.php';
//     }else {
//         require_once 'views/partials/nav.php';
//         require_once 'routes/profile.php';
//     }
// }else if($_SERVER['REQUEST_URI'] === '/profilesystem/index.php') {
    
// }else {
//     require_once 'routes/login.php';
// }

require_once 'routes/createpost.php';



?>

<?php require_once 'views/partials/footer.php'?>
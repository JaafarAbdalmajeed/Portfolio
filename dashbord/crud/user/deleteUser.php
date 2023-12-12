
<?php
    require_once('../../../Backend/config/db.php');
    require_once('../../../Backend/controllers/User.php');

    $userHandler = new User($conn);
    if($_GET['id']) {
        $id = $_GET['id'];
        $userHandler->deleteUser($id);
        if(!$userHandler){
            return;
        }
    }
?>
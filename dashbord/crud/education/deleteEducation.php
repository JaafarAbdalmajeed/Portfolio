<?php
    require_once('../../../Backend/config/db.php');
    require_once('../../../Backend/controllers/Educations.php');
    if ($_GET['userId'] && $_GET['id']) {
        $userId = $_GET['userId'];
        $id = $_GET['id'];

        $educationHandler = new Educations($conn);
        $educationHandler -> deleteEducation($id, $userId);
        

    }




?>
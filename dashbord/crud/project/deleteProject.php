<?php
    include '../../../Backend/controllers/Project.php';
    include '../../../Backend/config/db.php';
    if($_GET['projectId'] && $_GET['userId']) {
        $projectId = $_GET['projectId'];
        $userId = $_GET['userId'];

        $projectHandler = new Project($conn);
        $projectHandler -> deleteProject($projectId, $userId);
    }
?>
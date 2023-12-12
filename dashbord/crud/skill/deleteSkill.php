<?php
    include '../../../Backend/controllers/Skills.php';
    include '../../../Backend/config/db.php';
    if($_GET['skillId'] && $_GET['userId']) {
        $skillId = $_GET['skillId'];
        $userId = $_GET['userId'];

        $skillsHandler = new Skills($conn);
        $skillsHandler -> deleteSkill($skillId, $userId);
    }
?>
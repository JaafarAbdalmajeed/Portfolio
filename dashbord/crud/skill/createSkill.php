<?php

include '../../../Backend/controllers/Skills.php';
include '../../../Backend/config/db.php';

if(isset($_POST['submit'])) {
    $userId = $_GET['userId'];
    $skill = $_POST['skillName'];
    $icons = $_POST['skillIcon'];
    $skillHandler = new Skills($conn);
    $skillHandler->createSkill($userId, $skill, $icons);

    if (!$skillHandler) {
        return;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"  >

<title>Hello, world!</title>
</head>
<body>
<div class="container">
    <form method= "post" action = "">
        <div class="form-group">
            <label for="skillName">Skill</label>
            <input type="text" class="form-control" id="skillName" name= "skillName"aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="skillIcon">skill icon</label>
            <input type="url" name = "skillIcon" class="form-control" id="skillIcon" aria-describedby="emailHelp" >
        </div>
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>



<?php
include '../../../Backend/controllers/Project.php';
include '../../../Backend/config/db.php';

if (isset($_POST['submit'])) {
    $projectId = $_GET['projectId'];
    $userId = $_GET['userId'];
    $projectName = $_POST['projectName'];
    $projectLink = $_POST['projectLink'];
    $projectImage = $_POST['projectImage'];
    $projectAbout = $_POST['projectAbout'];

    $projectHandler = new Project($conn);
    
    $projectHandler->updateProject($projectId, $userId, $projectName, $projectLink, $projectImage, $projectAbout);
    if(!$projectHandler) {
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
            <label for="exampleInputEmail1">Project Name</label>
            <input type="text" class="form-control" id="projectName" name= "projectName"aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Project Link</label>
            <input type="url" name = "projectLink" class="form-control" id="projectLink" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Project Image</label>
            <input type="file" name ="projectImage" class="form-control" id="projectImage">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Project About</label>
            <input type="text" name="projectAbout" class="form-control" id="projectAbout">
        </div>
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>


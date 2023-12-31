<?php

    require_once('../../../Backend/config/db.php');
    require_once('../../../Backend/controllers/Educations.php');

    if(isset($_POST['submit'])) {
        $userId = $_GET['userId'];
        $education = $_POST['educationName'];
        $foundation = $_POST['educationFoundation'];
        $date = $_POST['educationDate'];
        $image = $_FILES['image'];

        $imageHandler = new ImageCRUD($conn);
        $imagePath = $imageHandler -> createAndUpdateImage($image, 'education images');

        $ُeducationHandler = new Educations($conn);
        
        $ُeducationHandler->createEducation($userId,$education, $foundation, $date, $imagePath);
        if(!$ُeducationHandler) {
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

<title>Add Education</title>
</head>
<body>
    <div class="container">
        <form method= "post" action = "" enctype="multipart/form-data">
            <div class="form-group">
                <label for="educationName">Education Name</label>
                <input type="text" class="form-control" id="educationName" name= "educationName"aria-describedby="emailHelp" >
            </div>
            
            <div class="form-group">
                <label for="educationFoundation">Education foundation</label>
                <input type="text" name="educationFoundation" class="form-control" id="educationFoundation">
            </div>
            <div class="form-group">
                <label for="educationDate">Education Date</label>
                <input type="text" name = "educationDate" class="form-control" id="educationDate" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
                <label for="educationImage">Education Image</label>
                <input type="file" name = "image" class="form-control" id="educationImage" aria-describedby="emailHelp" >
            </div>
            <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>


<?php

include '../../../Backend/controllers/User.php';
include '../../../Backend/config/db.php';
include '../imageCRUD.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile = $_POST['profile'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $twitter = $_POST['twitter'];
    $image = $_FILES['image'];
    
    $imageHandler = new imageCRUD($conn);
    $imagePath = $imageHandler -> createAndUpdateImage($image, 'user images');
    $userHandler = new User($conn);
    $userHandler->createUser($name, $email, $password, $profile, $mobile, $address, $facebook, $linkedin, $twitter, $imagePath);
    if(!$userHandler){
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
    <form method= "POST" action = "createUser.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="name" name= "name"aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name = "email" class="form-control" id="email" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name ="password" class="form-control" id="password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Profile</label>
            <input type="text" name="profile" class="form-control" id="profile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="mobile">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Facebook</label>
            <input type="text" name="facebook" class="form-control" id="facebook">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Linkedin</label>
            <input type="text" name="linkedin" class="form-control" id="linkedin">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Twitter</label>
            <input type="text" name="twitter" class="form-control" id="twitter">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" accept=".png, .jpg, .jpeg">
        </div>
        
        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>


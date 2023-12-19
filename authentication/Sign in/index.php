<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="welcome">
        <h1><strong>Hello There</strong></h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, error nam laborum blanditiis ipsam illo sapiente excepturi fugiat nemo? Provident.</p>
        <form action="index.php" method="post">
            <div class="inputDiv">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                
            </div>

            <div class="inputDiv">
                <label for="Password">Password</label>
                <input type="password" name="Password" id="Password">
            </div>

            <div class="btn">
                <input type="submit" value="Sign In" class="a">
            </div>
        </form>
        
        <div class="btnSingUp">Don't have an account?<a href="../Sing up/signUp.php">Sign Up</a></div>
    </main>
    
</body>
</html>

<?php 
    include '../../Backend/config/db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['Password'];
        

        try {
            
            $sql = $conn->prepare('SELECT * FROM users WHERE email = :email');
            $sql->bindParam(':email', $email);
            $sql->execute();

            $user = $sql->fetch(PDO::FETCH_ASSOC);
            
            if ($user && $password === $user['password']) {
                
                    header("Location: ../../dashbord/pages/tables.php");
                } 
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
?>

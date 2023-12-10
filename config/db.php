<?php 
    $host = 'localhost';
    $dbname = 'Portfolio';
    $user = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (BDOException $e){
        echo 'ERROR: '. $e.getMessage();
    }
?>

<?php
    try {
        // Fetch user data
        $statement = $conn->prepare("SELECT * FROM `users` WHERE `users`.`id` = 1");
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        // Fetch professions for the user
        $statementProfessions = $conn->prepare("SELECT profession_name FROM professions WHERE user_id = :userId");
        $statementProfessions->bindParam(':userId', $result['id']);
        $statementProfessions->execute();
        $resultProfessions = $statementProfessions->fetchAll(PDO::FETCH_ASSOC);

        // Fetch about for the user
        $statementAbout = $conn->prepare('SELECT about_content FROM about WHERE user_id = :userId');
        $statementAbout->bindParam(':userId', $result['id']);
        $statementAbout->execute();
        $resultsAbout = $statementAbout->fetchAll(PDO::FETCH_ASSOC);

        //Fetch skills for the user
        $statementSkills = $conn -> prepare('SELECT skill, icons FROM skills WHERE user_id = :userId');
        $statementSkills -> bindParam(':userId', $result['id']);
        $statementSkills -> execute();
        $resultsSkills = $statementSkills -> fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
    echo "Failed: " . $e->getMessage();
    }
?>
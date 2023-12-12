<?php 
    class Project {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function createProject ($userId, $projectName, $projectLink, $projectImage, $projectAbout) {
            try {
                $sql = "INSERT INTO projects (user_id, project_name, project_link, project_image, project_about) 
                VALUES (?, ?, ?, ?, ?)";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bindParam(1,$userId, PDO::PARAM_INT);
                $statement -> bindParam(2,$projectName,PDO::PARAM_STR);
                $statement -> bindParam(3,$projectLink,PDO::PARAM_STR);
                $statement -> bindParam(4,$projectImage,PDO::PARAM_STR);
                $statement -> bindParam(5,$projectAbout,PDO::PARAM_STR);
            return $statement -> execute();
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }


        public function getProjectsByUserId($userId) {
            try {
                $sql = "SELECT * FROM projects WHERE user_id=?";
                $statement = $this->conn->prepare($sql);
                $statement->bindParam(1, $userId, PDO::PARAM_INT);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
                return $result;
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        public function deleteProject($projectId) {
            try {
                $sql = "DELETE FROM projects WHERE id=?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bindParam("i",$projectId);

                return $statement->execute();


            } catch (PDOException $e) {
                echo 'ERROR: '.$e->getMessage();
            }
        }   
    }
?>
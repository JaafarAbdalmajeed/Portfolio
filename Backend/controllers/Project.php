<?php 
    include '../config/db.php';
    class Project {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function createProject ($userId, $projectName, $projectLink, $projectImage, $projectAbout) {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO projects (user_id, project_name, project_link, project_image, project_about) 
            VALUES (?, ?, ?, ?, ?)";
            $statement = $this -> conn -> prepare($sql);
            $statement -> bind_param("issss", $userId, $projectName, $projectLink, $projectImage, $projectAbout);
            return $statement -> execute();
        }

        public function getProjectsByUserId($userId) {
            try {
                $sql = "SELECT * FROM users WHERE user_Id=?";
                $statement -> $this -> conn ->prepare($sql);
                $statement -> bind_param("i",$userId);
                $statement -> execute();
                $result -> $statement -> get_result();
                $projects = array();
                while ($row = $result -> fetch_assoc()) {
                    array_push($projects, $row);
                }
                return $projects;

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }

        }

        public function updateProject($projectId, $userId, $projectName, $projectLink, $projectImage, $projectAbout) {
            try {
                

                $sql = "UPDATE projects SET 
                user_id=?, project_name=?, project_link=?, project_image=?, project_about=? 
                WHERE id=?";

                $statement = $this ->conn -> prepare($sql);
                $statement->bind_param(("issssi", $userId, $projectName, $projectLink, $projectImage, $projectAbout, $projectId));
                return $stmt->execute();

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }
        }

        public function deleteProject($projectId) {
            try {
                $sql = "DELETE FROM projects WHERE id=?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bind_param("i",$projectId);
                return $statement -> execute();

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }
        }   
    }
?>
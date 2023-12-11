<?php 
    class Educations {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function createEducation ($userId,$education, $foundation, $date) {
            
            $sql = "INSERT INTO projects (user_id, education, foundation, date) 
            VALUES (?, ?, ?, ?)";
            $statement = $this -> conn -> prepare($sql);
            $statement -> bindParam("isss", $userId,$education, $foundation, $date, $educationId );
            
            return $statement -> execute();
        }

        public function updateEductions($educationId ,$userId,$education, $foundation, $date) {
            try {
                $sql = 'UPDATE eductions  SET 
                        user_id=? , education=?, foundation=?,date=?
                        WHERE id=?';
                $statement = $this->conn->prepare($sql);
                $statement -> bindParam("isssi",$userId,$education, $foundation, $date, $educationId );

            } catch (PDOException $e) {
                echo 'ERROR: '. $e.getMessage();
            }
        }

        public function getEducationsByUserId($userId) {
            try {
                $sql = "SELECT * FROM educations WHERE user_id = ?";
                $statement = $this->conn->prepare($sql);
                $statement->bindParam(1, $userId, PDO::PARAM_INT);

                if ($statement->execute()) {
                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $result;
                } else {
                    // Handle query execution failure
                    throw new Exception("Failed to execute the query");
                }
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        public function deleteEducation($projectId) {
            try {
                $sql = "DELETE FROM eductions WHERE id=?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bindParam("i",$projectId);

                return $statement->execute();


            } catch (PDOException $e) {
                echo 'ERROR: '.$e->getMessage();
            }
        }   
    }
?>
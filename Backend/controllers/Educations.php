<?php 
class Educations {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createEducation($userId, $education, $foundation, $date) {
        try {
            $sql = "INSERT INTO educations (user_id, education, foundation, date) 
                    VALUES (?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $userId, PDO::PARAM_INT);
            $statement->bindParam(2, $education, PDO::PARAM_STR);
            $statement->bindParam(3, $foundation, PDO::PARAM_STR);
            $statement->bindParam(4, $date, PDO::PARAM_STR);

            return $statement->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function updateEducation($educationId, $userId, $education, $foundation, $date) {
        try {
            $sql = 'UPDATE educations SET 
                    user_id=?, education=?, foundation=?, date=?
                    WHERE id=?';
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $userId, PDO::PARAM_INT);
            $statement->bindParam(2, $education, PDO::PARAM_STR);
            $statement->bindParam(3, $foundation, PDO::PARAM_STR);
            $statement->bindParam(4, $date, PDO::PARAM_STR);
            $statement->bindParam(5, $educationId, PDO::PARAM_INT);

            return $statement->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
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

    public function deleteEducation($educationId, $userId) {
        try {
            $sql = "DELETE FROM educations WHERE id=?";
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $educationId, PDO::PARAM_INT);

            return $statement->execute();
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }   
}
<?php
    class Skills {
        private $conn;
        public function __construct ($conn) {
            $this -> conn = $conn;
        }

        public function createSkill($userId, $skill, $icons)
    {


        try {
            $sql = "INSERT INTO skills (user_id, skill, icons) VALUES (?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement -> bindParam(1, $userId, PDO::PARAM_INT);
            $statement -> bindParam(2, $skill, PDO::PARAM_STR);
            $statement -> bindParam(3, $icons, PDO::PARAM_STR);
            return $statement->execute();

        } catch (PDOException $e) {
            echo 'ERROR:' . $e.getMessage();
        }
    }

    public function getSkillsByUserId($userId)
    {
        try {
            $sql = "SELECT * FROM skills WHERE user_id=?";
                $statement = $this->conn->prepare($sql);
                $statement->bindParam(1, $userId, PDO::PARAM_INT);
                $statement->execute();
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $result;
        } catch (PDOException $e) {
            echo 'ERROR:' . $e.getMessage();
        }
    }

    public function updateSkill($skillId, $userId, $skill, $icons)
    {
        try {
            $sql = "UPDATE skills SET skill=?, icons=? WHERE id=? && user_id=?";
            $statement = $this->conn->prepare($sql);
            $statement -> bindParam( 1, $skill, PDO::PARAM_STR);
            $statement -> bindParam( 2, $icons, PDO::PARAM_STR);
            $statement -> bindParam( 3, $skillId, PDO::PARAM_INT);
            $statement -> bindParam( 4, $userId, PDO::PARAM_INT);

            return $statement->execute();    
        } catch (PDOException $e) {
            echo 'ERROR:' . $e.getMessage();
        }
    
        }

    public function deleteSkill($skillId, $userId)
    {
        try {
            $sql = "DELETE FROM skills WHERE id=? && user_id=?";
            $statement = $this->conn->prepare($sql);
            $statement -> bindParam(1, $skillId,PDO::PARAM_INT);
            $statement -> bindParam(2, $userId,PDO::PARAM_INT);
            return $statement->execute();
    
        } catch (PDOException $e) {
            echo 'ERROR:' . $e.getMessage();
        }
    }
    }
?>
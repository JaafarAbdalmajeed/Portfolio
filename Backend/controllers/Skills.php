<?php
    class Skills {
        private $conn;
        public function __construct ($conn) {
            $this -> conn = $conn;
        }

        public function createSkill($userId, $skill, $icons)
    {
        $sql = "INSERT INTO skills (user_id, skill, icons) VALUES (?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("iss", $userId, $skill, $icons);

        return $stmt->execute();
    }

    public function getSkillsByUserId($userId)
    {
        $sql = "SELECT * FROM skills WHERE user_id=?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $userId);
        $statement->execute();

        $result = $statement->get_result();

        $skills = array();
        while ($row = $result->fetch_assoc()) {
            $skills[] = $row;
        }

        return $skills;
    }

    public function updateSkill($skillId, $userId, $skill, $icons)
    {
        $sql = "UPDATE skills SET user_id=?, skill=?, icons=? WHERE id=?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("issi", $userId, $skill, $icons, $skillId);

        return $statement->execute();
    }

    public function deleteSkill($skillId)
    {
        $sql = "DELETE FROM skills WHERE id=?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $skillId);

        return $statement->execute();
    }
    }



?>
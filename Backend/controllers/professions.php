<?php
    include '../config/db.php';
    class Professions {
        private $conn;

        public function __construct ($conn) {
            $this -> conn = $conn;
        }


        public function addProfessions ($userId,$professionName ) {
            try {
                $sql = "INSERT INTO  professions (user_id,profession_name) VALUES (? ,?)";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bind_param("is",$userId,$professionName );
                $statement -> execute();
            } catch (PDOException $e) {
                echo "ERROR: ". $e -> getMessage();
            }

        }

        public function getProfessions ($userId) {
            try {
                $sql = "SELECT * FROM professions WHERE user_id = ?";
                $statement = $this -> conn -> prepare ($sql);
                $statement -> bind_param("i", $userId);
                $statement -> execute();
                
                $professions = array();
                while ($row -> $result -> fetch_assoc) {
                    array_push($professions, $row);
                }
            return $professions;
        } catch (PDOException $e) {
            echo "ERROR: ". $e -> getMessage();
        }

        }

        public function updateProfessions ($userId, $professionName) {
            try {
                $sql = "UPDATE professions SET
                user_id = ?, profession_name = ?
                WHERE id = ?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bind_param("is",$userId, $professionName);
                $statement -> execute();

            } catch (PDOException $e) {
                echo "ERROR: ". $e -> getMessage();
            }

        }

        public function deleteProfessions ($professionId) {
            try {
                $sql = "DELETE FROM professions WHERE id =?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bind_param("i",$professionId);
                return $statement -> execute();
            }  catch (PDOException $e) {
                echo "ERROR: ". $e -> getMessage();
            }
        }
    }


?>
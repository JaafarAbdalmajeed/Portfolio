<?php 
    class User {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function createUser($name, $email, $password, $profile, $mobile, $address, $facebook, $linkedin, $twitter) {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password, profile, mobile, address, facebook, linkedin, twitter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $hashPassword);
            $statement->bindParam(4, $profile);
            $statement->bindParam(5, $mobile);
            $statement->bindParam(6, $address);
            $statement->bindParam(7, $facebook);
            $statement->bindParam(8, $linkedin);
            $statement->bindParam(9, $twitter);
        
            return $statement->execute();
        }

        public function getUserAuth($email, $password) {
            try {
                $sql = "SELECT * FROM users WHERE email=?";
                $statement = $this->conn->prepare($sql);
                $statement->bindParam(1, $email); 
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    return $result;
                }

                return null;
            } catch (PDOException $e) {
                echo 'ERROR: '.$e->getMessage();
            }

        }

        public function updateUser($id, $name, $newEmail, $password, $profile, $mobile, $address, $facebook, $linkedin, $twitter) {
            try {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
                $sql = "UPDATE users SET
                                name=?, email=?, password=?, profile=?, mobile=?, address=?, facebook=?, linkedin=?, twitter=? 
                                WHERE id=?";
                $statement = $this->conn->prepare($sql);
        
                $statement->bindValue(1, $name, PDO::PARAM_STR);
                $statement->bindValue(2, $newEmail, PDO::PARAM_STR);
                $statement->bindValue(3, $hashedPassword, PDO::PARAM_STR);
                $statement->bindValue(4, $profile, PDO::PARAM_STR);
                $statement->bindValue(5, $mobile, PDO::PARAM_STR);
                $statement->bindValue(6, $address, PDO::PARAM_STR);
                $statement->bindValue(7, $facebook, PDO::PARAM_STR);
                $statement->bindValue(8, $linkedin, PDO::PARAM_STR);
                $statement->bindValue(9, $twitter, PDO::PARAM_STR);
                $statement->bindValue(10, $id, PDO::PARAM_INT);
        
                return $statement->execute();
            } catch (PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        }

        public function deleteUser($id) {
            try {
                $sql = "DELETE FROM users WHERE id=?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bindParam(1, $id, PDO::PARAM_INT);
                return $statement -> execute();

            } catch (PDOException $e) {
                echo 'ERROR: '.$e->getMessage();
            }
        }   
    }
?>

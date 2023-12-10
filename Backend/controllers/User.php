<?php 
    include '../config/db.php';
    class User {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function createUser ($name, $email, $password, $profile, $mobile, $address, $facebook, $linkedin, $twitter) {
            $hashPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password, profile, mobile, address, facebook, linkedin, twitter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $statement = $this->conn->prepare($sql);
            $statement -> bindParam("sssssssss", $name, $email, $hashedPassword, $profile, $mobile, $address, $facebook, $linkedin, $twitter); 
            return $statement -> execute();
        }

        public function getUserAuth($email, $password) {
            try {
                $sql = "SELECT * FROM users WHERE email=?";
                $statement -> $this -> conn ->prepare($sql);
                $statement -> bind_param("s",$email);
                $statement -> execute();
                $result -> $statement -> get_result();
                if ( $result -> num_rows > 0) {
                    $user = $result -> fetch_assoc();

                    if(password_verify($password, $user['password'])){
                        return $user;
                    }
                }

                return null;

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }

        }

        public function updateUser($id, $name, $newEmail, $password, $profile, $mobile, $address, $facebook, $linkedin, $twitter) {
            try {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                $sql = "UPDATE users SET
                                name=?, email=?, password=?, profile=?, mobile=?, address=?, facebook=?, linkedin=?, twitter=? 
                                WHERE email=?";
                $statement = $this ->conn -> prepare($sql);
                $stmt->bind_param("ssssssssss", $name, $newEmail, $hashedPassword, $profile, $mobile, $address, $facebook, $linkedin, $twitter, $email);
                return $stmt->execute();

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }
        }

        public function deleteUser($id) {
            try {
                $sql = "DELETE FROM users WHERE id=?";
                $statement = $this -> conn -> prepare($sql);
                $statement -> bind_param("s",$id);
                return $statement -> execute();

            } catch (PDOException $e) {
                echo 'ERROR: '$e->getMessage();
            }
        }   
    }
?>
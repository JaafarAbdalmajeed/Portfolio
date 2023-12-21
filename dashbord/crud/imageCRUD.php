<?php

    class ImageCRUD {
        private $conn;
        

        public function __constructor ($conn) {
            $this -> conn = $conn;
        }

        public function createAndUpdateImage ($image, $whoIs) {
            $imagePath = '';
            if ($image !== null) {
                $imageName = $image['name'];           
                $imageTmpName = $image['tmp_name'];             
                $imageType = $image['type'];             
                $imageSize = $image['size'];
                $imgExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

                $maxFileSize = 5 * 1024 * 1024; // 5 MB
                if ($imageSize > $maxFileSize) {
                    die('File size exceeds the maximum allowed size');
                }

                $uniqueFilename = uniqid() . '.' . $imageName;
                $imagePath = "../../uploads/$whoIs/" . $uniqueFilename;
                // if ($whoIs === 'image') {
                //     
                // } else if ($whoIs === 'image') {
                //     $imagePath = "../../uploads/images/" . $uniqueFilename;
                // } else if ($whoIs === 'image') {
                //     $imagePath = "../../uploads/images/" . $uniqueFilename;
                // } else if ($whoIs === 'image') {
                    
                // }
                

                if (move_uploaded_file($imageTmpName, $imagePath)) {
                    
                } else {
                    echo 'Error uploading file.';
                }
            }
            return $imagePath;
        }
    }
?>
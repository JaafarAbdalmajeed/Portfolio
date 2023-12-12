<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php 
        include '../config/db.php';
        try {
            $schemaStatement = $conn->query('SELECT * FROM users');
            $users = $schemaStatement -> fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'ERROR: '. $e->getMessage();
        }
        $arr  = array('fullName', 'email', 'mobile', 'Password','dateBirth');
        $len = count($arr); 
        echo '<table border="solid1px">';
            echo '<thead>';
                echo '<tr>';
                    echo '<td>fullName</td>';
                    echo '<td>email</td>';
                    echo '<td>mobile</td>';
                    echo '<td>password</td>';
                    echo '<td>birth of date</td>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            foreach($users as $user) {
                echo '<tr>';
                for($i = 0; $i < $len; $i++) {
                    echo '<td>';
                    echo $user[$arr[$i]];
                    echo '</td>';
                }
                echo '</tr>';
            }
            echo '</tbody>';
        echo '</table>';
    ?>
</body>
</html>


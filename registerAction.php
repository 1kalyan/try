
<?php 

    require_once 'dbconnection.php';

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $user = $_POST['name'];
        $age = $_POST['age'];
        // $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $gender = $_POST['gender'];
        $mail = $_POST['email'];
        $number = $_POST['phone'];
        $description = $_POST['other'];
    
        $sql = "INSERT INTO `TRIP`.`TRIP` (`name`, `age`, `gender`, `email`, `phone`, `other`)
        VALUES ('$user', '$age', '$gender', '$mail', '$number', '$description')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }
    
        echo "<p style='color: green;'>Registration Successful!</p>";
        include "index.html";
        mysqli_close($conn);
    }
    

?>

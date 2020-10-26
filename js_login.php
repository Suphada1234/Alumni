<?php
    include('connect.php');



      $login_email = $_POST["login_email"];
      $login_password = $_POST["login_password"];

    try{   
        $insert = $conn->prepare("SELECT * FROM `personal` WHERE `student_id` = :login_email AND  `password` = :login_password");
        $insert->bindparam(":login_email",$login_email);
        $insert->bindparam(":login_password",$login_password);
        $insert->execute();
        $result = $insert->fetchAll();

        foreach ($result as $row) {  
            $_SESSION["student_id"] =  $row['student_id'];
            $_SESSION["password"] =  $row['password'];
            $_SESSION["name"] =  $row['name'];
            echo $row['name'];
        };

        if(!isset( $_SESSION["name"])){
            echo "error";
        }
    
    }
    catch(PDOException $error){
        // echo $sql . "<br>" . $error->getMessage();
        echo "error";
    }


    ?>
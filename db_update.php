<?php
    include("connect.php");
      // print_r($_POST);
      // print_r($_FILES);
      $p_card = $_POST["p_card"];
      $studentCode = $_POST["studentCode"];

      $name = $_POST["fname"];
      $gender = $_POST["gender"];
      $birthday = $_POST["birthday"];
      $p_address = $_POST["p_address"];
      $p_tel = $_POST["p_tel"];
      $email = $_POST["email"];
      $facebook = $_POST["facebook"];
      $password = $_POST["password"];


      $imgName = $_FILES["img"]["name"];
      $temName = $_FILES["img"]["tmp_name"];

      if($imgName ==  ""){
            try{   
                  // ไม่มีการอัปเดตรูป
                    $insert = $conn->prepare("UPDATE `personal` SET `name`=:p_name,`gender`=:gender,`birthday`=:birthday,`address`=:p_address,`tel`=:p_tel,`email`=:email,`facebook`=:facebook,`password`=:password WHERE `card_id` = :p_card");
                    $insert->bindparam(":p_card",$p_card);
                    $insert->bindparam(":p_name",$name);
                    $insert->bindparam(":gender",$gender);
                    $insert->bindparam(":birthday",$birthday);
                    $insert->bindparam(":p_address",$p_address);
                    $insert->bindparam(":p_tel",$p_tel);
                    $insert->bindparam(":email",$email);
                    $insert->bindparam(":facebook",$facebook);
                    $insert->execute();
              }
              catch(PDOException $error){
                    echo $sql . "<br>" . $error->getMessage();
              }
            // echo "1";
      }
      else{
            try{   
                  if (is_uploaded_file($temName)) {
                        $url = "img/upload/";
                        $destination = $url.$imgName;
                        move_uploaded_file($temName,$destination);
                        $img = $imgName;
                    }
                   else { $img = 'noImage';}  
      
                  $insert = $conn->prepare("UPDATE `personal` SET `name`=:p_name,`gender`=:gender,`birthday`=:birthday,`address`=:p_address,`tel`=:p_tel,`email`=:email,`facebook`=:facebook ,`img`= :img WHERE `card_id` = :p_card");
                  $insert->bindparam(":p_card",$p_card);
                  $insert->bindparam(":p_name",$name);
                  $insert->bindparam(":gender",$gender);
                  $insert->bindparam(":birthday",$birthday);
                  $insert->bindparam(":p_address",$p_address);
                  $insert->bindparam(":p_tel",$p_tel);
                  $insert->bindparam(":email",$email);
                  $insert->bindparam(":facebook",$facebook);
                  $insert->bindparam(":img",$img);
                  $insert->execute();
            }
            catch(PDOException $error){
                  echo $sql . "<br>" . $error->getMessage();
            }      
      }

      // exit();
      

      $group = $_POST["group"];
      $branch = $_POST["branch"];
      $faculty = $_POST["faculty"];
      $semester = $_POST["semester"];
      $education_level = $_POST["education_level"];
      $year_int = $_POST["year_int"];
      $year_out = $_POST["year_out"];
      $outstanding_work = $_POST["outstanding_work"];

      try{   
            $insert_student = $conn->prepare("UPDATE `alumni` SET `group`=:group,`branch`=:branch,`faculty`=:faculty,`semester`=:semester,`education_level`=:education_level,`year_int`=:year_int,`year_out`=:year_out,`outstanding_work`=:outstanding_work WHERE `student_id` = :studentCode");
            $insert_student->bindparam(":studentCode",$studentCode);
            $insert_student->bindparam(":group",$group);
            $insert_student->bindparam(":branch",$branch);
            $insert_student->bindparam(":faculty",$faculty);
            $insert_student->bindparam(":semester",$semester);
            $insert_student->bindparam(":education_level",$education_level);
            $insert_student->bindparam(":year_int",$year_int);
            $insert_student->bindparam(":year_out",$year_out);
            $insert_student->bindparam(":outstanding_work",$outstanding_work);
            $insert_student->execute();
      }
      catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
      }

      $company = $_POST["company"];
      $position = $_POST["position"];
      $c_address = $_POST["c_address"];
      $c_tel = $_POST["c_tel"];

      try{   
            $insert_student = $conn->prepare("UPDATE `workinformation` SET `company`=:company,`position`=:position,`address`=:c_address,`tel`=:c_tel WHERE `student_id` = :studentCode");
            $insert_student->bindparam(":studentCode",$studentCode);
            $insert_student->bindparam(":company",$company);
            $insert_student->bindparam(":position",$position);
            $insert_student->bindparam(":c_address",$c_address);
            $insert_student->bindparam(":c_tel",$c_tel);
            $insert_student->execute();
      }
      catch(PDOException $error){
            echo $sql . "<br>" . $error->getMessage();
      }
    

      header("Location: index.php");


?>
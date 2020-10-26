<?php
    include("connect.php");
      // print_r($_POST);
      // print_r($_FILES);
      $p_card = $_POST["p_card"];
      $studentCode = $_POST["studentCode"];

      $prefix = $_POST["prefix"];
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $name =  $prefix." ".$fname." ".$lname;

      $gender = $_POST["gender"];
      $birthday = $_POST["birthday"];

      $p_number = $_POST["p_number"];
      $p_road = $_POST["p_road"];
      $p_district = $_POST["p_district"];
      $p_amphoe = $_POST["p_amphoe"];
      $p_province = $_POST["p_province"];
      $p_zipcode = $_POST["p_zipcode"];
      $p_address = $p_number." ".$p_road." ".$p_district." ".$p_amphoe." ".$p_province." ".$p_zipcode;

      $p_tel = $_POST["p_tel"];
      $email = $_POST["email"];
      $facebook = $_POST["facebook"];
      $password = $_POST["password"]

      $imgName = $_FILES["img"]["name"];
      $temName = $_FILES["img"]["tmp_name"];

      try{   
            if (is_uploaded_file($temName)) {
                  $url = "img/upload/";
                  $destination = $url.$imgName;
                  move_uploaded_file($temName,$destination);
                  $img = $imgName;
              }
             else { $img = 'noImage';}  //ถ้าไม่มีรูปภาพจะให้ใส่คำว่า 'noImage'

            $insert = $conn->prepare("INSERT INTO `personal`(`card_id`, `student_id`, `name`, `gender`, `birthday`, `address`, `tel`, `email`, `facebook`, `img`) VALUES 
            (:p_card,:studentCode,:p_name,:gender,:birthday,:p_address,:p_tel,:email,:facebook,:img)");
            $insert->bindparam(":p_card",$p_card);
            $insert->bindparam(":studentCode",$studentCode);
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

      $studentCode = $_POST["studentCode"];
      $group = $_POST["group"];
      $branch = $_POST["branch"];
      $faculty = $_POST["faculty"];
      $semester = $_POST["semester"];
      $education_level = $_POST["education_level"];
      $year_int = $_POST["year_int"];
      $year_out = $_POST["year_out"];
      $outstanding_work = $_POST["outstanding_work"];

      try{   
            $insert_student = $conn->prepare("INSERT INTO `alumni`(`student_id`, `group`, `branch`, `faculty`, `semester`, `education_level`, `year_int`, `year_out`, `outstanding_work`) VALUES 
            (:studentCode,:group,:branch,:faculty,:semester,:education_level,:year_int,:year_out,:outstanding_work)");
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

      $work_id = "";
      $company = $_POST["company"];
      $position = $_POST["position"];

      $c_number = $_POST["c_number"];
      $c_road = $_POST["c_road"];
      $c_district = $_POST["c_district"];
      $c_amphoe = $_POST["c_amphoe"];
      $c_province = $_POST["c_province"];
      $c_zipcode = $_POST["c_zipcode"];
      $c_address = $c_number." ".$c_road." ".$c_district." ".$c_amphoe." ".$c_province." ".$c_zipcode;

      $c_tel = $_POST["c_tel"];

      try{   
            $insert_student = $conn->prepare("INSERT INTO `workinformation`(`work_id`, `student_id`, `company`, `position`, `address`, `tel`) VALUES (:work_id,:studentCode,:company,:position,:c_address,:c_tel)");
            $insert_student->bindparam(":work_id",$work_id);
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
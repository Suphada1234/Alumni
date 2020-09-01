<?php
    include("connect.php");
    //   print_r($_POST);
    //   print_r($_FILES);
    $id = $_POST["id"];

    $showPersonal = $conn->prepare("SELECT * FROM `personal` WHERE `student_id` = '$id' ");
	$showPersonal->execute();
    $resultPersonal = $showPersonal->fetchAll();

    $showAlumni = $conn->prepare("SELECT * FROM `alumni` WHERE `student_id` = '$id' ");
	$showAlumni->execute();
    $resultAlumni = $showAlumni->fetchAll();

    $showWorkinformation = $conn->prepare("SELECT * FROM `workinformation` WHERE `student_id` = '$id' ");
	$showWorkinformation->execute();
    $resultWorkinformation = $showWorkinformation->fetchAll();

      echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';
      foreach ($resultPersonal as $rowPersonal) {  
            echo'<thead>
                    <tr>
                        <th colspan="3" style="background-color:#e7ab3c;color:#fff;" >ข้อมูลส่วนตัว</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:130px;">ชื่อ - นามสกุล</td>
                        <td>';echo $rowPersonal['name']; echo' </td>
                        <td rowspan="3"  style="width:130px;" >';
                        if($rowPersonal['img'] != "noImage"){
                           echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                        src="img/upload/'; echo $rowPersonal['img']; echo ' ">';
                        }
                        else{
                            echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                            src="img/user.png">';
                        }
                         echo' </td>
                    </tr>
                    <tr>
                        <td>เพศ</td>
                        <td>';echo $rowPersonal['gender']; echo' </td>
                    </tr>
                    <tr>
                        <td>วันเดือนปีเกิด</td>
                        <td>';echo $rowPersonal['birthday']; echo' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td colspan="2">';echo $rowPersonal['address']; echo' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์</td>
                        <td colspan="2">';echo $rowPersonal['tel']; echo' </td>

                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td colspan="2">';echo $rowPersonal['facebook']; echo' </td>

                    </tr>
                    <tr>
                        <td>Email</td>
                        <td colspan="2">';echo $rowPersonal['email']; echo' </td>
                    </tr>

                </tbody>';
             };
             echo'</table>';
             echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';
                foreach ($resultAlumni as $rowAlumni) {  
                echo'
                <thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการศึกษา</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">รหัสนักศึกษา</td>
                        <td>';echo $rowAlumni['student_id']; echo' </td>
                    </tr>
                    <tr>
                        <td>หมู่เรียน</td>
                        <td>';echo $rowAlumni['group']; echo' </td>
                    </tr>
                    <tr>
                        <td>สาขา</td>
                        <td>';echo $rowAlumni['branch']; echo' </td>
                    </tr>
                    <tr>
                        <td>คณะ</td>
                        <td>';echo $rowAlumni['faculty']; echo' </td>
                    </tr>
                    <tr>
                        <td>ภาคการศึกษา</td>
                        <td>';echo $rowAlumni['semester']; echo' </td>
                    </tr>
                    <tr>
                        <td>ระดับการศึกษา</td>
                        <td>';echo $rowAlumni['education_level']; echo' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่เข้า</td>
                        <td>';echo $rowAlumni['year_int']; echo' </td>
                    </tr>
                    <tr>
                        <td>ปีการศึกษาที่จบ</td>
                        <td>';echo $rowAlumni['year_out']; echo' </td>
                    </tr>
                    <tr>
                        <td>
                        ผลงานที่โดดเด่น</td>
                        <td>';echo $rowAlumni['outstanding_work']; echo' </td>
                    </tr>
                </tbody>';
                };
                echo'</table>';
                echo '<table id="table_details" class="table table-striped table-bordered" style="width:100%">';
                foreach ($resultWorkinformation as $rowWorkinformation) {  
                echo'
                <thead>
                    <tr>
                        <th colspan="2"  style="background-color:#e7ab3c;color:#fff;"  >ข้อมูลการทำงาน</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width:160px;">ชื่อบริษัท</td>
                        <td>';echo $rowWorkinformation['company']; echo' </td>
                    </tr>
                    <tr>
                        <td>ตำแหน่งงาน</td>
                        <td>';echo $rowWorkinformation['position']; echo' </td>
                    </tr>
                    <tr>
                        <td>ที่อยู่</td>
                        <td>';echo $rowWorkinformation['address']; echo' </td>
                    </tr>
                    <tr>
                        <td>เบอร์โทรศัพท์บริษัท</td>
                        <td>';echo $rowWorkinformation['tel']; echo' </td>
                    </tr>
                </tbody>';
                };

            echo'</table>';
       


?>
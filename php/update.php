<?php

require "conn.php";


if (isset($_POST["submit"])) {
    $id = $_POST['submit'];
    $picName = $_FILES["file_upload"]["name"];

    $sql = "SELECT pic FROM members where id='$id'";
    $res = $conn->query($sql);
    $data = $res->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $value) {
        $namePic = $value['pic'];
    }



    if ($picName!=="") {

       
     
        $dir = "C:/xampp/htdocs/Test/upload/";
        @unlink( $dir.$namePic);

        $fileImg = $dir . basename($_FILES["file_upload"]["name"]);
        move_uploaded_file($_FILES["file_upload"]["tmp_name"], $fileImg);
       

    } else {
        
        $picName = $namePic;
    }

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Nname = $_POST['Nname'];
    $Ename = $_POST['Email'];
    $Status = $_POST['Status'];
    $Gender = $_POST['Gender'];
    $Height = $_POST['Height'];
    $Weight = $_POST['Weight'];
    $Nationality = $_POST['Nationality'];
    $Date  = $_POST['Date'];
    $Phone = $_POST['Phone'];
    $Hphone = $_POST['Hphone'];
    $address = $_POST['address'];
    $districtsID = $_POST['districtsID'];
    $amphuresID  = $_POST['amphuresID'];
    $provincesID = $_POST['provincesID'];
    $zip_code = $_POST['Zipcode'];
   
    $datetime = date("Y-m-d H:i:s");

 
    if (!isset($_POST['militaryStatus'])) {
        $statusM = '-';
    } else {
        $statusM = $_POST['militaryStatus'];
    }
    $params = array(
        $Fname,    
        $Lname , 
        $Nname,
        $Ename ,   
        $Status ,    
        $statusM,  
        $Gender,  
        $Height,
        $Weight,
        $Nationality, 
        $Date,      
        $Phone ,    
        $Hphone,    
        $address,  
        $districtsID,
        $amphuresID ,
        $provincesID,
        $zip_code,
        $picName,
        $datetime,
        $id 
    );

$sql = "UPDATE `members` SET `firstname`=?,
                             `lastname`= ?,
                             `nickname` =?,
                             `email`=?,
                             `status`=?,
                             `militarystatus`=?,
                             `gender`=?,
                             `hight`=?,
                             `weight`=?,
                             `nationality`=?,
                             `birthdate`=?,
                             `telephone_number`=?,
                             `telephone_home`=?,
                             `house_village`=?,
                             `sub_district`=?,
                             `district`=?,
                             `province`=?,
                             `zipcode`=?,
                             `pic`=?,
                             `updated_at`=?

                             WHERE id=?"; 
               
    $stmt= $conn->prepare($sql);
    $stmt->execute($params);

     echo '<script>
        setTimeout(function() {

          alert("อัพเดทข้อมูลสำเร็จ");
          window.location = "../resume.php"; 

        }, 1000);
        </script>';

}



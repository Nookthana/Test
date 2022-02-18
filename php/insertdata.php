<?php

require "conn.php";


if(isset($_POST["submit"])){

        $dir = "C:/xampp/htdocs/Test/upload/";
        $fileImg = $dir . basename($_FILES["file_upload"]["name"]);
        move_uploaded_file($_FILES["file_upload"]["tmp_name"], $fileImg);

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
        $upload = $_FILES["file_upload"]["name"];
        $datetime = date("Y-m-d H:i:s");

    

     if(!isset($_POST['militaryStatus'])){
        $statusM = '-';
    }else{
        $statusM = $_POST['militaryStatus'];
    }
        
         $sql="INSERT INTO `members`( `firstname`, 
                                      `lastname`,
                                      `nickname`,
                                      `email`, 
                                      `status`, 
                                      `militarystatus`,
                                      `gender`, 
                                      `hight`, 
                                      `weight`, 
                                      `nationality`,
                                      `birthdate`,
                                      `telephone_number`, 
                                      `telephone_home`,
                                      `house_village`, 
                                      `sub_district`,
                                      `district`,
                                      `province`,
                                      `zipcode`, 
                                      `created_at`,
                                      `pic`, 
                                      `updated_at`)

            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";




        $params = array(
            $Fname,    
            $Lname , 
            $Nname,
            $Ename ,   
            $Status ,    
            $statusM,  
            $Gender,  
            $Height ,
            $Weight ,
            $Nationality  , 
            $Date ,      
            $Phone  ,    
            $Hphone ,    
            $address  ,  
            $districtsID,
            $amphuresID,
            $provincesID,
            $zip_code,
            $datetime ,
            $upload, 
            $datetime ,  
        );
    
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        echo '<script>
        setTimeout(function() {

          alert("บันทึกข้อมูลสำเร็จ");
          window.location = "../index.php"; 

        }, 1000);
        </script>';


}



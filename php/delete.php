<?php
require 'conn.php';

if(isset($_POST['id'])){
    $id=$_POST['id'];

        $sql = " DELETE FROM `members`  WHERE id=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$id]);

        echo '<script>
        setTimeout(function() {

          alert("ลบข้อมูลสำเร็จ");
          window.location = "../resume.php"; 

        }, 1000);
        </script>';
}
?>
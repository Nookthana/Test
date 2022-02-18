<?php
require 'php/conn.php';


if(isset($_POST['id'])){
    $id=$_POST['id'];

$sql="SELECT * FROM members where id='$id'";
$res=$conn->query($sql);
$data=$res->fetchAll(PDO::FETCH_ASSOC);



}
require "include/header.php";


?>

<?php foreach($data as $key => $row)

{?>



<div class="d-flex justify-content-center">
  <img src="./upload/<?php print_r($row['pic']);?>"  style="width:200px">
  </div><br><br> 


  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">ชื่อ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['firstname']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">ชื่อเล่น</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['nickname']); ?>">
  </div>  
  </div>

  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">อีเมลล์</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['email']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">สถานะ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['status']); ?>">
  </div>  
  </div>

 <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">สถานะทางทหาร</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['militarystatus']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">เพศ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['gender']); ?>">
  </div>  
  </div>

  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">ส่วนสูง</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['hight']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">น้ำหนัก</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['weight']); ?>">
  </div>  
  </div>

  
  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">สัญชาติ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['nationality']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">วันเกิด</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['birthdate']); ?>">
  </div>  
  </div>

  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">โทรศัพท์บ้าน</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['telephone_home']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">โทรศัพท์มือถือ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['telephone_number']); ?>">
  </div>  
  </div>

  
  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">ที่อยู่ปัจจุบัน</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['house_village']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">ตำบล</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['sub_district']); ?>">
  </div>  
  </div>

  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">อำเภอ</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['district']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">จังหวัด</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['province']); ?>">
  </div>  
  </div>

  <div class="mb-3 row d-flex justify-content-center">
    <label class="col-sm-1 col-form-label">รหัสไปรษณีย์</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r($row['district']); ?>">
    </div>
    <label class="col-sm-1 col-form-label">อัพเดทล่าสุด</label>
    <div class="col-sm-2">
      <input type="text" readonly class="form-control-plaintext"  value="<?php print_r(date('d-m-Y',strtotime($data[$key]['updated_at']))); ?>">
  </div>  
  </div>

   
<?php } 

?>
<div class="d-flex justify-content-center">
<a href="resume.php"><button class="btn btn-success " >ย้อนกลับ</button></a>
</div>
<?php require "include/footer.php"?>
<?php
require 'php/conn.php';


if(isset($_POST['id'])){
    $id=$_POST['id'];

    //print_r($id);

$sql="SELECT * FROM members where id='$id'";
$res=$conn->query($sql);
$data=$res->fetchAll(PDO::FETCH_ASSOC);

$rowID = count($data);
//print_r($data);
$query = $conn->prepare("SELECT * FROM provinces");
$query->execute();

}

?>

<?php foreach($data as $key => $row)

{?>

<?php require "include/header.php"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="d-flex justify-content-center">
  <img src="./upload/<?php print_r($row['pic']);?>"  style="width:200px">
  </div><br><br> 


<form class="row g-2" id ="form-regis" method="post" action="php/update.php"   enctype="multipart/form-data">


<div class="row">
  <div class="col-sm">



    <label class="form-label">ชื่อ</label>
    <input type="text" class="form-control" name="Fname" id="Fname" value="<?php print_r($row['firstname']);?>" >
  </div>
  <div class="col-sm">
    <label class="form-label">สกุล</label>
    <input type="text" class="form-control" name="Lname" id="Lname" value="<?php print_r($row['lastname']);?>"  >
  </div>

  <div class="col-sm">
          <label class="form-label">ชื่อเล่น</label>
          <input type="text" class="form-control" name="Nname" id="Lname" value="<?php print_r($row['nickname']); ?>">
        </div>
</div>
<div class="row">
  <div class="col-sm">
    <label class="form-label">วันเกิด : วัน/เดือน/ปี</label>
    <input type="date" class="form-control" name="Date" id="Date" value="<?php print_r($row['birthdate']);?>" >
  </div>

  <div class="col-sm">
    <label class="form-label">เพศ</label>

    <select class="form-select" name="Gender" id="Gender" onchange="GenderCheck(this);" required>
      <option selected disabled value=""><?php print_r($row['gender']);?></option>
      <option value="ชาย">ชาย</option>
      <option value="หญิง">หญิง</option>
    </select>
  </div>

  <div id="Show" style="display: none;">
    <div class="row">
      <div class="col-sm">
        <label class="form-label">สถานภาพทางทหาร</label>
        <select class="form-select" name="militaryStatus" id="Status" >
          <option selected disabled value="">โปรดระบุ</option>
          <option value="ผ่านการเกณฑ์ทหาร">ผ่านการเกณฑ์ทหาร</option>
          <option value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
          <option value="ยังไม่ผ่านการเกณฑ์ทหาร">ยังไม่ผ่านการเกณฑ์ทหาร</option>
        </select>

      </div>
    </div>
  </div>


  <div class="col-sm">
    <label class="form-label">สถานภาพ</label>
    <select class="form-select" name="Status" id="Status" required>
      <option selected disabled value=""><?php print_r($row['status']);?></option>
      <option value="โสด">โสด</option>
      <option value="สมรส">สมรส</option>
      <option value="หย่า">หย่า</option>
      <option value="หม้าย">หม้าย</option>
    </select>
  </div>

  <div class="row">
    <div class="col-sm">
      <label class="form-label">ส่วนสูง</label>
      <input type="number" class="form-control" name="Height" id="Height"  value="<?php print_r($row['hight']);?>" required>
    </div>
    <div class="col-sm">
      <label class="form-label">น้ำหนัก</label>
      <input type="number" class="form-control" name="Weight" id="Weight" value="<?php print_r($row['weight']);?>" required>
    </div>
    <div class="col-sm">
      <label class="form-label">สัญชาติ</label>
      <input type="text" class="form-control" name="Nationality"  id="Nationality" value="<?php print_r($row['nationality']);?>" required>
    </div>
  </div>


  <div class="row">
    <div class="col-sm">
      <label class="form-label">ที่อยู่ปัจจุบัน</label>
      <textarea class="form-control" id="address" name ="address" rows="3" required><?php print_r($row['house_village']);?></textarea>
    </div>

    <div class="col-sm">
            <label class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="provincesID"  id="provinces" value="<?php print_r($row['province']);?>" required>
          </div>

          <div class="col-sm">
            <label class="form-label">อำเภอ</label>
            <input type="text" class="form-control" name="amphuresID"  id="amphures" value="<?php print_r($row['district']);?>" required>
          </div>

          <div class="col-sm">
            <label class="form-label">ตำบล</label>
            <input type="text" class="form-control" name="districtsID"  id="districts" value="<?php print_r($row['sub_district']);?>" required>
          </div>
          </div> 


  <div class="row">
    <div class="col-sm">
      <label class="form-label">รหัสไปรษณีย์</label>
      <input type="text" class="form-control" name="Zipcode" id="Zipcode" value="<?php print_r($row['zipcode']);?>" required>
    </div>
    <div class="col-sm">
      <label class="form-label">โทรศัพท์บ้าน</label>
      <input type="text" class="form-control" name="Hphone" id="Hphone" value="<?php print_r($row['telephone_home']);?>" required>
    </div>
    <div class="col-sm">
      <label class="form-label">โทรศัพท์มือถือ</label>
      <input type="number" class="form-control" name="Phone" id="Phone" value="<?php print_r($row['telephone_number']);?>" required>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <label class="form-label">อัพโหลดรูปภาพ</label>
      <input type="file" name="file_upload" id="file_upload"    class="form-control" accept="image/jpeg, image/png, image/jpg">

    </div>

    <div class="col-sm">
        <label class="form-label">อีเมลล์</label>
          <input type="email" class="form-control" name="Email" id="Email" value="<?php print_r($row['email']);?>">
        </div>

  </div>

 
</form>
</div>
  <br>
  <div class="d-flex justify-content-center">
  <button class="btn btn-primary" form="form-regis" name="submit" value="<?php print_r($id);?>" type="submit">อัพเดทข้อมูล</button>
  &nbsp;&nbsp;
  <a href="resume.php"><button class="btn btn-success" >ย้อนกลับ</button></a>
  </div>
<?php } ?>

<?php require "include/footer.php" ?>
<script>

  function GenderCheck(gender) {
    if (gender.value == "ชาย") {
      document.getElementById("Show").style.display = "block";

    }else {
      document.getElementById("Show").style.display = "none";
    }
  }

</script>

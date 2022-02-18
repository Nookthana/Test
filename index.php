<?php
require 'php/conn.php';

$query = $conn->prepare("SELECT * FROM provinces");
$query->execute();

require './include/header.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <h4>กรอกประวัติส่วนตัว </h4><br><br>
    <form class="row g-2" id ="form-regis" method="post" action="php/insertdata.php"   enctype="multipart/form-data">


      <div class="row">
        <div class="col-sm">
          <label class="form-label">ชื่อ</label>
          <input type="text" class="form-control" name="Fname" id="Fname" required>
        </div>
        <div class="col-sm">
          <label class="form-label">สกุล</label>
          <input type="text" class="form-control" name="Lname" id="Lname" required>
        </div>
        <div class="col-sm">
          <label class="form-label">ชื่อเล่น</label>
          <input type="text" class="form-control" name="Nname" id="Nname" required>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <label class="form-label">วันเกิด : วัน/เดือน/ปี</label>
          <input type="date" class="form-control" name="Date" id="Date" required>
        </div>

        <div class="col-sm">
          <label class="form-label">เพศ</label>

          <select class="form-select" name="Gender" id="Gender" onchange="GenderCheck(this);" required>
            <option selected disabled value="">โปรดระบุ</option>
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
            <option selected disabled value="">โปรดระบุ</option>
            <option value="โสด">โสด</option>
            <option value="สมรส">สมรส</option>
            <option value="หย่า">หย่า</option>
            <option value="หม้าย">หม้าย</option>
          </select>
        </div>

        <div class="row">
          <div class="col-sm">
            <label class="form-label">ส่วนสูง</label>
            <input type="number" class="form-control" name="Height" id="Height" required>
          </div>
          <div class="col-sm">
            <label class="form-label">น้ำหนัก</label>
            <input type="number" class="form-control" name="Weight" id="Weight" required>
          </div>
          <div class="col-sm">
            <label class="form-label">สัญชาติ</label>
            <input type="text" class="form-control" name="Nationality"  id="Nationality" required>
          </div>
        </div>


        <div class="row">
          <div class="col-sm">
            <label class="form-label">ที่อยู่ปัจจุบัน</label>
            <textarea class="form-control" id="address" name ="address" rows="3" required></textarea>
          </div>

          <div class="col-sm">
            <label class="form-label">จังหวัด</label>
            <input type="text" class="form-control" name="provincesID"  id="provinces" required>
          </div>

          <div class="col-sm">
            <label class="form-label">อำเภอ</label>
            <input type="text" class="form-control" name="amphuresID"  id="amphures" required>
          </div>

          <div class="col-sm">
            <label class="form-label">ตำบล</label>
            <input type="text" class="form-control" name="districtsID"  id="districts" required>
          </div>

        </div>


        <div class="row">
          <div class="col-sm">
            <label class="form-label">รหัสไปรษณีย์</label>
            <input type="text" class="form-control" name="Zipcode" id="Zipcode" required>
          </div>
          <div class="col-sm">
            <label class="form-label">โทรศัพท์บ้าน</label>
            <input type="text" class="form-control" name="Hphone" id="Hphone" required>
          </div>
          <div class="col-sm">
            <label class="form-label">โทรศัพท์มือถือ</label>
            <input type="number" class="form-control" name="Phone" id="Phone" required>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <label class="form-label">อัพโหลดรูปภาพ</label>
            <input type="file" name="file_upload" id="file_upload" required   class="form-control" accept="image/jpeg, image/png, image/jpg">

          </div>

          <div class="col-sm">
        <label class="form-label">อีเมลล์</label>
          <input type="email" class="form-control" name="Email" id="Email" required>
        </div>
        </div>

       
    </form>
    
  </div>
  <br><br>
  <button class="btn btn-primary" form="form-regis" name="submit" type="submit">บันทึกข้อมูล</button>

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



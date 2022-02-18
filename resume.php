<?php
require 'php/conn.php';

$sql="SELECT * FROM members";
$res=$conn->query($sql);
$data=$res->fetchAll(PDO::FETCH_ASSOC);


?>


<?php require "include/header.php"?>
<h4>รายการประวัติ</h4><br><br>
<div class="table-responsive">
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ไอดี</th>
      <th scope="col">รูป</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">สกุล</th>
      <th scope="col">วันที่สร้าง</th>
      <th scope="col">วันที่อัพเดท</th>
      <th scope="col">ดูประวัติ</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach($data as $key => $row)

      {?>
 <form method="post" >
    <tr>
    <td><?php print_r($key);?></td>
    <td><?php print_r($row['id']);?></td>
    <td><img src="./upload/<?php print_r($row['pic']);?>" style="width: 50px;"></td>
    <td><?php print_r($row['firstname']);?></td>
    <td><?php print_r($row['lastname']);?></td>
    <td><?php print_r(date('d-m-Y',strtotime($data[$key]['created_at']))); ?></td>
    <td><?php print_r(date('d-m-Y',strtotime($data[$key]['updated_at']))); ?></td>
    <td><button type="submit" name="id"  value="<?php print_r($row['id']);?>" formaction="detail_resume.php"  class="btn btn-primary" ><i class="fa-solid fa-eye"></i></button></td>
    <td><button type="submit" name="id"  value="<?php print_r($row['id']);?>"formaction="edit_resume.php" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i></button></td>
    <td><button type="submit"  name="id"  value="<?php print_r($row['id']);?>" formaction="php/delete.php" class="btn btn-danger" ><i class="fa-solid fa-trash-can"></i></button></td>
  
    </tr>
    </form>
 <?php } ?>
  </tbody>
</table>
</div>


<?php require "include/footer.php" ?>
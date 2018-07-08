<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $nilai=$_POST['nilai'];
 $q=mysqli_query($con,"INSERT INTO `course_details` (`nama`,`jurusan`,`nilai`) VALUES ('$nama','$jurusan','$nilai')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>

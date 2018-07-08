<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $nilai=$_POST['nilai'];
 $q=mysqli_query($con,"UPDATE `course_details` SET `nama`='$nama',`jurusan`='$jurusan',`nilai`='$nilai' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>

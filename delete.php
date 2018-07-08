<?php
 include "db.php";
 if(isset($_GET['nim']))
 {
 $nim=$_GET['nim'];
 $q=mysqli_query($con,"delete from `course_details` where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>

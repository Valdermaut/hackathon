<?php
session_start();
include'database.php';
include'nav_com.php';
if (isset($_POST['submit']))
{
  $_SESSION=$_POST['cname'];
  $iname=$_POST['iname'];
  $idetail=$_POST['idetail'];
  $sname=$_POST['sname'];
  $lname=$_POST['location'];
  $stname=$_POST['stdur'];
  $ename=$_POST['endur'];
  $rname=$_POST['req'];
  $appdate=$_POST['appdate'];
    $query=mysql_query("SELECT * FROM hackathon WHERE  cname='$cname' ");
    $n=mysql_num_rows($query);
      $q=mysql_query("INSERT INTO `hackathon` (cname,iname,idetail,sname,location,stdur,endur,req,appdate) VALUES('$cname','$iname','$idetail','$sname','$location','$stdur','$endur','$req','$appdate')");
     if($q)
     {
      echo "success";
     }
     else
     {
       echo "fail";
     }
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div align="center">
<h1>EMPLOYER</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p> Company name</p>
<input type="text" name="cname" placeholder="enter your company" required>
<p>Interenship Name</p>
<input type="text" name="iname" placeholder="Interenship name" required>
<p>Interenship details</p>
<textarea name="idetail" rows="5" cols="40" placeholder="Interenship details" required></textarea>
<p>Stipend</p>
<input type="text" name="sname" placeholder="enter your stipend" required>
<p>Location</p>
Full time<input type="radio" name="location" placeholder="enter your location" value="ftime" required>
From home<input type="radio" name="location" placeholder="enter your location" value="fhome" required>
<p>Duration</p>
<input type="date" name="stdur" placeholder="starting date" required>To
<input type="date" name="endur" placeholder="closing date" required>
<p>Requirement</p>
<textarea name="req" rows="5" cols="40" placeholder="Enter the requirement that you want from employee" required></textarea><br><br>
<input type="submit" name="submit" value="Apply Now" required>
</form>
</div>
</body>
</html>

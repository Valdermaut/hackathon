<?php
session_start();
include'database.php';
include'nav.php';
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $cname=$_POST['cname'];
  $cdetail=$_POST['cdetail'];
  $phone=$_POST['phone'];
  $city=$_POST['city'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  if ($password==$cpassword)
{
    $query=mysql_query("SELECT * FROM `hackathon2` WHERE cname='$cname' ");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT INTO `hackathon2` (email,cname,cdetail,phone,city,password) VALUES('$email','$cname','$cdetail','$phone','$city','$password')");
     if($q)
     {
      echo "success";
     }
     else
     {
       echo "fail";
     }
    }
    else
    {
      echo "email already exist!";
    }
}
  else {
        echo "password doesn't match!";
      }
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div align="center">
<h1>Enter Company Details</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>Email</p>
<input type="email" name="email" placeholder="Enter your email address" required>
<p>Company name</p>
<input type="text" name="cname" placeholder="Enter your company name">
<p>Company details</p>
<textarea name="cdetail" rows="5" cols="40" placeholder="Company details" required></textarea>
<p>password</p>
 <input type="password" name="password" placeholder="Enter Password">
<p>Confirm Password </p>
<input type="password" name="cpassword" placeholder="Enter Password"><br><br>
City
<select name="city">
    <option value="Mumbai">Mumbai</option>
    <option value="Bangluru">Bangluru</option>
    <option value="Chennai">Chennai</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Pune">Pune</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="New delhi">New delhi</option>
    <option value="Kochi">Kochi</option>
    <option value="Allahabad">Allahabad</option>
    </select><br><br>
Phone no
<input type="text" name="phone" placeholder="Enter your phone no" required><br><br>
<input type="submit" name="submit" value="Apply Now" required>
</form>
</div>
</body>
</html>

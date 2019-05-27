<?php
session_start();
include'database.php';
include'nav.php';
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
 $query = mysql_query("SELECT * from hackathon2 where email = '$email' ");
$query1 = mysql_query("SELECT * from hackathon3 where email = '$email' ");
$n = mysql_num_rows($query);
$m = mysql_num_rows($query1);
if ($n == 1)
{
  $row = mysql_fetch_assoc($query);

    if($password ==$row['password'])
    {echo"success";
     header("location:emp_sub.php");
    }
else {echo"Failure";}
}
else if($m==1)
{
  $row = mysql_fetch_assoc($query);

    if($password ==$row['password'])
    {echo"success";
     header("location:internship_display.php");
    }
    else {echo"Failure";}
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>LOGIN TO INTERSHALA</head><br><br>
  <form class="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
     <div class="form-group">
       <label for="exampleInputEmail1">EMAIL</label>
       <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
       <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
     </div>
     <div class="form-group">
       <label for="exampleInputPassword1">PASSWORD</label>
       <input  name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
     </div>

     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
   </form>

</html>

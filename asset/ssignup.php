<?php
session_start();
include'database.php';
if (isset($_POST['submit']))
{

  $email=$_POST['email'];
  $name=$_POST['name'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  if ($password=$cpassword) {
    $query=mysql_query("SELECT email from items where email='$email' ");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into items(email,password,name) VALUES('$email','$password','$name')");
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
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
  <div class="container">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="form-row">
   <div class="form-group">
        <label for="inputFirstName4"> NAME</label>
      <input type="text" class="form-control" placeholder="First name">
    </div>

     <div class="form-group">
        <label for="inputEmail4">EMAIL</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
     <div class="form-group">
                <label for="inpuPnumber4">PHONE NUMBER</label>
                <input type="Pnumber" class="form-control" id="inpuPnumber4" placeholder="Phone number">
               </div>
       <div class="form-group">
        <label for="inputPassword4">PASSWORD</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
     <div class="form-group">
      <label for="inputCpassword4"> CONFIRM PASSWORD</label>
      <input type="Cpassword" class="form-control" id="inputCpassword4 " placeholder="Confirm Password">
    </div>
     <div class="form-group">
      <label for="inputCity">CITY</label>
      <select id="inputCity" class="form-control">
        <option selected>Choose City...</option>
        <option>...</option>
      </select>
    </div>
     <div class="form-group">
      <label for="inputCity">LOCATION</label>
      <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">FULL TIME INTERN</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">FROM HOME</label>
  </div>
 <div class="form-group">
    <label for="inputSkill1"> SKILL 1</label>
    <select id="inputSkill1" class="form-control">
      <option selected>Choose SKILL...</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>

    </select>
  </div>
 <div class="form-group">
    <label for="inputSkill2"> SKILL 2</label>
    <select id="inputSkill2" class="form-control">
      <option selected>Choose SKILL...</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>

    </select>
  </div>
 <div class="form-group">
    <label for="inputSkill3"> SKILL 3</label>
    <select id="inputSkill3" class="form-control">
      <option selected>Choose SKILL...</option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
      <option></option>
</select>
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
</html>

<?php  ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <center><h1>Student Profile</h1></center>
      <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name ?></h5>
    <p class="card-text"><?php echo $email."<br>".$phone."<br>".$city ?></p>
    <a href="#" class="btn btn-primary">Edit Profile</a>
  </div>
</div>
<center>
<hr>
<div class="edu">
  <h2>EDUCATION</h2>
  <h6><b>College: <?php echo $clgname; ?></b> <br>
      Stream: <?php echo $stream; ?> <br>
      Year Of Passing: <?php echo $clgyop; ?> <br><br>
      <b>School: <?php echo $sclname; ?></b><br>
      Year Of Completion: <?php echo $sclyop ?> <br>
      Percentage: <?php echo $sclper ?><br>
      Board: <?php echo $sclboard ?>
  </h6>
  <hr>
  <h2>PROJECTS</h2>
  <h6><b>Project Name</b><br>
      <a href="#">Project Link</a>
  </h6>
  <hr>
  <h2>SKILLS</h2>
  <h6><b>Skill Name </b> : Experience
  </h6>
  <hr>
</div>
  </body>
</html>

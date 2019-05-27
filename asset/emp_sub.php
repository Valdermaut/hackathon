<?php
include'database.php';
include'nav_com.php';
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Students Submission</title>
  </head>
  <body>
    <center><h1>Student Submission To Your Company.</h1></center>
    <div class="S_Sub">
      <table class="table" cellspacing="20">
        <tr>
          <th>Name</th>
          <th>Internship</th>
          <th>Skills</th>
          <th>Location</th>
          <th>Phone</th>
          <th>Email</th>
         </tr>
        <?php
        $query=mysql_query("SELECT * from where cname='$cname'");
          $n=mysql_num_rows($query);
          if($n>0)
          {
                    while($row = mysql_fetch_assoc($query))
            {
              $id=$row['id'];
              $pic=$row['pic'];
          ?>
              <tr class="tr" >
                <td ><?php echo $row['name']; ?></td>
                <td><?php echo $row['internship']?></td>
                <td><?php echo $row['skill1'].$row['skill2'].$row['skill3'];?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['email']; ?></td>
                </tr>
            <center><button type="button" class="btn btn-success">Accept</button>
                     <button type="button" class="btn btn-danger">Reject</button>
            </center>
          <?php  }
          }
         ?>
       </table>
    </div>

  </body>
</html>

<?php
  session_start();
  $id = $_SESSION["id"];
  $s_id = $_REQUEST['s_id'];

  require_once('config.php');
   
  if(!isset($_SESSION["id"])){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payroll</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php include('nav.php') ?>
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">My Profile</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      </div>
    </div>
    <div class="container">
      <div class="col-md-3">
        <img class="img-responsive img-circle" src="images/person.jpg" alt="person" width="" height="">
      </div>
      <div class="col-md-8">

<?php

       $sql = "select * from pay_roll where id='$s_id'";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
     $fname = $row['fname'];
     $lname = $row['lname'];
     $email = $row['email'];
     $designation = $row['designation'];
     $department = $row['department'];
     
     $peraddress = $row['peraddress'];
     $preaddress = $row['preaddress'];
     $birthday = $row['birthday'];
     $joining = $row['joining'];
     
      
    }


    ?>
        <table class="table table-responsive table-bordered">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Designation</th>
              <th>Department</th>
              <th>Permanent Address</th>
              <th>Present Address</th>
              <th>Date of Birth</th>
              <th>First Joining</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php echo "
              <td>$fname</td>
              <td>$lname</td>
              <td>$email</td>
              <td>$designation</td>
              <td>$department</td>
              <td>$peraddress</td>
              <td>$preaddress</td>
              <td>$birthday</td>
              <td>$joining</td>
              "; ?>
            </tr>
          </tbody>
        </table>
        <p><a class="btn btn-success btn-lg" href="#" role="button">Update</a></p>
      </div>
    </div>
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
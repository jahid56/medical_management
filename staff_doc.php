<?php 
  include('header_staff.php'); 
  session_start();
  if(!isset($_SESSION["id"]) || $_SESSION["status"] != 2){
    header("location: logout.php");
  } else {
      $id = $_SESSION["id"];
  }
?>

  
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Patients to see</h1>
        
      </div>
    </div>
    <div class="container">
      
      <div class="col-md-12">
       <table class="table table-responsive table-bordered">
          <thead>
            <tr>
              <th>Student's ID</th>
              <th>Name</th>         
              <th>Age</th>
              <th>Blood Group</th>
              <th>Weight (kg)</th>
              <th>Height (m)</th>
              <th>Symptoms</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

<?php

       $sql = "select * from patients order by status asc, id asc";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
     $id = $row['id'];
     $roll = $row['roll'];
     $name = $row['name'];
     $age = $row['age'];
     $blood_group = $row['blood_group'];
     
     $weight = $row['weight'];
     $height = $row['height'];
     $symptoms = $row['symptoms'];
     $status = $row['status'];
     if($status == 0){
      $status = "<b><font color='red'>Not Seen</font></b>";
     } else {
      $status = "<b><font color='green'>Seen</font></b>";
     }
     
     echo "<td><a href=\"staff_doc_patient.php?id=$id\"><b>$roll</b></a> </td>
              <td>$name</td>
              <td>$age</td>
              <td>$blood_group</td>
              <td>$weight</td>
              <td>$height</td>
              <td>$symptoms</td>
              <td>$status</td>
              </tr>
          "; 
            
      
    }


    ?>
       
          </tbody>
        </table>
        
      </div>
    </div>
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
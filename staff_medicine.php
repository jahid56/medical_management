<?php 
  include('header_staff.php'); 
  session_start();
  if(!isset($_SESSION["id"]) || $_SESSION["status"] != 3){
    header("location: logout.php");
  } else {
      $id = $_SESSION["id"];
  }
?>

  
    <div class="jumbotron">
      <div class="container">
        <h2 class="text-center">Patients waiting for medicine</h2>
        
      </div>
    </div>
    <div class="container">
      
      <div class="col-md-12">
      <div class="table-responsive">
       <table class="table table-bordered">
          <thead>
            <tr>
              <th>Student's ID</th>
              <th>Name</th>         
              <th>Age</th>
              <th>Blood Group</th>
              <th>Weight (kg)</th>
              <th>Height (m)</th>
              <th>Symptoms</th>
              <th>Analysis</th>
              <th>Prescription</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

<?php

       $sql = "select * from patients where status='1' order by status_medicine asc, id asc";
  
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
     $analysis = $row['analysis'];
     $rx = $row['rx'];
     $status = $row['status_medicine'];
     if($status == 0){
      $status = "<b><font color='red'><a href=\"staff_medicine_patient.php?id=$id\"><b>Pending</b></a></font></b>";
     } else {
      $status = "<b><font color='green'>Done</font></b>";
     }
     
     echo "<td><b>$roll</b> </td>
              <td>$name</td>
              <td>$age</td>
              <td>$blood_group</td>
              <td>$weight</td>
              <td>$height</td>
              <td><p>$symptoms</p></td>
              <td><p>$analysis</p></td>
              <td><p>$rx</p></td>
              <td>$status</td>
              </tr>
          "; 
            
      
    }


    ?>
       
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
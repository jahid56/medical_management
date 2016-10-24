<?php include('header.php') ?>

  
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Doctors List</h1>
        
      </div>
    </div>
    <div class="container">
      
      <div class="col-md-12">

       <table class="table table-responsive table-bordered">
          <thead>
            <tr>
              <th>Name</th>         
              <th>Email</th>
              <th>Phone</th>
              <th>Department</th>
              <th>Institute</th>
              <th>Degree</th>
              <th>Room #</th>
              <th>Duty Time</th>
              <th>Duty Day</th>
            </tr>
          </thead>
          <tbody>

<?php

       $sql = "select * from doctors";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
     $id = $row['id'];
     $name = $row['name'];
     $email = $row['email'];
     $phone = $row['phone'];
     $dept = $row['dept'];
     
     $institute = $row['institute'];
     $degree = $row['degree'];
     $room = $row['room'];
     $time = $row['time'];
     $day = $row['day'];
     

     echo "<td>$name</td>
              <td>$email</td>
              <td>$phone</td>
              <td>$dept</td>
              <td>$institute</td>
              <td>$degree</td>
              <td>$room</td>
              <td>$time</td>
              <td>$day</td>
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
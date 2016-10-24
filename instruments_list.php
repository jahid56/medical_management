<?php include('header.php') ?>

  
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">Instrument List</h1>
        
      </div>
    </div>
    <div class="container">
      
      <div class="col-md-12">

       <table class="table table-responsive table-bordered">
          <thead>
            <tr>
              <th>Name</th>         
              <th>Quantity</th>
              
            </tr>
          </thead>
          <tbody>

<?php

       $sql = "select * from instruments";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
     $id = $row['id'];
     $name = $row['name'];
     $quantity = $row['quantity'];
     
     
     echo "<td>$name</td>
              <td>$quantity</td>
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
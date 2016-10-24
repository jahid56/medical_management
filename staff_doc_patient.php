<?php

  include('header_staff.php');
  session_start();
  if(!isset($_SESSION["id"]) || $_SESSION["status"] != 2){
    header("location: logout.php");
  } else {
      $id = $_SESSION["id"];
  }

	$p_id = $_REQUEST['id'];

	if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'] ) )
	{

		$id 		= $_POST["id"];
		$analysis 		= $_POST["analysis"];
		$rx 		= $_POST["rx"];
		
		$sql="UPDATE patients SET analysis='$analysis', rx='$rx', status='1' WHERE id='$p_id'";

		$result = mysql_query($sql) or die(mysql_error());
		if($result){
   	echo "<script>
    alert(\"Record successfully added.\");
    window.location = \"staff_doc.php\";
</script>";
	} else {
		echo "<script>
    alert(\"Error occured !\");
    window.location = \"staff_doc.php\";
</script>";
	}
	}
?>
    	<div class="container">
	    	<div class="row">
		    	<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center">Treatment</h1>
					<hr>

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
            </tr>
          </thead>
          <tbody>

<?php

       $sql = "select * from patients where id='$p_id'";
  
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
     
     echo "<td><a href=\"staff_doc_patient.php?id=$id\"><b>$roll</b></a> </td>
              <td>$name</td>
              <td>$age</td>
              <td>$blood_group</td>
              <td>$weight</td>
              <td>$height</td>
              <td>$symptoms</td>
              </tr>
          "; 
            
      
    }


    ?>
       
          </tbody>
        </table>
        

					<hr>
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal" role="form">
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Analysis</label>
					    	<div class="col-sm-10">
					        	<textarea class="form-control" name="analysis" placeholder="Enter analysis of the patient" required></textarea>
					        	<input name="id" type="hidden" value="<?=$p_id?>">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Prescription</label>
					    	<div class="col-sm-10">
					        	<textarea class="form-control" name="rx" placeholder="Enter prescription for the patient" required></textarea>
					    	</div>
					    </div>
					    
					    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
					</form>
				</div>
			</div>
		</div>
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include indivnameual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
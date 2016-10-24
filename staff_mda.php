<?php 
  include('header_staff.php');
  session_start();
  if(!isset($_SESSION["id"]) || $_SESSION["status"] != 1){
    header("location: logout.php");
  } else {
      $id = $_SESSION["id"];
  }

	if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'] ) )
	{

		$id 		= $_POST["id"];
		$name 		= $_POST["name"];
		$age 		= $_POST["age"];
		$blood_group 		= $_POST["blood_group"];
		$phone= $_POST["phone"];
		$email = $_POST["email"];
		$symptoms = $_POST["symptoms"];
		$weight 		= $_POST["weight"];
		$height 		= $_POST["height"];
		$doctor_id 		= $_POST["doctor_id"];
		


		$sql="INSERT INTO
				patients( id, roll , 
							name , 
							age , 
							blood_group, 
							phone , 
							email , 
							symptoms , 
							weight , 
							height ,
							doctor_id ,
							dept, hall, analysis, rx, status
							)
				VALUES (	'',
							'$id', 
							'$name', 
							'$age',
							'$blood_group',
							'$phone', 
							'$email', 
							'$symptoms' ,
							'$weight' ,
							'$height' ,
							'$doctor_id' ,
							'','','','',''
							 )";

		$result = mysql_query($sql) or die(mysql_error());
		if($result){
   	echo "<script>
    alert(\"Record successfully added.\");
    window.location = \"staff_mda.php\";
</script>";
	} else {
		echo "<script>
    alert(\"Error occured !\");
</script>";
	}
	}
?>
    	<div class="container">
	    	<div class="row">
		    	<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center">Initial Patient Query</h1>
					<hr>
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal" role="form">
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Student ID</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="id" type="number" placeholder="Enter student id" required>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Name</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="name" type="text" placeholder="Enter Name" required>
					    	</div>
					    </div>

					    <div class="form-group">
					      <label class="col-sm-2 control-label">Age</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="age" type="number" placeholder="Enter age" required>
					    	</div>
					    </div>

					    <div class="form-group">
					      <label class="col-sm-2 control-label">Blood Group</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="blood_group" type="text" placeholder="Enter blood group" required>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Weight</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="weight" type="text" placeholder="Enter weight in KG" required>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Height</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="height" type="text" placeholder="Enter height in Metre" required>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Phone</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="phone" type="number" placeholder="Enter phone number" required>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Email</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="email" type="text" placeholder="Enter email address">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Appointed Doctor</label>
					    	<div class="col-sm-10">
					        	<select class="form-control" name="doctor_id">
					        	
					        	<option value="-1">Please Select</option>
					        		  <?php 
					        		$sql = "select * from doctors";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
     $id = $row['id'];
     $name = $row['name'];
     $dept = $row['dept'];

     echo "<option value=\"$id\">$name ($dept)</option> "; 
            
      
    }
					        	?>
					        	</select>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Symptoms</label>
					    	<div class="col-sm-10">
					        	<textarea class="form-control" name="symptoms" placeholder="Enter symptoms" required></textarea>
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
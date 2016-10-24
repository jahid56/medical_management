<?php

  session_start();
  $id = $_SESSION["id"];
    $s_id = $_REQUEST['s_id'];

  require_once('config.php');
   
  if(!isset($_SESSION["id"])){
    header("location: index.php");
  }


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
     
     	$basic      = $row["basic"];
		$hrent      = $row["hrent"];
		$mallowance = $row["mallowance"];
		$dallowance = $row["dallowance"];
		$callowance = $row["callowance"];
		$tallowance = $row["tallowance"];
		$wallowance = $row["wallowance"];
		$profund    = $row["profund"];
		$arecovery  = $row["arecovery"];
		$clubsubs   = $row["clubsubs"];
		$catering   = $row["catering"];
		$loanded    = $row["loanded"];
		$mcharge    = $row["mcharge"];
		$bus        = $row["bus"];		
    
      
    }

	if( $_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'] ) )
	{

		$id 		= $_POST["id"];
		$fname 		= $_POST["fname"];
		$lname 		= $_POST["lname"];
		$email 		= $_POST["email"];
		$designation= $_POST["designation"];
		$department = $_POST["department"];
		$peraddress = $_POST["peraddress"];
		$preaddress = $_POST["preaddress"];
		$birthday 	= $_POST["birthday"];
		$joining 	= $_POST["joining"];
		$basic      = $_POST["basic"];
		$hrent      = $_POST["hrent"];
		$mallowance = $_POST["mallowance"];
		$dallowance = $_POST["dallowance"];
		$callowance = $_POST["callowance"];
		$tallowance = $_POST["tallowance"];
		$wallowance = $_POST["wallowance"];
		$profund    = $_POST["profund"];
		$arecovery  = $_POST["arecovery"];
		$clubsubs   = $_POST["clubsubs"];
		$catering   = $_POST["catering"];
		$loanded    = $_POST["loanded"];
		$mcharge    = $_POST["mcharge"];
		$bus        = $_POST["bus"];


		$sql="INSERT INTO
				pay_roll( id , 
							fname , 
							lname , 
							email, 
							designation , 
							department , 
							peraddress , 
							preaddress , 
							birthday , 
							joining ,
							basic ,
							hrent ,
							mallowance ,
							dallowance ,
							callowance ,
							tallowance ,
							wallowance ,
							profund ,
							arecovery ,
							clubsubs ,
							catering ,
							loanded ,
							mcharge ,
							bus)
				VALUES ('$id', 
							'$fname', 
							'$lname',
							'$email', 
							'$designation',
							'$department', 
							'$peraddress', 
							'$preaddress', 
							'$birthday', 
							'$joining' ,
							'$basic',
							'$hrent',
							'$mallowance',
							'$dallowance',
							'$callowance',
							'$tallowance',
							'$wallowance',
							'$profund',
							'$arecovery',
							'$clubsubs',
							'$catering',
							'$loanded',
							'$mcharge',
							'$bus' )";

		mysql_query($sql);
		header('location:insert.php');
		
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
    <?php include('admin_nav.php') ?>
    	<div class="container">
	    	<div class="row">
		    	<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center">Update Form: Control States</h1>
					<hr>
					

					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="form-horizontal" role="form">
						<h2 class="text-center">Personal Info</h2>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">ID</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="id" type="number" value="<?=$id?>" placeholder="Enter id">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">First Name</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="fname" type="text" value="<?=$fname?>" placeholder="Enter First Name">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Last Name</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="lname" type="text" value="<?=$lname?>" placeholder="Enter Last Name">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">E-Mail</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="email" type="text" value="<?=$email?>" placeholder="Enter Email">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Designation</label>
					    	<div class="col-sm-10">
					        	<select class="form-control" name="designation">
					        	<option value="-1">Please Select</option>
					        		<option>Ass. Prof</option>
					        		<option>Teacher</option>
					        		<option>Officer</option>
					        		<option>Engineer</option>
					        	</select>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Department</label>
					    	<div class="col-sm-10">
					        	<select class="form-control" name="department" >
					        	<option value="-1">Please Select</option>
					        		<option>CSE</option>
					        		<option>English</option>
					        		<option>Music</option>
					        		<option>Physics</option>
					        		<option>Biology</option>
					        	</select>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Permanent Address</label>
					    	<div class="col-sm-10">
					        	<textarea class="form-control" name="peraddress" type="text area" placeholder="Permanent Address"><?=$preaddress?></textarea>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Present Address</label>
					    	<div class="col-sm-10">
					        	<textarea class="form-control" name="preaddress" type="text area" placeholder="Present Address"><?=$preaddress?></textarea>
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Date of Birth</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="birthday" type="date" value="<?=$birthday?>" placeholder="Date of Birth">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">First Joining</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="joining" type="date" value="<?=$joining?>" placeholder="First Joining">
					    	</div>
					    </div>
						<h2 class="text-center">Earning Header</h2>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Basic</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="basic" type="number" value="<?=$basic?>" placeholder="Basic">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">House Rent</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="hrent" type="number" value="<?=$hrent?>" placeholder="House Rent">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Medical Allowance</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="mallowance" type="number" value="<?=$mallowance?>" placeholder="Medical Allowance">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Dearness Allowance</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="dallowance" type="number" value="<?=$dallowance?>" placeholder="Dearness Allowance">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Conveyance Allowance</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="callowance" type="number" value="<?=$callowance?>" placeholder="Conveyance Allowance">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Tiffin Allowance</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="tallowance" type="number" value="<?=$tallowance?>" placeholder="Tiffin Allowance">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Wash Allowance</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="wallowance" type="number" value="<?=$wallowance?>" placeholder="Wash Allowance">
					    	</div>
					    </div>
					    <h2 class="text-center">Deduction Header</h2>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Provnameend fund</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="profund" type="number" value="<?=$profund?>" placeholder="Provnameend fund">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Advance Recovery</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="arecovery" type="number" value="<?=$arecovery?>" placeholder="Advance Recovery">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Club Subscription</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="clubsubs" type="number" value="<?=$clubsubs?>" placeholder="Club Subscription">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Catering</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="catering" type="number" value="<?=$catering?>" placeholder="Catering">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Loan deduction</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="loanded" type="number" value="<?=$loanded?>" placeholder="Loan deduction">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Medicine Charge</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="mcharge" type="number" value="<?=$mcharge?>" placeholder="Medicine Charge">
					    	</div>
					    </div>
					    <div class="form-group">
					      <label class="col-sm-2 control-label">Bus</label>
					    	<div class="col-sm-10">
					        	<input class="form-control" name="bus" type="number" value="<?=$bus?>" placeholder="Bus">
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
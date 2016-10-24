<?php
session_start();

 require_once('config.php');
   
	  if(isset($_POST['sub'])){
	  
	  $f_id = $_POST['id'];
	  
	  $f_pass = $_POST['pass'];
	  
	  $sql = "select * from users where username='$f_id' AND password='$f_pass'";
	 //echo $select;
	 
	 $result=mysql_query($sql);
	 
	 $count = mysql_num_rows($result);

	 if($count > 0){
	 	while( $row =mysql_fetch_assoc( $result )){
		 $_SESSION["id"] = $row['id'];
		 $id = $_SESSION["id"];

		 $_SESSION["status"] = $row['status'];
		 $status = $_SESSION["status"];
			
		}
		 
	  	if($status == 0){
	  		header("location: profile.php");
		}
		else if($status == 1){
	  		header("location: staff_mda.php");
		}
		else if($status == 2){
	  		header("location: staff_doc.php");
		}
		else if($status == 3){
	  		header("location: staff_medicine.php");
		}
		else if($status == 4){
	  		header("location: admin.php");
		}
	 }
	 else{
		   echo '<h3 style="color:red">Invalid login details !</h3>';
		  
		}
	 
	  }

?>


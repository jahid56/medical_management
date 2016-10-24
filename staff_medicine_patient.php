<?php 
  include('header_staff.php'); 
  session_start();
  if(!isset($_SESSION["id"]) || $_SESSION["status"] != 3){
    header("location: logout.php");
  } else {
      $id = $_SESSION["id"];
  }

	$p_id = $_REQUEST['id'];
		
		$sql="UPDATE patients SET status_medicine='1' WHERE id='$p_id'";

		$result = mysql_query($sql) or die(mysql_error());
		if($result){
   	echo "<script>
    alert(\"Record successfully updated.\");
    window.location = \"staff_medicine.php\";
</script>";
	} else {
		echo "<script>
    alert(\"Error occured !\");
    window.location = \"staff_medicine.php\";
</script>";
	}
	
?>

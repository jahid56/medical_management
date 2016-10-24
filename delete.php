<?php
  session_start();
  $id = $_SESSION["id"];
    $s_id = $_REQUEST['s_id'];

  require_once('config.php');
   
  if(!isset($_SESSION["id"])){
    header("location: index.php");
  }

    $sql = "DELETE FROM pay_roll WHERE id='$s_id'";
  
   $result=mysql_query($sql);
   

   if($result){
   	echo "<script>

    alert(\"Successfully deleted.\");
    window.location = \"members.php\";

</script>";
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Delete</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
  </body>
  </html>
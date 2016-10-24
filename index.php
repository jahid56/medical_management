<?php
	include('header.php'); 
	session_start();
	if(!isset($_SESSION["id"]) || !isset($_SESSION["status"])){
?>

		<div class="container home">
			<form class="form-signin" method="post" action="login.php">
				<h2 class="form-signin-heading">Please sign in</h2>
				<label class="sr-only" for="id">ID</label>
				<input type="text" value = "" autofocus="" required="" placeholder="Enter Username" class="form-control" id="nm" name="id">
				<br>
				<label class="sr-only" for="pass">Password</label>
				<input type="password" required="" value = "" placeholder="Enter Password" class="form-control" id="pass" name="pass">
				<div class="checkbox">
					<label><input type="checkbox" value="remember-me"> Remember me</label>
				</div>
				<button type="submit" name="sub" id="sub" class="btn btn-lg btn-primary btn-block">Sign in</button>
			</form>
		</div>
		<?php include('footer.php') ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

<?php
  } else {
      $id = $_SESSION["id"];
      $status = $_SESSION["status"];
      
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
  ?>
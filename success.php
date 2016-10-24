<?php
session_start();
	if(!isset($_SESSION["id"])){
	   header("location: index.php");
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
		<?php include('nav.php') ?>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
			<h1>Welcome <?php echo $_SESSION["id"]; ?> to our employee payroll system</h1>
				<p>A family-owned business, and proud of our history, Payroll Management was founded in 1989 and  is now one of the largest independent payroll companies in Maine. Payroll Management understands the need for small and midsize businesses to have flexibility.</p>
			<div class="row">
				<div class="col-md-6">
					<img src="images/members.jpg" width="100%" height="auto" alt="Payroll-Management" class="img-responsive" />
				</div>
				<div class="col-md-6">
					<h1>Management Reports and Services</h1>
					<p>Outsourcing your payroll and payroll tax administration to Payroll Management services allows you to handle your payroll obligations in an effective manner while allowing you to focus your time and energy where it should be – on managing your business.</p>
				</div>
			</div>
				<h1>Get the Facts with Employee Background Checks</h1>
				<p>We’re excited to announce… that we provide our customers access to a simple and affordable employee background checks through our partnership with National Crime Search (N.C.S.). Our partnership not only provides you with secure and affordable access to a web-based criminal and sex offender directory that includes over 507 million criminal records, it also allows you access to motor vehicle reports, credit reports, county criminal records and much more.</p>
				<p>Even when very little is known about an applicant, NCS has the tools and resources to help uncover possible records even if those records are outside the applicant’s current residence. NCS’ multi-state database tool searches through over 507 million criminal records covering all 50 states plus the District of Columbia. It’s a great resource to help uncover records that might have been missed without broader employee background checks with robust search tools.</p>
				<h1>our Services</h1>
				<ul>
					<li>Multi-State Criminal Background Searches</li>
					<li>SSN Validation and Address Tracker</li>
					<li>Motor Vehicle Records</li>
					<li>Drug Screening</li>
					<li>Employment Credit Reports</li>
					<li>Healthcare Industry Search Services</li>
					<li>Tenant Screening</li>
					<li>Volunteer Screening</li>
					<li>Alias Search</li>
					<li>Employment &amp; Education Verification</li>
				</ul>
			</div>
		</div>
		<?php include('footer.php'); ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
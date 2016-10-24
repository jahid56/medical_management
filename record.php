<?php
  session_start();
  $id = $_SESSION["id"];

  require_once('config.php');
   
  if(!isset($_SESSION["id"])){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <script type="text/javascript">

    function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'printIt', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Payroll</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();
        mywindow.close();

        return true;
    }

</script>
    <title>Payroll</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php include('nav.php') ?>
    <div class="jumbotron">
	    <div class="container">
	    	<h1 class="text-center">My Record</h1>
	    	<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
	    </div>
    </div>



<?php

       $sql = "select * from pay_roll where id='$id'";
  
   $result=mysql_query($sql);
   
   $count = mysql_num_rows($result);

    while( $row =mysql_fetch_assoc( $result )){
     
    
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
     $gross = $basic + $hrent + $mallowance + $dallowance + $callowance + $tallowance + $wallowance;

     $deduction = $profund + $arecovery + $clubsubs + $catering + $loanded + $mcharge + $bus;

     $net = $gross - $deduction;
      
    }


    ?>


    <div class="container" id="printIt">
    	<div class="col-md-8 col-md-offset-2">
    		<table class="table table-responsive table-bordered">
    			<thead>
    				<tr class="danger">
    					<th>Earning Head</th>
    					<th>Taka</th>
    					<th>Deduction Head</th>
    					<th>Taka</th>
    				</tr>
    			</thead>
    			<tbody>

    			<?php echo "
					<tr>
						<td>Basic</td>
						<td>$basic</td>
						<td>Providend fund</td>
						<td>$profund</td>
					</tr>
					<tr>
						<td>House Rent</td>
						<td>$hrent</td>
						<td>Advance Recovery</td>
						<td>$arecovery</td>
					</tr>
					<tr>
						<td>Medical Allowance</td>
						<td>$mallowance</td>
						<td>Club Subscription</td>
						<td>$clubsubs</td>
					</tr>
					<tr>
						<td>Dearness Allowance</td>
						<td>$dallowance</td>
						<td>Catering</td>
						<td>$catering</td>
					</tr>
					<tr>
						<td>Conveyance Allowance</td>
						<td>$callowance</td>
						<td>Loan deduction</td>
						<td>$loanded</td>
					</tr>
					<tr>
						<td>Tiffin Allowance</td>
						<td>$tallowance</td>
						<td>Medicine Charge</td>
						<td>$mcharge</td>
					</tr>
					<tr>
						<td>Wash Allowance</td>
						<td>$wallowance</td>
						<td>Bus</td>
						<td>$bus</td>
					</tr>

					
					<tr class=\"success\">
						<td>Gross</td>
						<td>$gross</td>
						<td>Deduction</td>
						<td>$deduction</td>
					</tr>
					
    			</tbody>
    		</table>
    		<hr><b>Net</b>: $net<hr>
    		"; ?>

    		
    	</div>
    </div>

    <center><input type="button" value="Print" onclick="PrintElem('#printIt')" /></center>
    		
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
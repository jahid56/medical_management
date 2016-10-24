<?php include('header_admin.php') ?>

      <div class="container">
        <h1 class="text-center">Search Result for all members</h1>
        <hr>
        <div class="col-md-12">
        <?php
          require_once('config.php');

          $sql='SELECT * FROM pay_roll';  // Sql Query to Select all Data from DB

          $result=mysql_query($sql,$connection);

          echo '<table class="table table-bordered table-hover table-responsive">';
            echo '<thead>';
              echo '<tr class="success">';
                echo '<th>ID</th>';
                echo '<th>First Name</th>';
                echo '<th>Last Name</th>';
                echo '<th>E-mail</th>';
                echo '<th>Designation</th>';
                echo '<th>Department</th>';
                echo '<th>Permanent Address</th>';
                echo '<th>Present Address</th>';
                echo '<th>Date of Birth</th>';
                echo '<th>First Joining</th>';
                /*echo '<th>Basic</th>';
                echo '<th>House Rent</th>';
                echo '<th>Medical Allowance</th>';
                echo '<th>Dearness Allowance</th>';
                echo '<th>Conveyance Allowance</th>';
                echo '<th>Tiffin Allowance</th>';
                echo '<th>Wash Allowance</th>';
                echo '<th>Provnameend fund</th>';
                echo '<th>Advance Recovery</th>';
                echo '<th>Club Subscription</th>';
                echo '<th>Catering</th>';
                echo '<th>Loan deduction</th>';
                echo '<th>Medicine Charge</th>';
                echo '<th>Bus</th>';*/
                echo '<th>Action</th>';

              echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
          while( $row =mysql_fetch_assoc( $result )  )
          {

            echo '<tr>';
            $s_id = $row['id'];
                echo '<td>'. $row['id'].'</div>';
                echo '<td>'. $row['fname'].'</td>';
                echo '<td>'. $row['lname'].'</td>';
                echo '<td>'. $row['email'].'</div>';
                echo '<td>'. $row['designation'].'</td>';
                echo '<td>'. $row['department'].'</td>';
                echo '<td>'. $row['peraddress'].'</td>';
                echo '<td>'. $row['preaddress'].'</td>';
                echo '<td>'. $row['birthday'].'</td>';
                echo '<td>'. $row['joining'].'</td>';
                /*echo '<td>'. $row['basic'].'</div>';
                echo '<td>'. $row['hrent'].'</td>';
                echo '<td>'. $row['mallowance'].'</td>';
                echo '<td>'. $row['dallowance'].'</div>';
                echo '<td>'. $row['callowance'].'</td>';
                echo '<td>'. $row['tallowance'].'</td>';
                echo '<td>'. $row['wallowance'].'</td>';
                echo '<td>'. $row['profund'].'</td>';
                echo '<td>'. $row['arecovery'].'</td>';
                echo '<td>'. $row['clubsubs'].'</td>';
                echo '<td>'. $row['catering'].'</td>';
                echo '<td>'. $row['loanded'].'</td>';
                echo '<td>'. $row['mcharge'].'</td>';
                echo '<td>'. $row['bus'].'</td>';*/

                echo "<td><a href=\"viewProfile2.php?s_id=$s_id\">More</a>
                 <a href=\"update.php?s_id=$s_id\">Update</a>
                 <a href=\"delete.php?s_id=$s_id\">Delete</a>  
                 

                </td>";

            echo '</tr>';
          }
          echo '</tbody>';
          echo '</table>';
          mysql_close($connection);

        ?>
        </div>
      </div>
    <?php include('footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
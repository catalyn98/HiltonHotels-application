<?php
	session_start();  
	if(!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
	<title>Hilton Hotel - Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="scripts/Jquery_1.10.2.js"></script>
    <script src="scripts/Bootstrap_Min.js"></script>
    <script src="scripts/Jquery_MetisMenu.js"></script>
    <script src="scripts/Jquery_Data_Tables.js"></script>
    <script src="scripts/Custom_Scripts.js"></script>
    <link href="css/Bootstrap.css" rel="stylesheet"/>
    <link href="css/Custom_Style.css" rel="stylesheet"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/png" href="images/favicon_admin_page.png"/>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Status_Room_Booking.php"><?php echo $_SESSION["user"]; ?></a>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><a href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Status Rooms</a></li>
                    <li><a class="active-menu" href="Payment.php"><i class="fa fa-qrcode"></i>Payment</a></li>
					<li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>User Profile</a></li>
                    <li><a href="Room_Status.php"><i class="fa fa-gear fa-fw"></i>Settings</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                </ul>
            </div>
        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Payment Details&nbsp&nbsp<small>Room Booking</small></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Room type</th>
                                                <th>Bedding Type</th>
                                                <th>Check in</th>
                                                <th>Check out</th>
                                                <th>Meal Type</th>
                                                <th>Room Rent</th>
                                                <th>Price Meal</th>
                                                <th>Total Price</th>
                                                <th>Print</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
											include ('Database_connection.php');
											$sql="select * from payment";
											$re = mysqli_query($con,$sql);
											while($row = mysqli_fetch_array($re)) {
												$id = $row['id'];
												if($id % 2 ==1 ) {
													echo"<tr class='gradeC'>
															<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
															<td>".$row['troom']."</td>
															<td>".$row['tbed']."</td>
															<td>".$row['cin']."</td>
															<td>".$row['cout']."</td>
															<td>".$row['meal']."</td>
															<td>".$row['ttot']."</td>
															<td>".$row['mepr']."</td>
															<td>".$row['fintot']."</td>
															<td><a href=Print_Invoice.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i>Print</button></td>
															</tr>";
												}
												else {
													echo"<tr class='gradeU'>
															<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
															<td>".$row['troom']."</td>
															<td>".$row['tbed']."</td>
															<td>".$row['cin']."</td>
															<td>".$row['cout']."</td>
															<td>".$row['meal']."</td>
															<td>".$row['ttot']."</td>
															<td>".$row['mepr']."</td>
															<td>".$row['fintot']."</td>
															<td><a href=Print_Invoice.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i>Print</button></td>
															</tr>";
												}
											}
										?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
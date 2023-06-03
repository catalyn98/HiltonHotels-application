<?php
    session_start();
    if (!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?>

<?php
    if (!isset($_GET["rid"])) 
        header("location:Login_Admin.php");
    else {
        $current_date = date("Y/m/d");
		include('Database_connection.php');
		$id = $_GET['rid'];
		$sql = "Select * from roombook where id = '$id'";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($result)) {
				$title = $row['Title'];
				$fname = $row['FName'];
				$lname = $row['LName'];
				$email = $row['Email'];
				$Phone = $row['Phone'];
				$troom = $row['TRoom'];
				$bed = $row['Bed'];
				$meal = $row['Meal'];
				$cin = $row['cin'];
				$cout = $row['cout'];
				$sta = $row['stat'];
				$days = $row['nodays'];
		}
	}
?>

<!DOCTYPE html>
<head>
    <title>Hilton Hotel - Room Booking</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="scripts/Jquery_1.10.2.js"></script>
    <script src="scripts/Bootstrap_Min.js"></script>
    <script src="scripts/Jquery_MetisMenu.js"></script>
    <script src="scripts/Custom_Scripts.js"></script>
    <link href="css/Bootstrap.css" rel="stylesheet"/>
    <link href="css/Custom_Style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
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
					<li><a href="Payment.php"><i class="fa fa-qrcode"></i>Payment</a></li>
					<li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>User Profile</a></li>
					<li><a href="Room_Status.php"><i class="fa fa-gear fa-fw"></i>Settings</a></li>
					<li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                </ul>
            </div>
        </nav>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"><h1 class="page-header">Room Booking&nbsp&nbsp<small><?php echo $current_date; ?></small></h1></div>
                    <div class="col-md-8 col-sm-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">Booking Conformation</div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $title . " " . $fname . " " . $lname; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <th><?php echo $Phone; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Type Of the Room</th>
                                            <th><?php echo $troom; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Meal Plan</th>
                                            <th><?php echo $meal; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Bedding</th>
                                            <th><?php echo $bed; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Check-in Date</th>
                                            <th><?php echo $cin; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Check-out Date</th>
                                            <th><?php echo $cout; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Numbers of days</th>
                                            <th><?php echo $days; ?></th>
                                        </tr>
                                        <tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Select the Confirmation</label>
                                        <select name="conf" class="form-control">
                                            <option value="Confirm">CONFIRM</option>
                                            <option value="Delete">DELETE</option>
                                        </select>
                                    </div>
                                    <input type="submit" name="confirm" value="Confirm Reservation" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sr = 0;
						$dr = 0;
						$lr = 0;
						while($rrow=mysqli_fetch_array($rre)) {
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Single Room" )
								$sr = $sr+ 1;
							if($s=="Deluxe Room")
								$dr = $dr + 1;
							if($s=="Luxury Room" )
								$lr = $lr + 1;
						}
					?>
					<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$psr =0;
						$pdr = 0;
						$plr = 0;
						while($crow=mysqli_fetch_array($cre)) {
							$cr = $cr + 1;
							$cs = $crow['troom'];
							if($cs=="Single Room"  )
								$psr = $psr + 1;
							if($cs=="Deluxe Room" )
								$pdr = $pdr + 1;
							if($cs=="Luxury Room" )
								$plr = $plr + 1;
						}
					?>
					<div class="col-md-4 col-sm-4">
						<div class="panel panel-default">
							<div class="panel-heading">Available Rooms Details</div>
							<div class="panel-body">
								<table width="200px">
									<tr>
										<td><b>Single Room</b></td>
										<td>
											<button type="button" class="btn btn-primary btn-circle">
								
												<?php  
													$f1 =$sr - $psr;
													if($f1 <=0 ) {	
														$f1 = "No";
														echo $f1;
													}
													else
														echo $f1;
												?>
											</button>
										</td>
									</tr>
									<tr>
										<td><b>Deluxe Room</b></td>
										<td>
											<button type="button" class="btn btn-primary btn-circle">
								
												<?php 
													$f2 =  $dr -$pdr;
													if($f2 <=0 ) {	
														$f2 = "NO";
														echo $f2;
													}
													else
														echo $f2;
												?> 
											</button>
										</td> 
									</tr>
									<tr>
										<td><b>Luxury Room</b></td>
										<td>
											<button type="button" class="btn btn-primary btn-circle">
								
												<?php
													$f3 =$lr - $plr;
													if($f3 <=0 ) {	
														$f3 = "NO";
														echo $f3;
													}
													else
														echo $f3;
												?> 
											</button>
										</td> 
							        </tr>
							</div>
						</div>
					</div>
			</div>
		</div>
</body>
</html>

<?php
	if (isset($_POST['confirm'])) {
		$status = $_POST['conf'];
		if ($status == "Confirm") {
			$urb = "UPDATE `roombook` SET `stat`='$status' WHERE id = '$id'";
			if (mysqli_query($con, $urb)) {
				$type_of_room = 0;
            if ($troom == "Single Room") {
                $type_of_room = 30;
            } else if ($troom == "Deluxe Room") {
                $type_of_room = 80;
            } else if ($troom == "Luxury Room") {
                $type_of_room = 100;
            }
            if ($meal == "Room only") {
                $meal_plan = 0;
            } else if ($meal == "Breakfast") {
                $meal_plan = 15;
            } else if ($meal == "Half Board") {
                $meal_plan = 20;
            } else if ($meal == "Full Board") {
                $meal_plan = 40;
            }
            $ttot = $type_of_room * $days;
            $mepr = $meal_plan * $days;
            $fintot = $ttot + $mepr;
            $psql = "INSERT INTO `payment`(`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `cin`, `cout`, `ttot`,`meal`, `mepr`,`fintot`,`noofdays`) VALUES ('$id','$title','$fname','$lname','$troom','$bed','$cin','$cout','$ttot','$meal','$mepr','$fintot', '$days')";
            if (mysqli_query($con, $psql)) {
                $notfree = "NotFree";
                $rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
                if (mysqli_query($con, $rpsql)) {
                    echo "<script type='text/javascript'> alert('Booking Confirm!')</script>";

                    echo "<script type='text/javascript'> window.location='Room_Booking.php'</script>";
                }
            }
			}
		}
	}
?>
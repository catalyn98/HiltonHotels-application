<?php
    session_start();
    if (!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?>

<!DOCTYPE html>
<head>
    <title>Hilton Hotel - Status Room Booking</title>
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
                <li><a class="active-menu" href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Status Rooms</a></li>
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
                <div class="col-md-12">
                    <h1 class="page-header">Status&nbsp&nbsp<small>Room Booking</small></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
											
                                                <?php
                                                    include('Database_connection.php');
                                                    $sql = "select * from roombook";
                                                    $result = mysqli_query($con, $sql);
                                                    $count = 0;
                                                    while ($row = mysqli_fetch_array($result)) {
                                                           $new = $row['stat'];
                                                           $check_in = $row['cin'];
                                                           $id = $row['id'];
                                                           if ($new == "Not Confirm Yet")
                                                               $count = $count + 1;
                                                    }
                                                ?>
                                                <button class="btn btn-default" type="button">New Room Bookings&nbsp&nbsp<span class="badge"><?php echo $count; ?></span></button>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                        <div class="panel-body">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Room</th>
                                                                <th>Bedding</th>
                                                                <th>Meal</th>
                                                                <th>Check In</th>
                                                                <th>Check Out</th>
                                                                <th>Status</th>
                                                                <th>More</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $tsql = "select * from roombook";
                                                                $tre = mysqli_query($con, $tsql);
                                                                while ($table_row = mysqli_fetch_array($tre)) {
                                                                             $status = $table_row['stat'];
                                                                             if ($status == "Not Confirm Yet") {
                                                                             echo "<tr>
												                                       <th>" . $table_row['id'] . "</th>
												                                       <th>" . $table_row['FName'] . " " . $table_row['LName'] . "</th>
												                                       <th>" . $table_row['Email'] . "</th>
												                                       <th>" . $table_row['TRoom'] . "</th>
												                                       <th>" . $table_row['Bed'] . "</th>
												                                       <th>" . $table_row['Meal'] . "</th>
												                                       <th>" . $table_row['cin'] . "</th>
												                                       <th>" . $table_row['cout'] . "</th>
												                                       <th>" . $table_row['stat'] . "</th>
												                                       <th><a href='Room_Booking.php?rid=" . $table_row['id'] . " ' class='btn btn-primary'>Action</a></th>
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
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    <?php
                                                        $result_sql = "SELECT * FROM `roombook`";
                                                        $result = mysqli_query($con, $result_sql);
                                                        $contor = 0;
                                                        while ($row = mysqli_fetch_array($result)) {
                                                               $statut = $row['stat'];
                                                               if ($statut == "Confirm")
                                                                   $contor = $contor + 1;
                                                        }
                                                    ?>
                                                    <button class="btn btn-primary" type="button">Booked Rooms&nbsp&nbsp<span class="badge"><?php echo $contor; ?></span></button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php
                                                    $msql = "SELECT * FROM `roombook`";
                                                    $mre = mysqli_query($con, $msql);
                                                    while ($mrow = mysqli_fetch_array($mre)) {
                                                           $statut = $mrow['stat'];
                                                           if ($statut == "Confirm") {
                                                               $fid = $mrow['id'];
                                                               echo "<div class='col-md-3 col-sm-12 col-xs-12'>
                                                                          <div class='panel panel-primary text-center no-boder bg-color-blue'>
														                       <div class='panel-body'><i class='fa fa-users fa-5x'></i>
                                                                               <h3>" . $mrow['FName'] . "</h3>
                                                                               <h3>" . $mrow['LName'] . "</h3>
														                       </div>
														                  <div class='panel-footer back-footer-blue'>" . "ID Client: " . $mrow['id'] . "<br>" . "Type room: " . $mrow['TRoom'] . "<br>" . "Type bed: " . $mrow['Bed'] . "</div>
													                </div>	
											                 </div>";
                                                            }
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
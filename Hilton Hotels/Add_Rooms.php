<?php
	session_start();  
	if(!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
?>

<!DOCTYPE html>
<head>
	<title>Hilton Hotel - Add Rooms</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="scripts/Jquery_1.10.2.js"></script>
    <script src="scripts/Bootstrap_Min.js"></script>
	<script src="scripts/Jquery_MetisMenu.js"></script>
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
                    <li><a href="Room_Status.php"><i class="fa fa-dashboard"></i>Available Rooms</a></li>
                    <li><a class="active-menu" href="Add_Rooms.php"><i class="fa fa-plus-circle"></i>Add Rooms</a></li>
                    <li><a href="Delete_Rooms.php"><i class="fa fa-pencil-square-o"></i>Delete Rooms</a></li>
                    <li><a href="Status_Room_Booking.php"><i class="fa fa-bar-chart-o"></i>Status Rooms</a></li>
                    <li><a href="Payment.php"><i class="fa fa-qrcode"></i>Payment</a></li>
                    <li><a href="Settings_Admin.php"><i class="fa fa-user fa-fw"></i>User Profile</a></li>
                    <li><a href="Logout_Admin.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li> 
				</ul>	
            </div>
        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
			    <div class="row">
                    <div class="col-md-12"><h1 class="page-header">ADD NEW ROOMS</h1></div>
                </div>                    
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">ADD NEW ROOMS</div>
                            <div class="panel-body">
						        <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Type Of Room</label>
                                            <select name="troom"  class="form-control" required>
                                                <option value="Single Room">SINGLE ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Luxury Room">LUXURY HOUSE</option>
                                            </select>
                                    </div>
								    <div class="form-group">
                                        <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
                                                <option value="Single">SINGLE</option>
                                                <option value="Double">DOUBLE</option>                                           
                                            </select>     
                                    </div>
							        <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
                                </form> 
							<?php
								include('Database_connection.php');
								if(isset($_POST['add'])) {
									$room = $_POST['troom'];
									$bed = $_POST['bed'];
									$place = 'Free';
									$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'";
									$sql="INSERT INTO `room`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
									if(mysqli_query($con,$sql))
										echo '<script>alert("New Room Added!") </script>' ;
									else
										echo '<script>alert("Sorry! Check The System!") </script>' ;
								}
                            ?>
							</div> 
                    </div>
                </div>   
            </div>
			</div>
		</div>
</body>
</html>
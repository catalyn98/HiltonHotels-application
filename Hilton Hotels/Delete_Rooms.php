<?php
	session_start();  
	if(!isset($_SESSION["user"]))
		header("location:Login_Admin.php");
	ob_start();
?> 
							 
<!DOCTYPE html>
<head>
    <title>Hilton Hotel - Delete Rooms</title>
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
					<li><a href="Add_Rooms.php"><i class="fa fa-plus-circle"></i>Add Rooms</a></li>
					<li><a class="active-menu" href="Delete_Rooms.php"><i class="fa fa-pencil-square-o"></i>Delete Rooms</a></li>
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
                    <div class="col-md-12"><h1 class="page-header">DELETE ROOM</h1></div>
                </div>                      
		<?php
			include('Database_connection.php');
			$rsql ="select id from room";
			$rre=mysqli_query($con,$rsql);
		?>       
            <div class="row">   
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Delete room</div>
                            <div class="panel-body">
						        <form name="form" method="post">
                                    <div class="form-group">
                                        <label>Select the Room ID</label>
                                        <select name="id"  class="form-control" required>
											<?php
												while($rrow=mysqli_fetch_array($rre)) {
													$value = $rrow['id'];
													echo '<option value="'.$value.'">'.$value.'</option>';
												}
											?>
											
                                        </select>
                                    </div>
							    <input type="submit" name="del" value="Delete Room" class="btn btn-primary"> 
								</form>
							<?php
								include('Database_connection.php');
								if(isset($_POST['del'])) {
									$did = $_POST['id'];
									$sql ="DELETE FROM `room` WHERE id = '$did'" ;
									if(mysqli_query($con,$sql)) {
										echo '<script type="text/javascript">alert("Delete the Room!") </script>' ;
										header("Location:Delete_Rooms.php");
									}
									else 
										echo '<script>alert("Sorry ! Check The System!") </script>' ;
								}
							?>
                            </div>  
                    </div>
                </div>
            <?php
				include ('Database_connection.php');
				$sql = "select * from room";
				$re = mysqli_query($con,$sql)
			?>
            <div class="row">
				<?php
					while($row= mysqli_fetch_array($re)) {
						$id = $row['type'];
						if($id == "Single Room") {
							echo"<div class='col-md-3 col-sm-12 col-xs-12'>
								    <div class='panel panel-primary text-center no-boder bg-color-blue'>
										<div class='panel-body'><img src='images/single_room.jpg' alt='Single Room'><h3>". "ID Room: " . $row['id'] ." ". "<br>" . "Type room: " . $row['type']."</h3></div>
										<div class='panel-footer back-footer-blue'>" . "Type bed: " . $row['bedding']."</div>
									</div>
								  </div>"; }
					else if ($id == "Deluxe Room") {
							echo"<div class='col-md-3 col-sm-12 col-xs-12'>
								    <div class='panel panel-primary text-center no-boder bg-color-green'>
									    <div class='panel-body'><img src='images/deluxe_room.jpg' alt='Deluxe Room'><h3>". "ID Room: " . $row['id'] ." ". "<br>" . "Type room: " . $row['type']."</h3></div>
									    <div class='panel-footer back-footer-green'>" . "Type bed: " . $row['bedding']."</div>
									</div>
							     </div>"; }
					else if($id =="Luxury Room") {
							echo"<div class='col-md-3 col-sm-12 col-xs-12'>
									<div class='panel panel-primary text-center no-boder bg-color-brown'>
										<div class='panel-body'><img src='images/luxury_room.jpg' alt='Luxury Room'><h3>". "ID Room: " . $row['id'] ." ". "<br>" . "Type room: " . $row['type']."</h3></div>
										<div class='panel-footer back-footer-brown'>" . "Type bed: " . $row['bedding']."</div>
									</div>
								 </div>"; } 
					}
				?>    
			</div>
            <?php
				ob_end_flush();
			?>
		</div>
	</div>
</div>
</body>
</html>
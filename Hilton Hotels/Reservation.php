<?php
    include('Database_connection.php')
?>

<!DOCTYPE html>
<head>
    <title>Hilton Hotel - Reservation</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/Bootstrap.css" rel="stylesheet"/>
    <link href="css/Custom_Style.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="images/hotel_icon.png"/>
</head>
<body>
<div id="wrapper">
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <a href="Home_User.php"><i class="fa fa-home"></i>Home</a>
					<a href="Rooms_User.php"><i class="fa fa-bed"></i>Rooms</a>
					<a href="Home_User.php#services"><i class="fa fa-users"></i>Team</a>
					<a href="About.php"><i class="fa fa-info-circle"></i>About</a>
					<a href="Contact.php"><i class="fa fa-envelope"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Reservation Hilton Hotels</h1>
                </div>
            </div>
            <div>
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">PERSONAL INFORMATION</div>
                        <div class="panel-body">
                            <form name="form" method="post">
                                <div class="form-group">
                                    <label>Title</label>
                                    <select name="title" class="form-control" required>
                                        <option value="Mr.">MR.</option>
                                        <option value="Mrs.">MRS.</option>
                                        <option value="Miss.">MISS.</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="first_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="last_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input name="phone_number" type="text" class="form-control" required>
                                </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-md-6 col-sm-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">RESERVATION INFORMATION</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Type Of Room</label>
                                    <select name="type_room" class="form-control" required>
                                        <option value="Single Room">SINGLE ROOM</option>
                                        <option value="Deluxe Room">DELUXE ROOM</option>
                                        <option value="Luxury Room">LUXURY ROOM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Bedding Type</label>
                                    <select name="type_bed" class="form-control" required>
                                        <option value="Single">SINGLE</option>
                                        <option value="Double">DOUBLE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Meal Plan</label>
                                    <select name="meal_plan" class="form-control" required>
                                        <option value="Room only">ROOM ONLY</option>
                                        <option value="Breakfast">BREAKFAST</option>
                                        <option value="Half Board">HALF BOARD</option>
                                        <option value="Full Board">FULL BOARD</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Check-In</label>
                                    <input name="check_in" type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Check-Out</label>
                                    <input name="check_out" type="date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div>
                            <h4>HUMAN VERIFICATION</h4>
                            <p>Type Below this code <?php $random_code = rand();
                                                          echo $random_code;
                                                    ?>
                            </p><br/>
                            <p>Enter the random code<br/></p>
                            <input type="text" name="key_code" title="random code"/>
                            <input type="hidden" name="generated_code" value="<?php echo $random_code; ?>"/>
                            <input type="submit" name="submit" class="btn btn-primary">
                            <?php
                                $dbhost = 'localhost';
                                $dbuser = 'root';
                                $dbpass = '';
                                $db     = 'hotel';
                                if (isset($_POST['submit'])) {
                                    $key_code = $_POST['key_code'];
                                    $generated_code = $_POST['generated_code'];
                                    if ($key_code != "$generated_code")
                                        echo "<script type='text/javascript'> alert('Invalide code! Please, try again!')</script>";
                                    else{
                                        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
                                        $new = "Not Confirm Yet";
                                        $newUser = "INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[phone_number]','$_POST[type_room]','$_POST[type_bed]','$_POST[meal_plan]','$_POST[check_in]','$_POST[check_out]','$new',datediff('$_POST[check_out]','$_POST[check_in]'))";
                                        if (mysqli_query($connection, $newUser))
                                            echo "<script type='text/javascript'> alert('Thank you! Your booking application has been sent!')</script>";
                                        else
                                            echo "<script type='text/javascript'> alert('I m sorry! Error adding user in database! Please try again!')</script>";
                                        }
                                    }
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<html>
<head>
	<meta charset="utf-8">
	<title>Invoice</title>
	<link href="css/Invoice.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="images/favicon_admin_page.png"/>
</head>
<body>
	<?php
		ob_start();	
		include ('Database_connection.php');
		$pid = $_GET['pid'];
		$sql ="select * from payment where id = '$pid' ";
		$re = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($re)) {
			$id = $row['id'];
			$title = $row['title'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$troom = $row['troom'];
			$bed = $row['tbed'];
			$cin = $row['cin'];
			$cout = $row['cout'];
			$meal = $row['meal'];
			$ttot = $row['ttot'];
			$mepr = $row['mepr'];
			$fintot = $row['fintot'];
			$days = $row['noofdays'];
	}
	$type_of_room = 0;
	if ($troom == "Single Room") {
		$type_of_room = 30; } 
	else if ($troom == "Deluxe Room") {
		$type_of_room = 80; } 
	else if ($troom == "Luxury Room") {
		$type_of_room = 100; }
	if ($meal == "Room only") {
		$meal_plan = 0; } 
	else if ($meal == "Breakfast") {
		$meal_plan = 15; } 
	else if ($meal == "Half Board") {
		$meal_plan = 20; } 
	else if ($meal == "Full Board") {
		$meal_plan = 40; }
	$ttot = $type_of_room * $days;
	$mepr = $meal_plan * $days;
	$fintot = $ttot + $mepr;
	?>
	<header>
		<h1>Invoice</h1>
			<address >
				<p>Hilton Hotels</p>
				<p>Street: E Lamar, Arlington, USA</p>
				<p> Phone: +1 817-640-3322, +1 982-591-4411</p>
			</address>
	</header>
		<div class="image"><img alt="" src="images/logo.png"></div>
		<article>
			<address ><p><?php echo $title . " " . $fname. " " .$lname ?><br></p></address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date check-in</span></th>
					<td><span ><?php echo $cin; ?></span></td>
				</tr>
				<tr>
					<th><span >Date check-out</span></th>
					<td><span ><?php echo $cout; ?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						<th><span >Price</span></th>
						<th><span >Total Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span >Type room:<br><?php echo $troom; ?></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $type_of_room;?></span></td>
						<td><span data-prefix>$</span><span><?php echo $ttot; ?></span></td>
					</tr>
					<tr>
						<td><span >Type bed:<br><?php echo $bed; ?> Bed</span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo "0";?></span></td>
						<td><span data-prefix>$</span><span><?php echo "0"; ?></span></td>
					</tr>
					<tr>
						<td><span >Type meal:<br><?php echo $meal; ?></span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>$</span><span ><?php  echo $meal_plan; ?></span></td>
						<td><span data-prefix>$</span><span><?php echo $mepr; ?></span></td>
					</tr>
				</tbody>
			</table>
			<table class="balance">
				<tr>
					<th><span >Total Payment</span></th>
					<td><span data-prefix>$</span><span><?php echo $fintot; ?></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div ><p id="paragraph">Email: hilton_hotels@yahoo.com, h_hotels@gmail.com <br><br> Web: www.HiltonHotels.com <br></p></div>
		</aside>
	</body>
</html>
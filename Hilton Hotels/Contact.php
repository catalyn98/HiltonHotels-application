<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilton Hotel - Contact</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="scripts/App.js"></script>
	<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
    <link rel="stylesheet" href="css/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="css/Layout.css">
    <link rel="stylesheet" type="text/css" href="css/Media_Queries.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css' rel='stylesheet' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/hotel_icon.png" />
</head>
<body>
    <header id="headerSmall">
        <div id="navBar">
            <a href="Home_User.php" id="logo">Hilton Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
                    <li><a href="Home_User.php">Home</a></li>
                    <li><a href="Home_User.php#services">Team</a></li>
                    <li><a href="About.php">About</a></li>
                    <li class="active"><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="contact-intro">
        <h2 class="sml-h2">Get in touch with us</h2>
        <p>Can't decide where to stay? Contact us and we will help you!</p>
    </section>
    <section class="contact-section">
        <div id='map'></div>
        <div class="contact-form">
            <form>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Place</label>
                <select id="country" name="country">
                    <option value="australia">Europe</option>
                    <option value="canada">North America</option>
                    <option value="usa">South America</option>
                    <option value="usa">Asia</option>
                    <option value="usa">Africa</option>
                </select>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" value="Submit" class="square-to-round-btn" style="cursor:pointer">
            </form>
        </div>
    </section>
    <section class="contact-buttons">
        <h2 class="sml-h2">Other information</h2>
        <div class="button">
            <i class="fas fa-map-marker-alt"></i>
            <h3 class="sml-h3">Address</h3>
            <p class="sml-p">Street: E Lamar<br> Arlington, USA</p>
        </div>
        <div class="button">
            <i class="fas fa-envelope"></i>
            <h3 class="sml-h3">E-mail</h3>
            <p class="sml-p">hilton_hotels@yahoo.com<br> h_hotels@gmail.com
            </p>
        </div>
        <div class="button">
            <i class="fas fa-phone"></i>
            <h3 class="sml-h3">Phone</h3>
            <p class="sml-p">+1 817-640-3322<br> +1 982-591-4411</p>
        </div>
    </section>
    <section id="subscribe" class="bent-shadow corner-shadow">
        <p>Sign up for our free newsletter.</p>
        <form>
            <input type="emal" name="email" required="required" autocomplete="off" placeholder="enter your email address...">
            <button class="white-rounded-btn no-focus" style="cursor:pointer">Sign up</button>
        </form>
    </section>
    <button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
    <footer>
        <nav class="social">
            <h2>Connect With Us</h2>
            <ul class="social-list">
                <li><a href="#" class="social-btn fab fa-facebook"></a></li>
                <li><a href="#" class="social-btn fab fa-twitter"></a></li>
                <li><a href="#" class="social-btn fab fa-google"></a></li>
                <li><a href="#" class="social-btn fab fa-instagram"></a></li>
                <li><a href="#" class="social-btn fab fa-pinterest"></a></li>
                <li><a href="#" class="social-btn fab fa-reddit"></a></li>
                <li><a href="#" class="social-btn fab fa-snapchat-ghost"></a></li>
            </ul>
        </nav>
        <nav class="footer-nav">
            <h2>Links</h2>
            <ul class="primary">
                <li><a href="Home_User.php">Home</a></li>
                <li><a href="Home_User.php#services">Team</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
        <p class="copyright">&copy 2021 Hilton Hotels. All Rights Reserved.</p>
    </footer>
</body>
</html>
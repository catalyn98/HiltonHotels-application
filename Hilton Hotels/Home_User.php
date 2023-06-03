<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilton Hotel - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/App.js"></script>
    <link rel="stylesheet" href="css/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="css/Layout.css">
    <link rel="stylesheet" type="text/css" href="css/Media_Queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/hotel_icon.png"/>
</head>
<body>
    <header id="homeHeader">
        <div id="navBar">
            <a href="Home_User.php" id="logo">Hilton Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
                    <li class="active"><a href="Home_User.php">Home</a></li>
                    <li><a href="#services">Team</a></li>
                    <li><a href="About.php">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
        <div id="travelStyle">
            <h1>Hotel Chain Concept</h1>
            <p>A Hotel Chain is a company that owns or operates several hotels. Hotel chain is an enterprise that manages a number of hotels located in different areas. They can be total or partial owners of the hotel and they manage their administration,
                marketing and promotion.<br> The difference between hotel chains and hotel groups is that the latter have multiple subsidiary brands, allowing the hotel to greatly differ their services, products and prices offered with hotels that differ
                in characteristics. A hotel which is part of a hotel chain is a known as a chain hotel.</p>
        </div>
        <section id="about">
            <img src="./images/Logo_Hilton.png" alt="Logo_Hilton.png">
            <div id="about-text">
                <h2>About</h2>
                <p>With more than 570 locations across 6 continents, Hilton provides an authentic and contemporary experience for our guests worldwide. Our guest rooms feature a smart, functional design plus thoughtful amenities. And our Request Upon Arrival
                    service ensures that your room will be unique to your specifications from the moment you check in.</p>
                <button class="sml-text-btn no-focus"><span><a href="About.php">Read more</a></span></button>
            </div>
        </section>
    </header>
    <section id="services">
        <h2 class="sml-h2">Team</h2>
        <div>
            <a href="#vacations"><img class="bring-to-front" src="./images/User.png" alt="User" /></a>
            <h3 class="sml-h3">User 1</h3>
            <p class="sml-p">President & Chief Executive Officer, Global Development</p>
        </div>
        <div id="flights-ser">
            <a href="#flights"><img class="bring-to-front" src="./images/User.png" alt="User" /></a>
            <h3 class="sml-h3">User 2</h3>
            <p class="sml-p">Chief Financial Officer & President, Global Development</p>
        </div>
        <div>
            <a href="#hotels"><img class="bring-to-front" src="./images/User.png" alt="User" /></a>
            <h3 class="sml-h3">User 3</h3>
            <p class="sml-p">Executive Vice President & Human Resources Officer</p>
        </div>
    </section>
    <section id="vacations">
        <h2 class="sml-h2">584 Hotels - 94 countries - 6 continents</h2>
        <div class="flex-wrapper">
            <div class="flex-item-max4 ">
                <img src="./images/Africa.jpg" alt="Africa">
                <div class="txt-padding">
                    <h3 class="sml-h3">Africa</h3>
                    <button class="sml-text-btn no-focus"><span>View details</span></button>
                </div>
            </div>
            <div class="flex-item-max4">
                <img src="./images/Asia.jpg" alt="Asia">
                <div class="txt-padding">
                    <h3 class="sml-h3">Asia</h3>
                    <button class="sml-text-btn no-focus"><span>View details</span></button>
                </div>
            </div>
            <div class="flex-item-max4">
                <img src="./images/North America.jpg" alt="North America">
                <div class="txt-padding">
                    <h3 class="sml-h3">North America</h3>
                    <button class="sml-text-btn no-focus"><span>View details</span></button>
                </div>
            </div>
            <div class="flex-item-max4">
                <img src="./images/South America.jpg" alt="South America">
                <div class="txt-padding">
                    <h3 class="sml-h3">South America</h3>
                    <button class="sml-text-btn no-focus"><span>View details</span></button>
                </div>
            </div>
        </div>
        <a class="square-to-round-btn clearfix bring-to-front" href="#">View for all continents</a>
    </section>
    <section id="hotels">
        <h2 class="sml-h2">Most Booked Hotels</h2>
        <div class="flex-wrapper">
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./images/hotel-1.jpg" alt="Hilton Slovakia City">
                <div class="txt-padding">
                    <h3 class="sml-h3">Hilton Resort Slovakia</h3>
                    <p class="sml-p">Location: Bratislava, Košice 040 01</p>
                    <p class="hotel-price"><span>Slovakia</span></p>
                    <button class="empty-btn no-focus"><span><a href="Rooms_User.php">VIEW ROOMS</a></span></button>
                </div>
            </div>
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./images/hotel-2.jpg" alt="Hilton Budapest City">
                <div class="txt-padding">
                    <h3 class="sml-h3">Hilton Resort Budapest</h3>
                    <p class="sml-p">Location: Budapest, Hess András 1</p>
                    <p class="hotel-price"><span>Hungary</span></p>
                    <button class="empty-btn no-focus"><span style="cursor:pointer">VIEW ROOMS</span></button>
                </div>
            </div>
            <div class="flex-item-max3 single-hotel bring-to-front">
                <img src="./images/hotel-3.jpg" alt="Hilton Germany City">
                <div class="txt-padding">
                    <h3 class="sml-h3">Hilton Resort Germany</h3>
                    <p class="sml-p">Location: Berlin, Mohrenstraße 30B</p>
                    <p class="hotel-price"><span>Germany</span></p>
                    <button class="empty-btn no-focus"><span style="cursor:pointer">VIEW ROOMS</span></button>
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
    <section id="subscribe" class="bent-shadow corner-shadow">
        <p>Sign up for our free newsletter.</p>
        <form>
            <input type="email" name="email" required="required" autocomplete="off" placeholder="enter your email address...">
            <button class="white-rounded-btn no-focus" style="cursor:pointer">Sign up</button>
        </form>
    </section>
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
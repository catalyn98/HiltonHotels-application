<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hilton Hotel - About</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="scripts/App.js"></script>
    <link rel="stylesheet" href="css/Reset_Default_Proporties.css">
    <link rel="stylesheet" href="css/Layout.css">
    <link rel="stylesheet" type="text/css" href="css/Media_Queries.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/hotel_icon.png"/>
</head>
<body>
    <header class="fullPageHeader">
        <div id="navBar">
            <a href="Home_User.php" id="logo">Hilton Hotels</a>
            <nav class="menu" id="myMenu">
                <ul>
                    <li><a href="Home_User.php">Home</a></li>
                    <li><a href="Home_User.php#services">Team</a></li>
                    <li class="active"><a href="About.php">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li class="icon"><a href="javascript:void(0);" onclick="myResponsiveHamburger()"><i id="hamb-icon" class="fas fa-bars"></i></a></li>
                </ul>
            </nav>
        </div>
        <div class="centeredTitle"><h1>Our story</h1></div>
        <a href="#story" class="scroll-down"><i class="fas fa-angle-down bounce"></i></a>
    </header>
	<button onclick="topFunction()" id="toTop-btn" title="Go to top" class="no-focus bring-to-front"><i class="fas fa-angle-up white-color"></i></button>
    <section class="who-are" id="story">
        <h2 class="sml-h2">Who we are?</h2>
        <p>When Conrad Hilton opened the first hotel to bear the Hilton name in 1925, he aimed to operate the best hotel in Texas. As a result of his commitment, leadership, and innovation, today Hilton is one of the most respected brands in the world.<br>            Conrad Hilton buys The Mobley, a hotel in Cisco, Texas. Over the next few years, he buys other Texas hotels. While business is strong, Mr. Hilton has greater ambitions.<br> Conrad Hilton opens the high-rise Dallas Hilton, the first hotel to
            carry the Hilton name. Since air conditioning hadn’t yet been invented, the elevators, laundry chutes, airshafts, and other non-customer facilities were placed on the building’s west side, so that no guest rooms faced the western sun.<br>            Hilton Worldwide Resorts launches as a vacation-ownership subsidiary, providing its members with premium resorts and exotic vacation experiences. Hilton Hotels Corporation reacquires Hilton International, reuniting the companies for the first
            time in 40 years and expanding Hilton’s portfolio of brands worldwide. LightStay™, the proprietary system of measurement was launched as a Brand standard across the portfolio to calculate sustainability performance across the globe.</p>
    </section>
    <section class="text-image">
        <img src="./images/Building_1.jpg" alt="office">
        <div>
            <h2 class="sml-h2">The first hotel...</h2>
            <p>The hotel chain was founded by Conrad Hilton in 1919, when he bought his first property, the Mobley Hotel, in Cisco, Texas. The first hotel to bear the Hilton name was the Dallas Hilton, a high-rise that opened in Dallas, Texas in 1925.<br>                With construction on the Beirut Hilton finished, the hotel was scheduled to open on April 14, 1975, but the Lebanese Civil War erupted exactly one day before the April 13 Grand Opening date. The hotel never opened and was severely damaged
                during the war, and the building was demolished in the late 1990s. However, a different hotel was established later, under the name "Hilton Beirut Grand Habtoor", in the nearby eastern suburb<br> Later on, the Hilton Chain bought the Metropolitan
                hotel directly facing the Grand Habtoor and renamed it "Hilton Metropolitan". On February 13, 1978, the Sydney Hilton Hotel was the site of one of the few terrorist incidents on Australian soil, when a bomb blast killed three people (two
                council workers and a policeman).<br> The Hilton Nicosia in Nicosia, Cyprus, was the scene of the assassination of Youssef Sebai, an Egyptian newspaper editor and friend of Egyptian President Anwar El Sadat, on February 19, 1978.</p>
        </div>
        <div>
            <h2 class="sml-h2">Hilton todays...</h2>
            <p>In 2017, Hilton announced that it would continue sponsoring McLaren until 2021. Hilton is one of the oldest sponsors of F1 series and has been sponsoring McLaren since 2005. In October 2017, Hilton announced it had committed a total of $50m
                (£37.8m) over five years to its Hilton Africa Growth Initiative to support the continued expansion of its Sub-Saharan African portfolio.
                <br> In March 2018, Hilton opened their first hotel in Serbia. It is a four-star hotel located in Belgrade. In November 2019, Hilton opened their first hotel in Uzbekistan, a five-star hotel located in Tashkent. In 2020, it was reported,
                that Hilton has partnered with Sir Richard Branson's Virgin Hotels to open a resort and casino in Las Vegas using Hilton's Curio collection' to be opened later that year.</p>
        </div>
        <img src="./images/Building_2.jpg" alt="office">
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
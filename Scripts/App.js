/* Toggle between adding and removing the "menuOpen" class to topnav when the user clicks on the icon */
function myResponsiveHamburger() {
    var hamburger = document.getElementById("myMenu");
    var icon = document.getElementById("hamb-icon");
    if (hamburger.className === "menu") {
        hamburger.className += " menuOpen";
    } else {
        hamburger.className = "menu";
    }
    if (icon.className === "fas fa-bars") {
        icon.className = "fas fa-times";
    } else {
        icon.className = "fas fa-bars";
    }
}
/*close the menu if the screen size changes, for example when the user changes
the orientation to portrait or resizes the window*/

window.addEventListener("resize", function() {
    var hamburger = document.getElementById("myMenu");
    var icon = document.getElementById("hamb-icon");
    if (hamburger) {
        if (window.innerWidth > 480) {
            /*closing the menu by removing the class*/
            if (hamburger.className == "menu menuOpen")
                hamburger.className = "menu";
            icon.className = "fas fa-bars";
        }
    }
});

/*BACK TO TOP BUTTON*/
// When the user scrolls down 200px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    var topBtn = document.getElementById("toTop-btn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        if (topBtn)
            topBtn.style.display = "block";
    } else {
        if (topBtn)
            topBtn.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
<h1 align="center">
  Hilton Hotels
</h1>
<p align="center">
  HTML5, CSS3, JavaScript, PHP, MySQL
</p>

<p align="center">
  <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/StackTech.png" />
</p>

# Tech stack
Hilton Hotels uses a number of open source projects to work properly:
* [HTML5](https://www.w3schools.com/html/) - is the standard markup language for creating Web pages.
* [CSS3](https://www.w3schools.com/css/) - is the language we use to style a Web page.
* [JavaScript](https://www.w3schools.com/js/) - is the programming language of the Web.
* [PHP](https://www.w3schools.com/php/) - is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
* [MySQL](https://www.w3schools.com/mysql/) - is a widely used relational database management system (RDBMS).

# Installation
Hilton Hotels application requires a [WAMP](https://download.cnet.com/WampServer-64-Bit/3000-10248_4-75544590.html) server to run.

### Clone the repositories
```sh
$ git clone https://github.com/catalyn98/HiltonHotels-application.git
```

### Set environment variables 
**Download WAMP server and click on *Start All Services*:**
- Once WAMP is installed, launch the WAMP Control Panel.
- Start the Apache and MySQL services by clicking on Start All Services.
<p align="center">
  <img src="https://firebasestorage.googleapis.com/v0/b/licenseproject-c2773.appspot.com/o/wampp.png?alt=media&token=07cc678d-6644-4f99-bff1-59ea658fd96e" />
</p>

**Move or copy the *HiltonHotels* folder to *wamp64/www*:**
- Locate the *HiltonHotels* folder on your computer. Copy or move the *HiltonHotels* folder to the following directory: *wamp64/www*.

**Import the *Hotel.sql* Database:**
- Open your web browser and navigate to `http://localhost/phpmyadmin/index.php`.
- In phpMyAdmin, click on the **Import** tab at the top of the page. Click the **Choose File** button and browse to the location where you saved the *Hotel.sql* file.
- Select the *Hotel.sql* file and click the **Open** button.
- Back in phpMyAdmin, click the **Go** button to import the *Hotel.sql* file and execute the database.

**Access the HiltonHotels Website**
- To access the HiltonHotels website, open your web browser and type one of the following URLs depending on whether you want to access the user or admin interface:
  - Type `http://localhost/HiltonHotels/Home_User.php` in your browser's address bar and press Enter - for user.
  - Type `http://localhost/HiltonHotels/Status_Room_Booking.php` in your browser's address bar and press Enter - for admin.

# Web application screenshots 
| <p align="center">**Home page**</p> | <p align="center">**About us page**</p> | <p align="center">**Contact us page**</p> |
| ------------ | ------------ | ------------ |
| <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/1.Home_User.png" />  |  <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/2.About.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/3.Contact.png" /> |
| <p align="center">**Rooms page**</p> | <p align="center">**Reservation form page**</p> | |
| <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/4.Rooms.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/5.Reservation_User.png" /> | |

# Admin panel screenshots
| <p align="center">**Dashboard**</p> | <p align="center">**Payment page**</p> | <p align="center">**Admin CRUD operation page**</p> |
| ------------ | ------------ | ------------ |
| <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/7.Status Room Booking.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/8.Payment.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/9.Administrator.png" /> |
| <p align="center">**Available Rooms page**</p> | <p align="center">**Add Rooms page**</p> | <p align="center">**Delete Rooms page**</p> |
| <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/10.Available%20Rooms.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/11.Add%20Rooms.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/12.Delete%20Rooms.png" /> |
| <p align="center">**Confirm Reservation page**</p> | <p align="center">**Invoice page**</p> | <p align="center">**Login page**</p> |
| <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/13.Confirm_Reservation.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/14.Invoice.png" /> | <img src="https://github.com/catalyn98/HiltonHotels-application/blob/main/Hilton%20Hotels/screenshots/6.Login_Admin.png" /> |

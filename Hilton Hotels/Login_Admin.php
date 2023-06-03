<?php
    session_start();
    if (isset($_SESSION["user"]))
    header("location:Status_Room_Booking.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hilton Hotel - Login Admin</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Login_Style.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon_admin_page.png"/>
</head>
<body>
    <form method="post">
        <div class='box'>
            <div class='box-form'>
                <div class='box-login-tab'></div>
                <div class='box-login-title'>
                    <div class='i i-login'></div>
                    <h2>LOGIN</h2>
                </div>
                <div class='box-login'>
                    <div class='fieldset-body' id='login_form'>
                        <button onclick="openLoginInfo();" class='b b-form i i-more' title='Info'></button>
                        <p class='field'>
                            <label for='user'>E-MAIL</label>
                            <input type='text' id='user' name='user' title='Username'/>
                            <span id='valida' class='i i-warning'></span>
                        </p>
                        <p class='field'>
                            <label for='pass'>PASSWORD</label>
                            <input type='password' id='pass' name='pass' title='Password'/>
                            <span id='valida' class='i i-close'></span>
                        </p>
                        <input type='submit' id='do_login' value='GET STARTED' title='Get Started'/>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php
    include('Database_connection.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($con, $_POST['user']);
        $mypassword = mysqli_real_escape_string($con, $_POST['pass']);
        $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            $_SESSION['user'] = $myusername;
            header("location:Status_Room_Booking.php");
        } 
		else
        echo '<script>alert("Your Login Name or Password is invalid! Please, try again!") </script>';
    }
?>
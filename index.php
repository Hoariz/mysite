<?php  require_once "controllerUserData.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/index.css">
    <title>Homepage</title>
</head>

<body>
    <label>
        <input type="checkbox">
        <div class="toggle">
            <span class="top_line common"></span>
            <span class="middle_line common"></span>
            <span class="bottom_line common"></span>
        </div>
        <div class="slide">
            <h1>Menu</h1>
            <ul>
                <li><a href="#"> <i class="fas fa-tv"></i>Dashboard</a></li>
                <li><a href="home.php"> <i class="fas fa-bars"></i>My Account</a></li>
                <li><a href="#"> <i class="fas fa-phone"></i>Contact</a></li>
                <li><a href="#"><i class="fas fa-book"></i>About</a></li>
                <li><a href="#"> <i class="fas fa-cogs"></i>settings</a></li>
            </ul>
        </div>
    </label>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">HMB</label>
        <ul>
            <li><a class="active" href="index.php"> <i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-camera"></i>Picture</a></li>
            <li><a href="#"><i class="fas fa-phone"></i>Contact</a></li>
            <li><a href="login-user.php"><i class="fas fa-user"></i>Log in</a></li>
        </ul>
    </nav>
</body>

</html>
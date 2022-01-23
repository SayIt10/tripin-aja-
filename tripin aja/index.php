<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="shotcut icon" href="images/logo_tripinaja.svg">
</head>
<body>
    <div class="nav-container">
       <div class="wrapper container">
           <div class="row">
            <nav class="col-12">
                <div class="logo col-sm-12 ">
                    <a href="index.php"><img src="images/3_Tripinaja 1.svg" alt=""></a>
                </div>
                <ul class="nav-items col-md-">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="order.php">Order</a></li>
                        <li><a href="#">Chat</a></li>
                </ul>
                <ul class="nav-item-btn" style="margin-top:10px;">
                     <?php if(isset($_SESSION['email'])){ ?>
                        <p class="logout" style="font-family: 'Poppins',sans-serif; color:#BCBCBC; font-weight:600;">
                            Halo selamat datang
                            <a href="process/logout_submit.php" style="text-decoration:none; color:white; background-color:#045C9C; border-radius:3px; padding: 10px 20px;">Log Out</a>
                        </p>
                     <?php } else {?>   
                        <li><a href="login.php"><button  class="btn-login">Login</button></a></li>
                        <li><a href="register.php"><button class="btn-register">register</button></a></li>
                     <?php }?>
                 </ul>           
        </nav>
           </div>
       </div>
    </div>

    <div class="header-container">
        <div class="container">
            <div class="row">
                <header class="col-lg-12">
                    <div class="hero-image col-md-6 col-sm-12">
                        <img src="images/home-img-1.png" alt="">
                        <div class="photo-bg"></div>
                    </div>

                    <div class="hero-form col-md-6 col-sm-12">
                        <div class="input-group">
                                <label class="input-group-text"><i class="material-icons">place</i></label>
                                <input type="location" placeholder="set your location" class="form-control" style="border: none;">
                        </div>
                        <div class="input-group">
                            <label class="input-group-text"><i class="material-icons">near_me</i></label>
                            <input type="location" placeholder="search destination" class="form-control" style="border: none;">
                        </div>
                        <div class="input-group">
                            <label class="input-group-text"><i class="material-icons">people</i></label>
                            <input type="number" placeholder="1 people" class="form-control" style="border: none;">
                        </div>
                        <div class="input-group">
                            <div class="btn-group" data-toogle="buttons">
                                <label class="btn btn-transparent ">
                                    <input type="radio" name="option" id="option1" autocomplete="off" checked>
                                    Private Trip
                                </label>
                            </div>
                            <div class="btn-group" data-toogle="buttons" style="margin-left: 40px;">
                                <label class="btn btn-transparent ">
                                    <input type="radio" name="option" id="option2" autocomplete="off">
                                    Open Trip
                                </label>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="btn-group" data-toogle="buttons">
                                <label class="input-group-text">
                                    <i class="material-icons">event</i>
                                </label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="btn-group" data-toogle="buttons" style="margin-left: 40px;">
                                <label class="input-group-text">
                                  <i class="material-icons">nightlight_round</i>
                                </label>
                                <input type="number" class="form-control " placeholder="1 Day Trip">
                            </div>
                        </div>
                        <div class="btn-submit">
                           <input type="submit" value="Get a Trip !">
                        </div>                        
                    </div>
                </header>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
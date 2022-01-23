<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/login.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="shotcut icon" href="images/logo_tripinaja.svg">
    <title>Login</title>
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

     <div class="container">
        <div class="row">
            <header class="col-12">
                <div class="hero-form col-lg-6">
                    <img src="images/main_img_login.png" alt="">
                </div>

                <div class="col-lg-6 left">
                    <!-- start login-->
                        <div class="login">
                            <div class="top">
                                <h3>Log in/Register</h3><br>
                            </div>
                            <form action="process/login_submit.php" method="post">
                                <div class="input-group">
                                    <label for="" class="input-group-text" style="background-color: white; border: none;"><i class="material-icons">email</i></label>
                                    <input type="email" class="form-control" style="border: none;" placeholder="enter your email" name="email" required>
                                </div>
                                <div class="input-group" style="margin-top : 10px;">
                                    <label for="" class="input-group-text" style="background-color: white; border: none;"><i class="material-icons">password</i></label>      
                                    <input type="password" name="password" placeholder="enter your password" style="border:none;" class="form-control" required>
                                </div>
                                <div class="input-submit">
                                    <input type="submit" value="Next" name="login">
                                </div> 
                            </form>
                        </div>
                    <!-- end login-->
                   
                    <div class="line">
                        <img src="images/or_text.jpg" alt="">
                    </div>
                    

                    <div class="bottom">
                        <a href="#"><img src="images/icon/btn-google.png" alt=""></a>
                        <a href="#"><img src="images/icon/btn=facebook.png" alt=""></a>
                        <a href="#"><img src="images/icon/btn-apple.png" alt=""></a>
                    </div>

                </div>
                
            </header>
        </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
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
    <link rel="stylesheet" href="styles/order.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="shotcut icon" href="images/logo_tripinaja.svg">
</head>

<body>
    <div class="container">
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

        <div class="row">
            <div class="col-12">
                <div class="order-head">
                    <i class="material-icons">near_me</i>
                    <p class="">Jakarta Selatan - Gunung Bromo</p>
                    <div class="order-list">
                        <ul>
                            <li>    Start 20 Des 2021</li>
                            <li>    3 Days</li>
                            <li>    1 People</li>
                            <li>    Private Trip</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="content_left">
                    <h4>Facility</h4> 
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Free Meal
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Free Pick-up
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Entertaiment
                    </label>
                  </div>
                  <hr> 
                  <h4>Pick-up Time</h4> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      00.00 - 06.00
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      06.00 - 12.00
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      12.00 - 18.00
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      18.00 - 24.00
                    </label>
                  </div>
                  <hr>
                  <h4>Range Price</h4>
                  <input type="range" class="form-range" min="0" max="10000000" step="0.5" id="customRange3" style="width: 75%;">    
            </div>
            
            <div class="content_right">
                  <h5>Long Elf - Travel</h5>
                  <img src="images/car/image-1.png" alt="">
                  <h6>Road Trip Travel</h6><br>
                  <div class="time">
                      <p>20:00</p>&nbsp;
                      <p><img src="images/icon/Arrow.png" alt=""></p>&nbsp;
                      <p>11:00</p>
                  </div>
            </div>
        </div>

        <hr>
        <!-- footer -->    
        <div class="footer">
          <div class="row">
              <div class="col">
                <div class="logo-img">
                  <a href="index.php"><img src="images/logo_tripinaja.svg" alt=""></a>
                </div>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                </p><br>
                <p>Follow Us</p>
                <div class="img">
                  <a href=""><img src="images/icon/instagram.png" alt=""></a>
                  <a href=""><img src="images/icon/tiktok.png" alt=""></a>
                </div>
              </div>
              <div class="col">
                <h3>Tripinaja</h3><br>
                <a href="#">Career</a><br>
                <a href="#">About</a>
              </div>
              <div class="col">
                <h3>Help</h3><br>
                <a href="#">Term & Condition</a><br>
                <a href="#">Privacy & Policy</a>
              </div>
              <div class="col">
                <h3>Office</h3><br>
                <a href="https://goo.gl/maps/b2ZenkhjsJi97cUH6">Kirana 2 Tower Level 10-A
                  Jl. Boulevard Timur No.88, Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Adm. Jakarta Utara,
                  Prov DKI Jakarta
                  </a><br><br><br>
                  <p>081373464744 <br>
                    support@tripinaja.co.id</p>
              </div>
          </div>
        </div>
    </div>


    <!--scrtipt js-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

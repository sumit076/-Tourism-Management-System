<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <title>Bus status</title>
    <style>
        @media (max-width: 800px) {
            .form input {
                margin: 10px 0;
            }
            .form {
                flex-direction: column;
                align-items: stretch;
            }
        }
        
        @media (max-width: 800px) {
            .navbar-nav {
                margin-left: auto !important;
            }
        }

        .dropdown {
            position: relative;
            display: inline-block;
            }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #0082e6;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 1px;
            z-index: 1;
            }

        .dropdown:hover .dropdown-content {
            display: block;
            }
    </style>


</head>

<body id="page-top">
    <!-- navbar content   -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <img src="l1.jpeg" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
					class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav" style="margin-left: 650px;">

                    <li class="nav-item"><a class="nav-link" href="/starks/home/home.php" style="text-decoration: none;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/home/home.php#routes" style="text-decoration: none;">Routes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/services/index.php" style="text-decoration: none;">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/status/index.php" style="text-decoration: none;">Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contactUs" style="text-decoration: none;">Contact Us</a></li>
                   
                    <?php 
                        if(!isset($_SESSION["fullname"]) || empty($_SESSION["fullname"])) 
                        {
                    ?>
                    <li><a href="/starks/login.php" class="active">Login</a></li>

                    <?php 
                        }
                        else
                        {
                    ?>
                 
                    <div class="dropdown">
                        <span> <li><a href="/starks/login.php" class="active"><?php echo $_SESSION["fullname"] ?></a></li></span>
                            <div class="dropdown-content">
                              <a href="#" style="color: white; padding: 10px" class="active">Profile</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">Travel history</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">Privacy policy</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">About us</a><br>      
                              <a href="/starks/logout.php" style="color: white; padding: 10px" class="active">Logout</a>
                            
                            </div>
                    </div>
                  
                    <?php 
                        }
                    ?>
                
                </ul>
            </div>
        </div>
    </nav>






    <h1 style="margin-left: 100px; margin-top: 30px; font-weight: bold;">Bus Status</h1><br>
    <div class="groove" style="padding: 10px 0px 25px 30px; border-style: groove; margin-left: 50px; margin-right: 50px; margin-top: 0px; margin-bottom: 25px; text-align: center; border-radius: 15px 15px 15px 15px;">
        <br>
        <form>
            <label for="fname">
				<h4 style="font-weight: bold;"> Search by Ticket Number: &nbsp;&nbsp;</h4>
			</label>
            <input style="height: 45px; width: 450px;" type="text" id="fname" name="fname" placeholder="&nbsp;&nbsp; Ticket Number"><br>

            <label for="fname">
				<h6 style="font-weight: inherit;"> OR &nbsp;&nbsp;</h6>
			</label><br>
            <label for="fname">
				<h4 style="font-weight: bold;"> &nbsp;&nbsp;Search by Bus Number: &nbsp;&nbsp;&nbsp;&nbsp;</h4>
			</label>
            <input style="height: 45px; width: 450px;" type="text" id="fname" name="fname" placeholder="&nbsp;&nbsp; Bus Number">
        </form>
        <br>
        <a href="#" class="btn1">Submit</a>
    </div><br><br>



    <!-- footer content  -->
    <footer class="ftco-footer ftco-section" id="contactUs">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>About</b></h3><br>
                        <p>##########################.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <p>####################</p>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-github"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span
										class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4"><br><br>
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>Links</b></h3>
                        <ul class="list-unstyled"><br>
                            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#routes-section"><span class="icon-long-arrow-right mr-2"></span>Routes</a>
                            </li>
                            <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a>
                            </li>
                            <li><a href="#status-section"><span class="icon-long-arrow-right mr-2"></span>Status</a>
                            </li>
                            <li><a href="#login-section"><span class="icon-long-arrow-right mr-2"></span>Login</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>Have a Questions?</b></h3><br>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bangalore, India</span>
                                </li>
                                <li><a href="tel: +91-6718374964"><span class="icon icon-phone"></span><span
											class="text">+91-6718374964</span></a></li>
                                <li><a href="mailto: abcde@gmail.com"><span class="icon icon-envelope"></span><span
											class="text">abcde@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved.</p><br>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

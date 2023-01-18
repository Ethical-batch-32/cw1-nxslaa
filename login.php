<?php session_start();if(isset($_SESSION['email'])){    header("Location: user.php");    exit;}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <!-- External CSS -->
    <link rel="stylesheet" href="./style.css">

    <!-- Bootstrap cdn -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="./faq.js"></script>

    <title>Responsive Pawgroom</title>
</head>

<body>
    <!-- navbar starts here -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar overlayy">
        <div class="container-fluid">
            <a href="/">
                <span><img src="./image/Black And White Business Logo.png " height="30%" width="30%" alt=""></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  active px-4" aria-current="page" href="./index.php"
                            style="color: rgb(24,77,140); font-size: larger; ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="./service.html"
                            style="color:  rgb(24,77,140); font-size: larger; ">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-4" href="./index.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="./index.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="./contact.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="./login.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4" style="padding: 10%;">
        <h3 class="trainingplan">Please Login Here:</h3>
        <hr>

        <form action="submit-login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p>don’t have an account?<a href="./signup.php" style=" font-size: larger; ">Register Now</a></p>
        </form>



    </div>
    <div class="container-fluid my-5 p-0">

        <footer style="background-color: rgb(172,213,221);">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: rgb(24,77,140)"><i
                                class="ri-baidu-line"></i>PawGroom</h5>
                        <p style="color: rgb(24,77,140);;">
                            Your pet deserves to be pampered!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: rgb(24,77,140)">Contact Us</h5>
                        <ul class="list-unstyled mb-0">
                            <a href="https://www.facebook.com/" style="color:  rgb(24,77,140);"
                                class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>

                            <a href="https://www.instagram.com/" style="color:  rgb(24,77,140);"
                                class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>

                            <a href="https://twitter.com/" style="color:  rgb(24,77,140);" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>


                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140);"><i class="ri-phone-fill"></i>+977
                                    9874563210</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140);"><i
                                        class="ri-mail-fill"></i>pawgroominfo@paw.com</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140)"><i
                                        class="ri-home-fill"></i>Chandragiri,Kathmandu</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-1" style="letter-spacing: 2px; color:  rgb(24,77,140);">opening hours</h5>
                        <table class="table" style="color: rgb(24,77,140); border-color: rgb(24,77,140);">
                            <tbody>
                                <tr>
                                    <td>Mon - Fri:</td>
                                    <td>8am - 9pm</td>
                                </tr>
                                <tr>
                                    <td>Sat - Sun:</td>
                                    <td>8am - 1am</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgb(24,77,140); color: bisque;">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">PAWGROOM</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
    <!-- End of .container -->

    <!-- js cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>


</body>





</html>
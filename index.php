<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CAR RENTAL</title>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="content-type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/scrollreveal' rel='stylesheet'>
</head>

<body>



    <?php
    require_once('connection.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        if (empty($email) || empty($pass)) {
            echo '<script>alert("please fill the blanks")</script>';
        } else {
            $query = "select *from users where EMAIL='$email'";
            $res = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['PASSWORD'];
                if (md5($pass) == $db_password) {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;

                } else {
                    echo '<script>alert("Enter a proper password")</script>';
                }
            } else {
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }
    ?>



    <main class="main">
        <header>
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">MoToRs</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="aboutus.html">ABOUT</a></li>
                        <li><a href="services.html">SERVICES</a></li>
                        <li><a href="contactus.html">CONTACT</a></li>

                    </ul>
                </div>
            </div>
        </header>
        <!-- Hero Section -->
        <section class="home" id="home">
            <div class="content">
                <h1>Rent Your <br><span>Dream Car</span></h1>
                <p class="par">Live the life of Luxury.<br>
                    Just rent a car of your wish from our vast collection.<br>Enjoy every moment with your family<br>
                    Join us to make this family vast. </p>
                <button class="join-us"><a href="register.php">JOIN US</a></button>
            </div>

            <div class="form">
                <h2>Login Here</h2>
                <form method="POST">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="pass" placeholder="Enter Password Here">
                    <button class="login-btn" type='submit' value="Login" name="login">Login</button>
                </form>
                <p class="link">Don't have an account?<br>
                    <a href="register.php">Sign up</a> here</a>
                </p>
                <p class="liw">Log in with</p>
                <div class="icons">
                    <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a>
                    <a href="https://myaccount.google.com/"><i class='bx bxl-google'></i></a>
                    <a href="https://www.skype.com/"><i class='bx bxl-skype'></i></a>
                </div>
            </div>

            <!-- <div class="form-container">
                <form action="">
                    <div class="input-box">
                        <span>Location</span>
                        <input type="search" name="" id="" placeholder="Search Places">
                    </div>
                    <div class="input-box">
                        <span>Pick-Up Date</span>
                        <input type="date" name="" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Date</span>
                        <input type="date" name="" id="">
                    </div>
                        <input type="submit" name="" id="" class="btn">
                </form>
            </div> -->
        </section>
        <!-- Ride -->
        <section class="ride section" id="ride">
            <div class="heading">
                <h2>How Its Work</h2>
                <h4>Rent With 3 Easy Steps</h4>
            </div>
            <div class="ride-container">
                <div class="box">
                    <i class='bx bxs-map'></i>
                    <h2>Choose A Location</h2>
                    <p>Analyzing your area, reading about potential customer demographics, and considering where
                        competitors are located are
                        all important aspects to finding and choosing the right location.</p>
                </div>
                <div class="box">
                    <i class='bx bxs-calendar-check'></i>
                    <h2>Pick-Up Date</h2>
                    <p>Pick-Up Date means the date when Guest is to collect the Vehicle as specified in Part A. 'Pick-Up
                        Location' means the
                        location that Guest is to collect the Vehicle from, as specified in Part A.</p>
                </div>
                <div class="box">
                    <i class='bx bxs-calendar-star'></i>
                    <h2>Book A Car</h2>
                    <p>It is a web-based booking system that enables transport carriers to book timeslots for the
                        pick-up and drop-off of
                        containers by road at terminal and depot facilitie</p>
                </div>
            </div>
        </section>
        <!-- About -->
        <section class="about section" id="about">
            <div class="heading">
                <h2>About Motors</h2>
                <h4>Best Car Experience</h4>
            </div>
            <div class="about-container">
                <div class="about-text about-content">
                    <p>MoToRs manages the most important components of a car rental company through a modular network,
                        which can be adapted to any country or size. </p>
                    <p>It connects management of a fleet, people, and business, to make the operations as efficient as
                        possible. Technological solution for fleet
                        management of various sizes, ranging from smaller ones to those bigger. <br><br> Unique
                        operational-controlling software available for use by
                        various brands and subsidiaries with a permanent evaluation of effectiveness, profit and other
                        advantages. Easy and intuitive use with immediately visible results.</p>
                    <a href="aboutus.html" class="learn-more-btn">Learn More</a>
                </div>
                <div class="about-img about-content">
                    <img src="./images/carbg1.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- Reviews -->
        <section class="reviews section" id="reviews">
            <div class="heading">
                <h2>Reviews</h2>
                <h4>What's Our Customers Say</h4>
            </div>
            <div class="reviews-container">
                <div class="box">
                    <div class="rev-img">
                        <img src="./images/rev1.jpg" alt="">
                    </div>
                    <h2>Dylan Wang</h2>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Lorem Ipsum, Dolor Sit Amet Consectetur Adipisicing Elit. Placeat Labore, Sint Cupididate
                        Distinctio Tempora Reiciendis</p>
                </div>
                <div class="box">
                    <div class="rev-img">
                        <img src="./images/rev2.jpg" alt="">
                    </div>
                    <h2>Leonardo Dicaprio</h2>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Lorem Ipsum, Dolor Sit Amet Consectetur Adipisicing Elit. Placeat Labore, Sint Cupididate
                        Distinctio Tempora Reiciendis</p>
                </div>
                <div class="box">
                    <div class="rev-img">
                        <img src="./images/rev3.jpg" alt="">
                    </div>
                    <h2>Kate Winslet</h2>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <p>Lorem Ipsum, Dolor Sit Amet Consectetur Adipisicing Elit. Placeat Labore, Sint Cupididate
                        Distinctio Tempora Reiciendis</p>
                </div>
            </div>
        </section>

        <!-- footer -->
        <footer class="footer">
            <div class="social">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                <a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a>
            </div>
            <div class="links">
                <a href="index.php">HOME</a>
                <a href="aboutus.html">ABOUT</a>
                <a href="services.html">SERVICES</a>
                <a href="contactus.html">CONTACT</a>
            </div>
            <div class="credit">Created by <span>MoToRs</span> | All right reserved &copy; 2023</div>
        </footer>
    </main>

    <!-- ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link To JS -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <script>

    </script>
</body>

</html>
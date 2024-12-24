<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibale" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>


    <!--header section ends -->

    <!-- home section starts -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-001.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel aroud down south galle</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-002.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    <!-- home section ends -->

    <!--services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventures</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>
    <!--services section ends -->

    <!--home about section starts -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>about us</h3>
            <p>Welcome to our travel and tour website, your dedicated guide to uncovering the timeless charm of Galle, Sri Lanka! Nestled on the southern coast of this tropical island, Galle is a city steeped in history, culture, and natural beauty. From its iconic Dutch Fort, a UNESCO World Heritage Site, to its sun-kissed beaches and vibrant local markets, Galle offers a treasure trove of experiences for every traveler.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!--home about section ends -->

    <!--home packages section starts -->
    <section class= "home-packages">
        <h1 class="heading-title"> our packages </h1>

        <div class= "box-container">
            <div class = "box">
                <div class= "image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Embark on unforgettable adventures and tours in Galle, where history, culture, and natural beauty come together to create the ultimate travel experience.</p>
                    <a href= "book.php" class="btn">book now</a>
                </div>
            </div>

            <div class = "box">
                <div class= "image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Embark on unforgettable adventures and tours in Galle, where history, culture, and natural beauty come together to create the ultimate travel experience.</p>
                    <a href= "book.php" class="btn">book now</a>
                </div>
            </div>

            <div class = "box">
                <div class= "image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Embark on unforgettable adventures and tours in Galle, where history, culture, and natural beauty come together to create the ultimate travel experience.</p>
                    <a href= "book.php" class="btn">book now</a>
                </div>
            </div>
            </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
        
    </section>
    <!--home packages section ends -->

    <!--home offer section starts -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% offer</h3>
            <p>Explore Galle’s wonders with up to 50% off on exclusive tours—history, culture, and beauty await at unbeatable prices!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>
    <!--home offer section ends -->

    <!--footer section starts -->
    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask question</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>


            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 091-25 44 190</a>
                <a href="#"> <i class="fas fa-phone"></i> 091-20 40 290</a>
                <a href="#"> <i class="fas fa-envelope"></i> luxecostalline@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Wackwella Rd, Galle , Sri Lanka</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>

            </div>

        </div>
        <div class="credit"> created by <span>Uththara Jayawardana</span> | all rights reserved! </div>



    </section>
    <!--footer section ends -->


    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>

</html>
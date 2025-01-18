<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Website</title>
    <!-- css link -->
    <link rel="icon" type="image/x-icon" href="styles/images/coffee-hero-section.png">
    <link rel="stylesheet" href="styles/style.css">
    <!-- Linking Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- link Swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind link -->
     <link rel="stylesheet" href="js/tailwind.config.js">
</head>

<body>
    <!-- Header / Navbar part start -->
    <header>
        <nav class="navbar">
            <div class="nav-logo">☕ Coffee</div>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#Testimonials">Testimonials</a></li>
                <li><a href="#Gallery">Gallery</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li><button class="strbtn"><a href="login.php">Login</a></button></li>
            </ul>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <!-- Header / Navbar part end -->

    <!-- Hero section part start -->
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <div class="text-content">
                    <h1>Best Coffee</h1>
                    <h2>Make your day great with our special coffee!</h2>
                    <p>Welcome to our coffee paradise where every bean tells a story and every cup sparks joy.</p>
                    <div class="buttons">
                    <a href="welcome.php"><button class="btn order-now">Order Now</button></a>
                    <a href="#Contact"><button class="btn contact-us">Contact Us</button></a>
                    </div>
                </div>
                <div class="image-content">
                    <img src="styles/images/coffee-hero-section.png" alt="Coffee Hero">
                </div>
            </div>
        </section>
        <!-- Hero section part end -->

        <!-- About section part start -->
        <section class="about-us" id ="about">
            <div class="container">
                <div class="image">
                    <img src="styles/images/about-image.jpg" alt="People enjoying coffee">
                </div>
                <div class="content">
                    <h2>ABOUT US</h2>
                    <p>
                        At Coffee House in Berndorf, Germany, we pride ourselves on being a go-to destination for coffee
                        lovers and conversation seekers alike.
                        We're dedicated to providing an exceptional coffee experience in a cozy and inviting atmosphere,
                        where guests can relax, unwind,
                        and enjoy their time in comfort.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section part end -->

        <!-- Menu section part start -->
        <section class="clr-section" id="menu">
            <div class="menu">
                <h1>OUR MENU</h1>
                <div class="menu-container">
                    <div class="menu-row">
                        <div class="menu-item">
                            <img src="styles/images/hot-beverages.png" alt="Hot Beverages">
                            <h3>Hot Beverages</h3>
                            <p>Wide range of steaming hot coffee to make you fresh and light.</p>
                        </div>

                        <div class="menu-item">
                            <img src="styles/images/cold-beverages.png" alt="Cold Beverages">
                            <h3>Cold Beverages</h3>
                            <p>Creamy and frothy cold coffee to make you cool.</p>
                        </div>

                        <div class="menu-item">
                            <img src="styles/images/refreshment.png" alt="Refreshment">
                            <h3>Refreshment</h3>
                            <p>Fruit and icy refreshing drinks to make you feel refreshed.</p>
                        </div>
                    </div>

                    <div class="menu-row">
                        <div class="menu-item">
                            <img src="styles/images/special-combo.png" alt="Special Combos">
                            <h3>Special Combos</h3>
                            <p>Your favorite eating and drinking combinations.</p>
                        </div>

                        <div class="menu-item">
                            <img src="styles/images/desserts.png" alt="Dessert">
                            <h3>Dessert</h3>
                            <p>Satiate your palate and take you on a culinary treat.</p>
                        </div>

                        <div class="menu-item">
                            <img src="styles/images/burger-frenchfries.png" alt="Burger & French Fries">
                            <h3>Burger & French Fries</h3>
                            <p>Quick bites to satisfy your small hunger.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu section part end -->

        <!-- Testimonials section part start -->
        <section id="Testimonials">
            <h2 class="section-title">Testimonials</h2>
            <div class="slider">
                <div class="slides">
                    <div class="slide">
                        <img src="styles\images\KathaMam.jpg" alt="Anthony Thompson">
                        <h3>Ms. Shimul Dey Katha</h3>
                        <p>"Best decaf I've tried! Smooth and <br>flavorful. Arrived promptly."</p>
                    </div>
                    <div class="slide">
                        <img src="styles/images/Tajuddin.jpg" alt="Sarah Johnson">
                        <h3>Md. Tajuddin</h3>
                        <p>"Loved the French roast. Perfectly <br>balanced and rich. Will order again!"</p>
                    </div>
                    <div class="slide">
                        <img src="styles/images/Rupom.jpg" alt="James Wilson">
                        <h3>Md. Shahariyar Ahamed</h3>
                        <p>"Great espresso blend! Smooth and bold <br>flavor. Fast shipping too!"</p>
                    </div>
                    <div class="slide">
                        <img src="styles/images/Moshiur.jpg" alt="Emily Davis">
                        <h3>Md. Moshiur Rahman</h3>
                        <p>"Amazing aroma and taste. Best <br>coffee I've ever had!"</p>
                    </div>
                    <div class="slide">
                        <img src="styles/images/Nahidul.jpg" alt="Michael Lee">
                        <h3>Md. Nahidul Islam Tito</h3>
                        <p>"Superb quality and fast delivery. <br>Highly recommend!"</p>
                    </div>
                </div>
                <div class="arrows">
                    <button class="arrow" id="prev">&#8592;</button>
                    <button class="arrow" id="next">&#8594;</button>
                </div>
                <div class="dots">
                    <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                </div>
            </div>
        </section>




        <!-- <section id="Testimonials">
    <h2 class="section-title">Testimonials</h2>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <img src="styles/images/KathaMam.jpg" alt="Anthony Thompson">
                <h3>Ms. Shimul Dey Katha</h3>
                <p>"Best decaf I've tried! Smooth and <br>flavorful. Arrived promptly."</p>
            </div>
            <div class="slide">
                <img src="styles/images/Tajuddin.jpg" alt="Sarah Johnson">
                <h3>Md. Tajuddin</h3>
                <p>"Loved the French roast. Perfectly <br>balanced and rich. Will order again!"</p>
            </div>
            <div class="slide">
                <img src="styles/images/Rupom.jpg" alt="James Wilson">
                <h3>Md. Shahariyar Ahamed</h3>
                <p>"Great espresso blend! Smooth and bold <br>flavor. Fast shipping too!"</p>
            </div>
            <div class="slide">
                <img src="styles/images/Moshiur.jpg" alt="Emily Davis">
                <h3>Md. Moshiur Rahman</h3>
                <p>"Amazing aroma and taste. Best <br>coffee I've ever had!"</p>
            </div>
            <div class="slide">
                <img src="styles/images/Nahidul.jpg" alt="Michael Lee">
                <h3>Md. Nahidul Islam Tito</h3>
                <p>"Superb quality and fast delivery. <br>Highly recommend!"</p>
            </div>
        </div>
        <div class="arrows">
            <button class="arrow" id="prev">&#8592;</button>
            <button class="arrow" id="next">&#8594;</button>
        </div>
        <div class="dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
            <span class="dot" data-index="3"></span>
            <span class="dot" data-index="4"></span>
        </div>
    </div>
</section> -->




        <!-- Testimonials section part end -->

        <!-- Gallery section part start  -->
        <section id="Gallery">
            <div class="text-style">
                <h2>My Gallery</h2>
            </div>
            <div class="gallery">
                <div class="gallery-item">
                    <img src="styles/images/gallery-1.jpg" alt="Coffee Cup">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-2.jpg" alt="Breakfast Plate">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-3.jpg" alt="Smoothies">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-4.jpg" alt="Egg and Toast">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-5.jpg" alt="Stuffed Paratha">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-6.jpg" alt="Coffee with Croissant">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-7.jpg" alt="Coffee with Croissant">
                </div>
                <div class="gallery-item">
                    <img src="styles/images/gallery-8.jpg" alt="Coffee with Croissant">
                </div>
                <!-- <div class="gallery-item">
                    <img src="styles/images/gallery-9.jpg" alt="Coffee with Croissant">
                </div> -->
            </div>
        </section>
    </main>
    <!-- Gallery section  part end  -->

    <!-- Footer section part start -->
    <footer class="footer-design" id="Contact">
        <div class="container1">
            <h1 class="text-style">Contact Us</h1>
            <div class="content1">
                <div class="contact-info1">
                    <p><i class="fa fa-map-marker"></i> 123 Campsite Avenue, Wilderness, CA 98765</p>
                    <p><i class="fa fa-envelope"></i> <a
                            href="mailto:info@coffeeshopwebsite.com">info@coffeeshopwebsite.com</a></p>
                    <p><i class="fa fa-phone"></i> (123) 456-78909</p>
                    <p><i class="fa fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
                    <p><i class="fa fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p>
                    <p><i class="fa fa-clock"></i> Sunday: Closed</p>
                    <p><i class="fa fa-globe"></i> <a href="https://www.tajuddin.com">www.tajuddin.com</a>
                    </p>
                </div>
                <div class="contact-form1">
                    <form id="contactForm1">
                        <input type="text" id="name" placeholder="Your name" required>
                        <input type="email" id="email" placeholder="Your email" required>
                        <textarea id="message" placeholder="Your message" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section part end -->

    <!-- js link -->
    <script src="js/script.js"></script>
   

    <!-- Linking Swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>


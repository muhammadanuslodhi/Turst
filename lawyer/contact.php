<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/bootstrap-slider.min.css" />








    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Testimonial  Slider CSS -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

    <title>Responsive navbar with search and login - Bedimcode</title>
</head>

<body>

<header class="header" id="header">
      <nav class="nav container">
         <a href="index.php" class="nav__logo">
            <img class="img-fluid" src="assets/img/logo.png" alt="">
         </a>

         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="index.php" class="nav__link">Home</a>
               </li>

               <li class="nav__item">
                  <a href="photo.php" class="nav__link">Photo Gallery</a>
               </li>

               <li class="nav__item">
                  <a href="blog.php" class="nav__link">Blog</a>
               </li>

               <li class="nav__item">
                  <a href="contact.php" class="nav__link">Contact Us</a>
               </li>

               <li class="nav__item">
                  <a href="register.php" class="nav__link">Appointments</a>
               </li>
            </ul>

            <!-- Close button -->
            <div class="nav__close" id="nav-close">
               <i class="ri-close-line"></i>
            </div>
         </div>

         <div class="nav__actions">
            <!-- Search button -->
            <i class="ri-search-line nav__search" id="search-btn"></i>

            <!-- Login button -->
            <i class="ri-user-line nav__login" id="login-btn"></i>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </div>
      </nav>
   </header>

   <!--==================== SEARCH ====================-->
   <div class="search" id="search">
      <form action="" class="search__form">
         <i class="ri-search-line search__icon"></i>
         <input type="search" placeholder="What are you looking for?" class="search__input">
      </form>

      <i class="ri-close-line search__close" id="search-close"></i>
   </div>



   <!--==================== LOGIN ====================-->
   <div class="login" id="login">
      <form action="" class="login__form">
         <h2 class="login__title">Log In</h2>

         <div class="login__group">
            <div>
               <label for="email" class="login__label">Email</label>
               <input type="email" placeholder="Write your email" id="email" class="login__input">
            </div>

            <div>
               <label for="password" class="login__label">Password</label>
               <input type="password" placeholder="Enter your password" id="password" class="login__input">
            </div>
         </div>

         <div>
            <p class="login__signup">
               You do not have an account? <a href="#">Sign up</a>
            </p>

            <a href="#" class="login__forgot">
               You forgot your password
            </a>

            <button type="submit" class="login__button">Log In</button>
         </div>
      </form>

      <i class="ri-close-line login__close" id="login-close"></i>
   </div>



    <!-- Navbar end -->

    <!-- Hero start -->
    <div class="container-fluid mt-5 p-0">
        <div class="page-banner">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-text text-center">
                            <h1 class="white-text">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="attorney">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-normal">
                        <h2>Contact Form</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <form action="" class="form-horizontal cform-1" method="POST">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea name="" type="message" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" value="submit" class="btn btn-success" name="form_contact">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-5">
                    <div class="google-map">
                        <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d69611.33718144716!2d66.95995335476188!3d24.860734300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e1!3m2!1sen!2s!4v1711050532191!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <footer class="footer-bg">
   <div class="container">
      <div class="row">
         <div class="col-sm-6 col-md-3 col-lg-3 footer-col">
            <h3>About Us</h3>
            <p>We are a dedicated team of lawyers committed to providing exceptional legal services. Our expertise spans various areas of law, ensuring our clients receive the best possible representation and guidance.</p>
         </div>

         <div class="col-sm-6 col-md-3 col-lg-3 footer-col">
            <h3>Latest Court News</h3>
            <div class="news-item">
               <div class="news-title"><a href="">New ruling on evidence in criminal cases</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">Court clarifies rules on witness testimony</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">Landmark decision on property rights announced</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">Supreme Court hears landmark case on privacy rights</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">Court overturns previous ruling on criminal defense</a></div>
            </div>
         </div>

         <div class="col-sm-6 col-md-3 col-lg-3 footer-col">
            <h3>Popular Legal News</h3>
            <div class="news-item">
               <div class="news-title"><a href="">New legislation introduced for criminal justice reform</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">High-profile case brings attention to judicial biases</a></div>
            </div>
            <div class="news-item">
               <div class="news-title"><a href="">Legal community reacts to recent Supreme Court decisions</a></div>
            </div>
         </div>

         <div class="col-sm-6 col-md-3 col-lg-3 footer-col">
            <h3>Contact Us</h3>
            <div class="contact-item">
               <div class="icon"><i class="fa fa-map-marker"></i></div>
               <div class="text p-0">Nazimabad, Karachi</div>
            </div>
            <div class="contact-item">
               <div class="icon"><i class="fa fa-phone"></i></div>
               <div class="text p-0">123-456-7878</div>
            </div>
            <div class="contact-item">
               <div class="icon"><i class="fa fa-regular fa-envelope"></i></div>
               <div class="text p-0">info@yourwebsite.com</div>
            </div>
         </div>
      </div>
   </div>
</footer>









    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Initialize the carousel -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap JQuery Plugin -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>

</body>

</html>

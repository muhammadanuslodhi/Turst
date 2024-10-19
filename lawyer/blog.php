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
                            <h1 class="white-text">Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="col-md-12">
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100" src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-1.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Audit Reveals Lack of Justification for Emergency Legal Grants</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="https://demo.phpscriptpoint.com/lawyer/category/legal-updates">Legal Updates</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>An audit has found that the recent emergency grant of $300,000 to Asons was made without a clear rationale, raising questions about accountability in legal funding. Experts are urging a review of the grant process to prevent misuse of public funds.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100" src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>High Court Affirms Challenge on Environmental Legal Costs</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Environmental Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>The High Court has upheld a challenge regarding the rising costs associated with environmental litigation. This decision is seen as a significant win for environmental activists seeking fair treatment under the law.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100" src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-3.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Legal Clerk Sentenced for Embezzling $300,000 from Law Firm</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Legal Ethics</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>A former legal clerk was sentenced to prison for stealing $300,000 from a prominent law firm. The case highlights the importance of internal controls and ethical practices within legal institutions.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100" src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-4.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Legal Executives Call for Regulatory Changes in ABS</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Legal Regulation</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>Legal executives are advocating for changes to the regulations governing Alternative Business Structures (ABS) to enhance transparency and ensure better protection for clients.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100" src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-5.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Commercial Property: Building Work Disputes on the Rise</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Property Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>Recent reports indicate an increase in disputes related to building work in commercial properties, prompting legal experts to discuss the need for clearer regulations and dispute resolution mechanisms.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pagination">
                        <span class="disabled"><< Previous</span>
                        <span class="current">1</span>
                        <a href="blog-2.php">2</a>
                        <a href="">3</a>
                        <a href="blog-2.html">next >></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="slidebar w-100">
                    <div class="widget widget-search">
                        <form action="#" method="post">
                            <input type="text" name="" placeholder="Search">
                            <button type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget-search">
                        <h4>Categories</h4>
                        <ul class="p-0">
                            <li><a href="">Litigation funding</a></li>
                            <li><a href="">Personal Injury</a></li>
                            <li><a href="">Private Client</a></li>
                            <li><a href="">Property</a></li>
                            <li><a href="">Risk and compliance</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-search">
                        <h4>Recent Posts</h4>
                        <ul class="p-0">
                            <li><a href="">Insurers toast new discount rate plan</a></li>
                            <li><a href="">Insurers toast new discount rate plans</a></li>
                            <li><a href="">Holiday sickness claims farmer stripped of licence</a></li>
                            <li><a href="">E-filing scheme held up but HMCTS denies any data security risk</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-search">
                        <h4>Popular Posts</h4>
                        <ul class="p-0">
                            <li><a href="">Audit reveals 'no rationale' for emergency 300k Asons grant</a></li>
                            <li><a href="">Insurers toast new discount rate plan</a></li>
                            <li><a href="">Private Client</a></li>
                            <li><a href="">Insurers toast new discount rate plans</a></li>
                            <li><a href="">Holiday sickness claims farmer stripped of licence</a></li>
                        </ul>
                    </div>
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

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
                            <img class="img-fluid w-100"
                                src="https://demo.phpscriptpoint.com/lawyer/assets/uploads/news-6.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Residential Property: Don't Write Off Leasehold Just Yet</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="#">Property Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>Despite ongoing debates about leasehold properties, recent legal rulings emphasize their viability in residential markets. Legal experts argue that understanding leasehold rights can protect buyers from unforeseen liabilities, making them a valid option for homeownership.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100"
                                src="https://www.theepochtimes.com/_next/image?url=https%3A%2F%2Fimg.theepochtimes.com%2Fassets%2Fuploads%2F2024%2F09%2F12%2Fid5723186-09102024-DSC08867-RFK-JR-1080x720.jpg&w=1200&q=75" alt="">
                        </div>
                        <div class="text">
                            <h3>Wisconsin Supreme Court Rejects RFK Jr. Bid to Get His Name Off State Ballot</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Election Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>The Wisconsin Supreme Court recently ruled against RFK Jr.'s attempt to remove his name from the ballot, citing adherence to state election laws. This decision underscores the importance of compliance with electoral procedures and the implications of candidacy in political campaigns.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100"
                                src="https://www.theepochtimes.com/_next/image?url=https%3A%2F%2Fimg.theepochtimes.com%2Fassets%2Fuploads%2F2020%2F10%2F06%2Fbarrett-1-700x420.jpg&w=1200&q=75" alt="">
                        </div>
                        <div class="text">
                            <h3>How Justice Barrett Carved Out a Unique Voice on the Supreme Court</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Judicial Commentary</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>Justice Amy Coney Barrett has established herself as a distinct voice on the Supreme Court, focusing on originalism and textualism in her opinions. Her approach has sparked discussions on the role of personal beliefs in judicial decision-making and its impact on legal precedents.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100"
                                src="https://www.theepochtimes.com/_next/image?url=https%3A%2F%2Fimg.theepochtimes.com%2Fassets%2Fuploads%2F2024%2F06%2F24%2Fid5674249-GettyImages-2154182627_web-1080x720.jpg&w=1200&q=100" alt="">
                        </div>
                        <div class="text">
                            <h3>Nearly 50 Percent of US Homes Remain Unsold for at Least 60 Days: Report</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Real Estate Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>A recent report indicates that a significant portion of US homes is lingering on the market for over 60 days. This trend raises concerns about the legal implications for sellers, including disclosures and contractual obligations, as they navigate a challenging real estate landscape.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image-holder">
                            <img class="img-fluid w-100"
                                src="https://www.theepochtimes.com/_next/image?url=https%3A%2F%2Fimg.theepochtimes.com%2Fassets%2Fuploads%2F2024%2F02%2F02%2Fid5579181-OxyContin-LSedit-1080x720.jpg&w=1200&q=75" alt="">
                        </div>
                        <div class="text">
                            <h3>Kentucky Sues Express Scripts for Alleged Role in Fueling Opioid Crisis</h3>
                            <ul class="status p-0">
                                <li><i class="fa fa-tag"></i>Category: <a href="">Health Law</a></li>
                                <li><i class="fa fa-calendar"></i>Date: 05-09-2017</li>
                            </ul>
                            <p>Kentucky has initiated legal action against Express Scripts, alleging that the pharmacy benefit manager played a significant role in exacerbating the opioid crisis. This lawsuit reflects growing accountability for pharmaceutical practices and their effects on public health.</p>
                            <button class="button">
                                <a href="">Read More</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="pagination">
                        <a href="blog.html"><< Previous</a>
                        <a href="blog.html">1</a>
                        <span class="current">2</span>
                        <a href="blog.html">3</a>
                        <a href="">next >></a>
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
                            <li><a href="">Litigation Funding</a></li>
                            <li><a href="">Personal Injury</a></li>
                            <li><a href="">Private Client</a></li>
                            <li><a href="">Property</a></li>
                            <li><a href="">Risk and Compliance</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-search">
                        <h4>Recent Posts</h4>
                        <ul class="p-0">
                            <li><a href="">Insurers Toast New Discount Rate Plan</a></li>
                            <li><a href="">Insurers Toast New Discount Rate Plans</a></li>
                            <li><a href="">Holiday Sickness Claims Farmer Stripped of Licence</a></li>
                            <li><a href="">E-filing Scheme Held Up But HMCTS Denies Any Data Security Risk</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-search">
                        <h4>Popular Posts</h4>
                        <ul class="p-0">
                            <li><a href="">Audit Finds 'No Rationale' for Emergency 300k Asons Grant</a></li>
                            <li><a href="">Insurers Toast New Discount Rate Plan</a></li>
                            <li><a href="">Private Client</a></li>
                            <li><a href="">Insurers Toast New Discount Rate Plans</a></li>
                            <li><a href="">Holiday Sickness Claims Farmer Stripped of Licence</a></li>
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

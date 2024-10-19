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

   <!--==================== HEADER ====================-->
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
        <form action="" method="POST" class="login__form">
            <h2 class="login__title">Log In</h2>

            <?php if (isset($error)): ?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php endif; ?>

            <div class="login__group">
                <div>
                    <label for="email" class="login__label">Email</label>
                    <input type="email" placeholder="Write your email" id="email" class="login__input" name="email" required>
                </div>

                <div>
                    <label for="password" class="login__label">Password</label>
                    <input type="password" placeholder="Enter your password" id="password" class="login__input" name="password" required>
                </div>
            </div>

            <div>
                <p class="login__signup">
                    You do not have an account? <a href="#">Sign up</a>
                </p>

                <a href="#" class="login__forgot">You forgot your password</a>

                <button type="submit" class="login__button">Log In</button>
            </div>
        </form>

        <i class="ri-close-line login__close" id="login-close"></i>
    </div>



   <!-- Navbar end -->

   <div class="container-fluid p-0 mt-5">
   <div class="w-100">
      <!-- Carousel wrapper -->
      <div id="carouselExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
         <!-- Indicators -->
         <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselExample" data-mdb-slide-to="0" class="active"
               aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselExample" data-mdb-slide-to="1"
               aria-label="Slide 2"></button>
         </div>

         <!-- Inner -->
         <div class="carousel-inner">
            <!-- First Slide -->
            <div class="carousel-item active h-90 position-relative slide-left">
               <img src="assets/img/slider-2.jpg" class="img-fluid d-block w-100" alt="Legal Consultation" />

               <!-- Card Overlay -->
               <div class="card-overlay">
                  <h2>Your Trusted Legal Partner</h2> <!-- Changed -->
                  <h3>Providing Tailored Solutions for Every Case</h3> <!-- Changed -->
                  <p>Our dedicated team ensures you receive the best legal support.<br> Contact us for a personalized approach.</p> <!-- Changed -->
                  <a href="#" class="btn btn-flat">Learn More</a> <!-- Changed -->
               </div>
            </div>

            <!-- Second Slide -->
            <div class="carousel-item h-90 position-relative slide-right">
               <img src="assets/img/hero2.jpg" class="img-fluid d-block w-100"
                  alt="Expert Legal Consultation" />

               <!-- Card Overlay -->
               <div class="card-overlay">
                  <h2>Comprehensive Legal Guidance</h2> <!-- Changed -->
                  <h3>Your Rights, Our Priority</h3> <!-- Changed -->
                  <p>Expert legal consultation for your specific needs.<br> We are here to help you navigate through legal challenges.</p> <!-- Changed -->
                  <a href="#" class="btn btn-flat">Discover More</a> <!-- Changed -->
               </div>
            </div>
         </div>

         <!-- Controls -->
         <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-mdb-target="#carouselExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
      <!-- Carousel wrapper -->
   </div>
</div>

   <!--==================== Service 1 start ====================-->


   <section class="service-1">
      <div class="container">
         <div class="row text-center pt-5">
            <div class="col-md-12">
               <div class="heading mb-5">
                  <h2>Our Services</h2>
                  <p>We Are Here to Provide You Awesome Service Always</p>
               </div>
            </div>
         </div>


         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow">
                     <img src="assets/img/card-1.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">FAMILY LAW</h5>
                     <p class="card-text">
                        Endangered Asian apex predators, distinctive orange coats, black stripes, threatened by
                        habitat loss, poaching.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow">
                     <img src="assets/img/card-2.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">MEDICAL LAW</h5>
                     <p class="card-text text-justify">Iconic Arctic carnivores with white fur, powerful limbs, and
                        excellent
                        swimming abilities, threatened by climate change</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow">
                     <img src="assets/img/card-3.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">PROPERTY LAW</h5>
                     <p class="card-text">Adorable arboreal mammals with reddish-brown fur, native to the Himalayas,
                        facing habitat destruction and poaching.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow">
                     <img src="assets/img/card-4.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">INSURANCE LAW</h5>
                     <p class="card-text">
                        Golden-coated carnivores and pride in the animal kingdom roam the African grassland,
                        symbolic of strength and pride.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow">
                     <img src="assets/img/card-5.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">EDUCATION LAW</h5>
                     <p class="card-text">
                        Golden-coated carnivores and pride in the animal kingdom roam the African grassland,
                        symbolic of strength and pride.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow">
                     <img src="assets/img/card-6.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">TRANSPORTATION LAW</h5>
                     <p class="card-text">
                        Golden-coated carnivores and pride in the animal kingdom roam the African grassland,
                        symbolic of strength and pride.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow">
                     <img src="assets/img/card-7.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">TRADE LAW</h5>
                     <p class="card-text">
                        Golden-coated carnivores and pride in the animal kingdom roam the African grassland,
                        symbolic of strength and pride.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow">
                     <img src="assets/img/card-8.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body">
                     <h5 class="card-title font-weight">CRIMINAL LAW</h5>
                     <p class="card-text">
                        Golden-coated carnivores and pride in the animal kingdom roam the African grassland,
                        symbolic of strength and pride.</p>
                     <a href="#" class="btn p-0">READ MORE >></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>




   <!--==================== Service 1 end ====================-->



   <!--==================== Service 2 start ====================-->



   <section class="service-2">
      <div class="container">
         <div class="row text-center pt-5">
            <div class="col-md-12">
               <div class="heading mb-5">
                  <h2>Our Expert Attorneys Services</h2>
                  <p>Meet with All Our Qualified Attorneys</p>
               </div>
            </div>
         </div>


         <div class="row pb-5">
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow card-height">
                     <img src="assets/img/law-1.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title font-weight">Peter Robertson</h5>
                     <p class="card-text">Criminal Lawyer</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow card-height">
                     <img src="assets/img/law-2.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title font-weight">Tom Steward</h5>
                     <p class="card-text">Property Lawyer</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card w-100">
                  <div class="overflow card-height">
                     <img src="assets/img/law-3.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title font-weight">MARK CRIME</h5>
                     <p class="card-text">Medical Lawyer</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
               <div class="card col-md-w-100">
                  <div class="overflow card-height">
                     <img src="assets/img/law-4.jpg" class="card-img-top h-14rem img-fluid zoom object-fit-cover"
                        alt="...">
                  </div>
                  <div class="card-body text-center">
                     <h5 class="card-title font-weight">JOHN SMITH</h5>
                     <p class="card-text">Divorce Lawyer</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--==================== Service 2 end ====================-->


   <!--==================== Service 3 start ====================-->
   <section class="service-3 pt-5 pb-5">
   <div class="container-fluid text-center">
      <div class="row text-center ">
         <div class="col-md-12">
            <div class="heading mb-5">
               <h2>Testimonials</h2>
               <p>Our Happy Clients Tell About Us</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="container">
            <div class="mobile-slider">
               <div class="card-container">
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://cdn.pixabay.com/photo/2024/10/04/04/42/ai-generated-9095362_640.jpg" alt="">
                     </div>
                     <div class="para">
                        <h3>Successful Verdict in Criminal Case</h3>
                        <p>“I am grateful for the hard work that led to my acquittal in a challenging criminal case.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://cdn.pixabay.com/photo/2018/09/25/09/17/sale-3701777_640.jpg" alt="">
                     </div>
                     <div class="para">
                        <h3>Property Dispute Resolution</h3>
                        <p>“Thanks to my attorney, we reached a fair settlement in our property dispute.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;"  src="https://images.unsplash.com/photo-1542884841-9f546e727bca?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fE1lZGljYWwlMjBNYWxwcmFjdGljZSUyMENhc2UlMjBXaW58ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Medical Malpractice Case Win</h3>
                        <p>“My lawyer’s expertise was crucial in winning my medical malpractice lawsuit.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://plus.unsplash.com/premium_photo-1661540409860-fe00bb21a51c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8U3VjY2Vzc2Z1bCUyMERpdm9yY2UlMjBQcm9jZWVkaW5ncyUyMGNhc2V8ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Successful Divorce Proceedings</h3>
                        <p>“I couldn't have navigated my divorce without the support and guidance I received.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://plus.unsplash.com/premium_photo-1689750366455-7e7b450e32a7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fENoaWxkJTIwQ3VzdG9keSUyMENhc2UlMjBSZXNvbHV0aW9uJTIwd2hpdGV8ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Child Custody Case Resolution</h3>
                        <p>“Thanks to my attorney, I secured custody of my children in a tough battle.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://cdn.pixabay.com/photo/2024/07/28/13/13/ai-generated-8927480_640.png" alt="">
                     </div>
                     <div class="para">
                        <h3>Winning a Personal Injury Claim</h3>
                        <p>“My attorney was instrumental in winning my personal injury claim.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://cdn.pixabay.com/photo/2022/01/20/17/51/office-desk-6952919_640.jpg" alt="">
                     </div>
                     <div class="para">
                        <h3>Positive Outcome in a Business Litigation</h3>
                        <p>“The legal team ensured a favorable outcome in our business litigation.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://images.unsplash.com/photo-1666214280557-f1b5022eb634?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fEZyYXVkJTIwQ2FzZSUyMFN1Y2Nlc3NmdWxseSUyMERpc21pc3NlZHxlbnwwfHwwfHx8MA%3D%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Fraud Case Successfully Dismissed</h3>
                        <p>“Thanks to my attorney’s diligence, my fraud charges were dismissed.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://plus.unsplash.com/premium_photo-1687948178397-30c294daa6f9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8RWZmZWN0aXZlJTIwRGVmZW5zZSUyMGluJTIwVHJhZmZpYyUyMFZpb2xhdGlvbiUyMENhc2V8ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Effective Defense in Traffic Violation Case</h3>
                        <p>“I appreciated the effective defense in my traffic violation case, leading to a dismissal.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://images.unsplash.com/flagged/photo-1553028826-ccdfc006d078?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8RmF2b3JhYmxlJTIwU2V0dGxlbWVudCUyMGluJTIwRW1wbG95bWVudCUyMERpc3B1dGV8ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Favorable Settlement in Employment Dispute</h3>
                        <p>“My employment dispute was settled favorably, thanks to my legal representation.”</p>
                     </div>
                  </div>
                  <div class="card-inner">
                     <div class="img overflow">
                        <img class="img-fluid zoom object-fit-cover" style="height:180px;" src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fEVmZmVjdGl2ZSUyMExlZ2FsJTIwU3VwcG9ydCUyMER1cmluZyUyMEJhbmtydXB0Y3l8ZW58MHx8MHx8fDA%3D" alt="">
                     </div>
                     <div class="para">
                        <h3>Effective Legal Support During Bankruptcy</h3>
                        <p>“My attorney provided excellent support during my bankruptcy proceedings.”</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


   <!--==================== Service 3 end ====================-->


   <!--==================== footer 4 start ====================-->
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

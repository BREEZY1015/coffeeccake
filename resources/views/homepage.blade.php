
@extends('homepage.layouts.app')
 
@section('title', 'Homepage')
 
@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"> 
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
          <h2 data-aos="fade-up" class="font-effect-shadow" >Where Warmth and Sweetness Blends</h2>
          <p data-aos="fade-up" data-aos-delay="100"></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Order Now!</a>
            <a href="https://www.youtube.com/watch?v=FdsH-k_4H6k" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/cbg.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="200">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/123456.jpg) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                CoffeeCaepCake Bakery -Since 2018-
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Mission: We Provide quality pastries, and delicious bakery products that are affordable and accessible to the consumers especially the masses.</li>
                <li><i class="bi bi-check2-all"></i> Vission: To be Butuan's preferred choice for Cakes, bakery food products by delivering a portfolio of high quality, high value bakery products which are delightfully tasty.</li>
                <li><i class="bi bi-check2-all"></i> Core Values: Providing Excellent Costumer Service, Baking Quality Products, Maintining Safe and Sanitary Environment, Adhering to Safety Food Regulations and Upholding Ethical Standards</li>
              </ul>
              <p>
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=QfN5iJPEXg4" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose CoffeeCaepCake?</h3>
               <p>
                Listed as the Best bakery in Butuan
              </p>
              <p>
            CoffeCaepCake Bakery aims to bring the best cake to the people in Butuan. We wish to bake for everyone so they may savor the heartfelt delight in the recipes of our cakes. We want our cakes to be an everlasting moment of joy in their memories, be it for a birthday, wedding, or any other party or special event.
              </p>
              <div class="text-center">
                <a href="https://www.facebook.com/profile.php?id=100057389083010/" target="_blank" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-gem"></i>
                  <h4></h4>
                  <p>Our cakes are moist, soft, and Tasty. All of our gourmet cakes are frosted with fresh whipped cream to ensure the softness of the texture. Double Chocolate Crunch, Fresh Strawberry Shortcake and Hojicha White Chocolate are no doubts the crowd's favourite!</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Ullamco laboris ladore pan</h4>
                  <p>Birthday cakes are the best cakes in the world. They aren’t like regular cakes, they are intrinsically special. We are aware of how crucial it is to have a cake that is beautiful, delicious, and affordable. Since then, we have offered fair and reasonable prices for all of your cakes.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4></h4>
                  <p>We are aware of how crucial it is to budget your money and choose a cake that is both affordable and deserving. At Coffee Cake Bakery, we guarantee that every peso you spend is worthwhile. All of our cakes were made with excellent ingredients and quality.
                  </p>
                  <h4></h4>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          {{-- <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item --> --}}

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>CoffeecCaepCake Bakery</h2>
          <p>Check Our <span>Design Cakes</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4></h4>
            </a>
          </li><!-- End tab nav item -->

          {{-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Wedding</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Holidays</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Special Events</h4>
            </a>
          </li><!-- End tab nav item --> --}}

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p></p>
              <h3>We Accept Customized Cakes</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-5 menu-item">
                <a href="assets/img/menu/Cake-1.jpg" class="glightbox"><img src="assets/img/menu/Cake-1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Simple Design Cake</h4>
                <p class="ingredients">
                  Choco Moist Cake
                </p>
                <p class="price">
                   ₱900
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-3 menu-item">
                <a href="assets/img/menu/Cake-2.png" class="glightbox"><img src="assets/img/menu/Cake-2.png" class="menu-img img-fluid" alt=""></a>
                <h4>Birthday Cake</h4>
                <p class="ingredients">
                    2 Layers Choco cake
                </p>
                <p class="price">
                  ₱3,500
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-6.jpg" class="glightbox"><img src="assets/img/menu/Cake-6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Chocolate Birthday Cake</h4>
                <p class="ingredients">
                  Topped with Cupcake
                </p>
                <p class="price">
                      ₱1,500
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-4" class="glightbox"><img src="assets/img/menu/Cake-4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Make-up Cake</h4>
                <p class="ingredients">
                  Customized Flavor
                </p>
                <p class="price">
                  ₱2,000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-5.jpg" class="glightbox"><img src="assets/img/menu/Cake-5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Bbau Shark Cake</h4>
                <p class="ingredients">
                  Customized cake
                </p>
                <p class="price">
                  ₱2,000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-3.jpg" class="glightbox"><img src="assets/img/menu/Cake-3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Anime OnePiece Cake</h4>
                <p class="ingredients">
                  Customized Flavor
                </p>
                <p class="price">
                  ₱1,500
                </p>
              </div>
              
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-7.jpg" class="glightbox"><img src="assets/img/menu/Cake-7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Simple Wedding Cake</h4>
                <p class="ingredients">
                  Customized Flavor
                </p>
                <p class="price">
                  ₱6,000
                </p>
              </div>

            <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-8.png" class="glightbox"><img src="assets/img/menu/Cake-8.png" class="menu-img img-fluid" alt=""></a>
                <h4>Simple Cake</h4>
                <p class="ingredients">
                  Costumized Cake
                </p>
                <p class="price">
                  ₱500
                </p>
              </div>

                <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/Cake-9.jpg" class="glightbox"><img src="assets/img/menu/Cake-9.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Cocomelon Cake</h4>
                <p class="ingredients">
                  Costumized Cake
                </p>
                <p class="price">
                  ₱2,500
                </p>
              </div>
              <!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

 
      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Costumers <span>Review</span></p>
        </div>

        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        We had CoffeeCaepCake provide our wedding cake and several types of cookies for our recent wedding. CoffeeCaepCake has been our go-to bakery for years– and we would not trust anyone else to make our cake! Their items are always fresh and the icing is not the overly sweet kind you may find at some places. CoffeeCaeCake took the time to sit down with us for our tasting and to plan out our cake design and the number of cookies. The cake was beautiful and absolutely delicious! They perfectly executed the design that we wanted and it turned out to be very elegant. And the cake was so flavorful — like we knew it would be! We received compliments all night from our guests about how much they enjoyed the cake! We would highly recommend this bakery!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Jay-no Juventod</h3>
                      <h4></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/Costumer-1.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Everything in this place looks so good. Very clean, friendly atmosphere. I tried a numerous amount of things and wasn’t disappointed in anything.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>James Ried</h3>
                      <h4></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/Costumer-2.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        I placed a very large assorted Christmas cookie order for this Christmas, and I can honestly say, the cookies were the BEST cookies I have ever had in my life. I made up cookie trays for the members of my family as part of their Christmas gifts. Thank you guys for making me so proud to give your pastries! I included the tag off the box in everyone’s tray, so that they, too, would know just where I got these amazing cookies. I can’t tell you how much we all enjoyed them. I’ll be coming back every year to reorder, as well as getting all of my cakes and pastries for every family event during the year too from CoffeeCaepCake. Give them a try, I promise you, you will never be disappointed in the quality…it is truly top notch!
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Daniel Padilla</h3>
                      <h4></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/Costumer-3.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        My favorite place to visit for bakery needs.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                      <h3>Joshua Garcia</h3>
                      <h4></h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/Costumer-4.jpg" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p>Announce<span>ment</span>s</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Announce-1.jpg)">
              <h3></h3>
              <div class="price align-self-start"></div>
              <p class="description">
                {{-- Quo corporis voluptas ea ad. Consectetur inventore sapiente ipsum voluptas eos omnis facere. Enim facilis veritatis id est rem repudiandae nulla expedita quas. --}}
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Announce-2.jpg)">
              <h3></h3>
              <div class="price align-self-start"></div>
              <p class="description">
                {{-- In delectus sint qui et enim. Et ab repudiandae inventore quaerat doloribus. Facere nemo vero est ut dolores ea assumenda et. Delectus saepe accusamus aspernatur. --}}
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/Announce-3.jpg)">
              <h3></h3>
              <div class="price align-self-start"></div>
              <p class="description">
                {{-- Laborum aperiam atque omnis minus omnis est qui assumenda quos. Quis id sit quibusdam. Esse quisquam ducimus officia ipsum ut quibusdam maxime. Non enim perspiciatis. --}}
              </p>
            </div><!-- End Event item -->

            {{-- @foreach ($announcements as $announcement)
              <div class="swiper-slide event-item d-flex flex-column justify-content-end">
                <img class="announcement-image" src="{{asset('/storage/images'. $announcement->image)}}" alt="#">
                <h3></h3>
                <div class="price align-self-start"></div>
                <p class="description">
                 
                </p>
              </div><!-- End Event item -->

            @endforeach --}}

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    {{-- <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p>Business <span>Owner</span> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img"> 
                <img src="assets/img/chefs/chefs-1fevrg.jpg" class="" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
                <p></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->
        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</ h4>
                <span>Establishment Owner</span>
                <p></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-6 col-md-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3ghy.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <span></span>
                <p></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section --> --}}

    {{-- <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p>Business <span>Owner</span></p>
        </div>

        <div class="row g-0">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Establishment Owner</span>
                <p></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Book A Table Section --> --}}

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

     <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Phase%202,%20Block%2046,%20Lot%2014%20Emenvelle%20Subdivision,%20Butuan%20City%20Philippines%208600&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:300px;width:1080px;}</style><a href="https://www.embedgooglemap.net">google map embed responsive</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:1080px;}</style></div></div>

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>Phase2 Block46 Lot1, Emenville Subdivision Butuan City Ph</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>pearlavs@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+639 905 316 9300</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
{{-- 
        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
        <!--End Contact Form --> --}}

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Phase 2, Block 46, Lot 14, Emenville Subdivision<br>
              , Butuan City, Ph 8600<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +639 905 316 9300<br>
              <strong>Email:</strong> pearlavs@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 11AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100057389083010" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CoffeeCaepCake</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->
  @endsection
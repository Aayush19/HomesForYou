<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HomesForYou</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>HomesForYou<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li><a href="buy.php">Buy</a></li>
                  <li class="active"><a href="rent.php">Rent</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="login.php">Login</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/vaishnav-apartment/fb-2-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
              <h1 class="mb-2">Vaishnav Apartment 2 BHK Flat</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Rs.13,000</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-blocks-cover overlay" style="background-image: url(images/mahaveer-apartment/fb-2bhk-1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
              <h1 class="mb-2">Mahaveer Apartment 1 BHK Flat</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Rs.9,000</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Listing Types</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">Select</option>
                    <option value="">Home</option>
                    <option value="">Apartment</option>
                    <option value="">Hostel</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Offer Type</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">Select</option>
                    <option value="">For Sale</option>
                    <option value="">For Rent</option>
                    <option value="">Buy</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Select Area</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="">Select</option>
                    <option value="">Palasia</option>
                    <option value="">Geeta Bhavan</option>
                    <option value="">Bhawarkuan</option>
                    <option value="">Tilak Nagar</option>
                    <option value="">Vijay Nagar</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
              </div>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
                <a href="index.php" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.php" class="icon-view view-list"><span class="icon-view_list"></span></a>
              </div>
              <div class="ml-auto d-flex align-items-center">
                <div>
                  <a href="index.php" class="view-list px-3 border-right active">All</a>
                  <a href="rent.php" class="view-list px-3 border-right">Rent</a>
                  <a href="buy.php" class="view-list px-3">Sale</a>
                </div>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Sort by</option>
                    <option value="">Price Ascending</option>
                    <option value="">Price Descending</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/vaishnav-apartment-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/vaishnav-apartment/fb-2-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/vaishnav-apartment-details.php">Vaishnav Apartment</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Vaishnav Apartment ,Palasia,Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.18,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">3 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">3</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">4,250</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/mahaveer-apartment-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/mahaveer-apartment/fb-2bhk-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/mahaveer-apartment-details.php">Mahaveer Apartment</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Bhavarkuan, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.12,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2<sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">2,620</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/room-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/room/room-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/room-details.php">Room</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Tilak Nagar, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.7,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">1 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">1</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">3,500</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/vaishnav-apartment-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/vaishnav-apartment/fb-2-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/vaishnav-apartment-details.php">Vaishnav Apartment</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Vaishnav Apartment ,Palasia,Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.18,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">3 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">3</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">4,250</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/mahaveer-apartment-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/mahaveer-apartment/fb-2bhk-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/mahaveer-apartment-details.php">Mahaveer Apartment</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Bhavarkuan, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.12,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">2,620</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/room-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/room/room-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/room-details.php">Room</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Tilak Nagar, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.7,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">1 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">1</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">3,500</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/pragati-girls-hostel-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Hostel</span>
                </div>
                <img src="images/girls-hostel/Pragati_Girls_Hostel.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/pragati-girls-hostel-details.php">Pragati Girls Hostel</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 88-89, Opp CHL Hospital , Anoop Nagar, LIG Square, Indore, Madhya Pradesh, India</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.7,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">Sharing: Single, Double, Triple</span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">1</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">3,800</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/boys-hostel-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Hostel</span>
                </div>
                <img src="images/boys-hostel/aashray-boys-hostel-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/boys-hostel-details.php">Aashray Boys Hostel</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Vijay Nagar, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.6,000</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">Sharing: Single, Double, Triple</span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">1</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">4,000</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details/1bhk-flat-details.php" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-success">Hostel</span>
                </div>
                <img src="images/1bhk-flat/1bhk-1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details/1bhk-flat-details.php">1 BHK Flat</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> Geeta Bhawan, Indore</span>
                <strong class="property-price text-primary mb-3 d-block text-success">Rs.8,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">1 <sup>+</sup></span>
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">1</span>
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,000</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
              <span>...</span>
              <a href="#">10</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Why Choose Us?</h2>
            </div>
            <p>We Serve you best quality Homes----------------------------------------------</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Research Subburbs</h2>
              <p> </p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Sold Houses</h2>
              <p> </p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Security Priority</h2>
              <p> </p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
        </div>
      </div>
    </div>

   <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Recent Blog</h2>
            </div>
            <p> </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by </a></h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by </a></h2>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/a.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by </a></h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Our Developers</h2>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row" style="margin-left: 200px;">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/developers/Ritik.jpg" alt="Image" class="img-fluid-2 rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Ritik Gupta</h2>
                <span class="d-block mb-3 text-white-opacity-05">Developer</span>
                <p> </p>
                <p>
                  <a href="https://www.facebook.com/ritikgupta.ujn" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="https://www.linkedin.com/in/ritik-gupta-871689137/" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">
              <img src="images/developers/Aayush.jpg" alt="Image" class="img-fluid-2 rounded mb-4">
              <div class="text">
                <h2 class="mb-2 font-weight-light text-black h4">Aayush Khandelwal</h2>
                <span class="d-block mb-3 text-white-opacity-05">Developer</span>
                <p> </p>
                <p>
                  <a href="https://www.facebook.com/aayush.khandelwal19" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/AayushK64684255" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="https://www.linkedin.com/in/aayush-khandelwal-99b57761/" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About HomesForYou</h3>
            </div>

          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="buy.php">Buy</a></li>
                  <li><a href="rent.php">Rent</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>
    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

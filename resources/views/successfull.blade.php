<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="./css/owl.carousel.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.css" />
    <!-- main -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    <!-- video modal -->
    <link rel="stylesheet" href="./css/modal-video.min.css" />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <!-- googlefonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Trirong:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <!-- lightbox -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.css"
      integrity="sha256-K4PK62zpbl/XelQ0bLxyUztMw5nLdGyd2qGmPTGM1oY="
      crossorigin="anonymous"
    />
    <title>MyEvents</title>
    
    <style type="text/css">
      body{
          background: #F4F7FD;
          margin-top:20px;
      }
      
      .card-margin {
          margin-bottom: 1.875rem;
      }
      
      .card {
          border: 0;
          box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
          -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
          -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
          -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
      }
      .card {
          position: relative;
          display: flex;
          flex-direction: column;
          min-width: 0;
          word-wrap: break-word;
          background-color: #ffffff;
          background-clip: border-box;
          border: 1px solid #e6e4e9;
          border-radius: 8px;
      }
      
      .card .card-header.no-border {
          border: 0;
      }
      .card .card-header {
          background: none;
          padding: 0 0.9375rem;
          font-weight: 500;
          display: flex;
          align-items: center;
          min-height: 50px;
      }
      .card-header:first-child {
          border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
      }
      
      .widget-49 .widget-49-title-wrapper {
        display: flex;
        align-items: center;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-primary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #edf1fc;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
        color: #4e73e5;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
        color: #4e73e5;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fcfcfd;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
        color: #dde1e9;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
        color: #dde1e9;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-success {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #e8faf8;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
        color: #17d1bd;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
        color: #17d1bd;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-info {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebf7ff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
        color: #36afff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
        color: #36afff;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-warning {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: floralwhite;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
        color: #FFC868;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
        color: #FFC868;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-danger {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #feeeef;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
        color: #F95062;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
        color: #F95062;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-light {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fefeff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
        color: #f7f9fa;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
        color: #f7f9fa;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-dark {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebedee;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
        color: #394856;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
        color: #394856;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-base {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #f0fafb;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
        color: #68CBD7;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
        color: #68CBD7;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
        display: flex;
        flex-direction: column;
        margin-left: 1rem;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
        color: #3c4142;
        font-size: 14px;
      }
      
      .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
        color: #B1BAC5;
        font-size: 13px;
      }
      
      .widget-49 .widget-49-meeting-points {
        font-weight: 400;
        font-size: 13px;
        margin-top: .5rem;
      }
      
      .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
        display: list-item;
        color: #727686;
      }
      
      .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
        margin-left: .5rem;
      }
      
      .widget-49 .widget-49-meeting-action {
        text-align: right;
      }
      
      .widget-49 .widget-49-meeting-action a {
        text-transform: uppercase;
      }
    </style>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="loader">
      <div class="loader-inner cube-transition">
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="header_top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <div class="header_top_info">
              <ul id="scroll_spy_nav">
                <li>
                  <a href="tel:+251 581785939"
                    ><i class="fa fa-phone" style="padding-right: 5px"></i
                    >+251 984742593</a
                  >
                </li>
                <li>
                  <a href="mailto:debremarkosfsc@gmail.com"
                    ><i class="fa fa-envelope" style="padding-right: 5px"></i
                    >tedoteams@gmail.com</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="header_top_social text-right">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-pinterest-p" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-linkedin" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <header class="main_nav">
      <nav
        class="navbar navbar-expand-lg navbar-default"
        id="navbar"
        data-spy="affix"
        data-offset-top="10"
      >
        <div class="container">
          <a class="navbar-brand mr-auto" href="#"><span><img src="../app/img/logo3.png" style="height: 50px;" alt=""></span>MyEvents</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"
              ><span class="icon-bar"></span><span class="icon-bar"></span
              ><span class="icon-bar"></span>
            </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto" id="scroll_spy_nav">
              <li class="nav-item">
                <a class="nav-link" href="{{route('welcome')}}"
                  >Home <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#events"
                  >Events<span class="sr-only"></span
                ></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#photos"
                  >Photo Galary <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonals"
                  >Testmonials <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"
                  >Contact <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-success" href="{{route('login')}}"
                  >Signin <span class="sr-only"></span
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    {{-- <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner_table">
              <div class="banner_tabel_cell">
                <div class="banner_text">
                  <h1>Welcome to MyEvents!</h1>
                  <p>
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><br> --}}
    
    <section id="events" style="padding-top: 5%">
      
      <div class="container">
        <div class="col-sm-12 text-center">
          <div class="section_title text-center">
            <h3></h3>
            <p>
              
            </p>
          </div>
        </div>
        <div class="row">
          
            <div class="col-lg-10">
              <div class="card card-margin">
                <div class="card-header no-border">
                  <h5 class="card-title"></h5>
                </div>
                <div class="card-body pt-0">
                  <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                      <div class="widget-49-meeting-info">
                        <span class="widget-49-pro-title">
                            <h4 style="color: green">
                                Congratulations! You have successfully booked the event!
                            </h4>
                        </span>
                        <span class="widget-49-meeting-time"></span>
                      </div>
                    </div>
                    <div class="widget-49-meeting-action">
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>

    </section><br>

    <section id="photos">

    </section><br>   

    <section id="testimonals">
      
    </section><br>

    <section id="contact">
      
    </section>

    {{-- login modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          

          <section class="ftco-section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                  <h2 class="heading-section">Signup to MyEvents</h2>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                  <div class="wrap">
                    <div class="img" style="background-image: url(images/bg-1.jpg);"></div>
                    <div class="login-wrap p-4 p-md-5">
                      <div class="d-flex">
                        <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                        </div>
                        <div class="w-100">
                          <p class="social-media d-flex justify-content-end">
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                          </p>
                        </div>
                      </div>
                      <form action="#" class="signin-form">
                        <div class="form-group mt-3">
                          <input type="text" class="form-control" required>
                          <label class="form-control-placeholder" for="username">Username</label>
                        </div>
                        <div class="form-group">
                          <input id="password-field" type="password" class="form-control" required>
                          <label class="form-control-placeholder" for="password">Password</label>
                          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                          <div class="w-50 text-left">
                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            </label>
                          </div>
                          <div class="w-50 text-md-right">
                            <a href="#">Forgot Password</a>
                          </div>
                        </div>
                      </form>
                      <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="footer_logo">
              <h1>MyEvents</h1>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="footer_copy text-center">
              <p>©alrights reserved <span></span></p>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="footer_social text-right">
              <ul>
                <li>
                  <a href="#"
                    ><i class="fa fa-facebook" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-twitter" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-pinterest-p" aria-hidden="true"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-linkedin" aria-hidden="true"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <span id="scroll_top"
        ><i class="fa fa-angle-double-up" aria-hidden="true"></i
      ></span>
    </footer>

    <!-- jquery -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>

    <!-- lightbox gallery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.js"
      integrity="sha256-HHxzdzMxNEM7W2AK5D76PzFUsJGEECoD7bPasDHMFS0="
      crossorigin="anonymous"
    ></script>
    <!-- waypoints -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"
      integrity="sha256-w49DIDk8itgSjjuoof5lTxYKwcjWJ7Z2sRW3nU1StNA="
      crossorigin="anonymous"
    ></script>
    <!-- count up -->
    <script src="./js/jquery.countup.js"></script>
    <!-- video modal -->
    <script src="./js/jquery-modal-video.js"></script>
    <!-- isotypo -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"
      integrity="sha256-aZcT9p29I4e3w7VyBLzcPYbTrDUHGKetZaUpPg0sU+s="
      crossorigin="anonymous"
    ></script>
    <!-- imageloader -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.js"
      integrity="sha256-eeLX2eJyJl7PzfGoniSDSEBPJvEuZ3Kv+AKPiK0il98="
      crossorigin="anonymous"
    ></script>
    <!-- Owl carousel -->
    <script src="./js/owl.carousel.js"></script>
    <!-- node background -->
    <script type="text/javascript" src=".js/nodes.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>

    <!-- bootstrap -->

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <!-- main -->
    <script src="./js/main.js"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>

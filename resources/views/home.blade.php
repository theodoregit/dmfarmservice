<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{asset('app/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('app/css/owl.theme.default.css')}}" />
    <!-- main -->
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}" />
    <!-- video modal -->
    <link rel="stylesheet" href="{{asset('app/css/modal-video.min.css')}}" />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../app/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="../../app/css/style.css">
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
    <title>DM Farm Service</title>
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
                    >+251 581785939</a
                  >
                </li>
                <li>
                  <a href="mailto:debremarkosfsc@gmail.com"
                    ><i class="fa fa-envelope" style="padding-right: 5px"></i
                    >debremarkosfsc@gmail.com</a
                  >
                </li>
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
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="header_top_social text-right">
              <ul>                
                <li>
                    <a href="{{route('index')}}" class="fa btn btn-info" style="color:white; margin-left:100%;">Logout</a>
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
          <a class="navbar-brand mr-auto" href="#"><span><img src="{{asset('app/img/logo_new.png')}}" style="height: 50px;" alt=""></span>ደብረ ማርቆስ እርሻ አገልግሎት ማዕከል</a>
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
                <a class="nav-link" href="#banner"
                  >Home <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#news"
                  >News <span class="sr-only"></span
                ></a>
                <div class="dropdown-wrapper">
                  <div class="dropdown-inner">
                    <div class="flex-wrapper">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="row f1">
                            <div class="col-sm-6">
                              <div class="tab-wrapper d-flex">
                                <div class="left_icon_wrapper">
                                  <i class="fa fa-users"></i>
                                </div>
                                <div class="right_text_wrapper">
                                  <div class="heading4">
                                    <a href="#" class="">DM Farm Service Center</a>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-wrapper d-flex">
                                <div class="left_icon_wrapper">
                                  <i class="fa fa-users"></i>
                                </div>
                                <div class="right_text_wrapper">
                                  <div class="heading4">
                                    <a href="#" class="">Debre Markos</a>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-wrapper d-flex">
                                <div class="left_icon_wrapper">
                                  <i class="fa fa-users"></i>
                                </div>
                                <div class="right_text_wrapper">
                                  <div class="heading4">
                                    <a href="#" class="">National News</a>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-wrapper d-flex">
                                <div class="left_icon_wrapper">
                                  <i class="fa fa-users"></i>
                                </div>
                                <div class="right_text_wrapper">
                                  <div class="heading4">
                                    <a href="#" class="">World News</a>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-wrapper d-flex">
                                <div class="left_icon_wrapper">
                                  <i class="fa fa-users"></i>
                                </div>
                                <div class="right_text_wrapper">
                                  <div class="heading4">
                                    <a href="#" class="">Carrers</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="e-book-wrapper">
                            <div class="flex_wrapper">
                              <div class="book_wraper">
                                <figure>
                                  <img
                                    class="lazyloaded"
                                    data-src="https://appinventiv.com/wp-content/themes/twentynineteen-child/images/eBook_01.png"
                                    alt="e-book"
                                    src="https://appinventiv.com/wp-content/themes/twentynineteen-child/images/eBook_01.png"
                                  />
                                </figure>
                              </div>
                              <div class="right-detail">
                                <div class="heading4">
                                  How to be a successful app entrepreneur in
                                  2020?
                                </div>
                                <span class="book-detail"
                                  >Deep dive into our exclusive eBook that
                                  shares the secret to how to transition from
                                  full time employee to an app
                                  entreprenuer</span
                                >
                                <div class="read_more_button">
                                  <a href="">
                                    Download <i class="fa fa-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service"
                  >Our Services <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#work"
                  >Photo Galary <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about_us"
                  >About <span class="sr-only"></span
                ></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testmonial"
                  >Testmonials <span class="sr-only"></span
                ></a>                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"
                  >Contact <span class="sr-only"></span
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner_table">
              <div class="banner_tabel_cell">
                <div class="banner_text">
                  <h1>እንኳን ደህና መጡ! 
                    <!-- <a href="">
                        <i class="fa fa-pencil-square"></i> 
                    </a> -->
                  </h1>
                  
                  
                  <!-- Button trigger modal -->


                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="story">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 col-xs-12">
            <div class="about_info">
              <h1>ስለ ማዕከላችን በጥቂቱ...
                <i class="fa fa-pencil-square" data-toggle="modal" data-target="#exampleModalCenter"></i>

              </h1>
              <p>
                የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ። የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ።
                የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ። የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ።
                
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">በአማርኛ</label>
                                    <textarea name="amh" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">In English</label>
                                    <textarea name="eng" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>


              </p>
              <p class="hide_sm">
                Our passion is delivering high quality and high performance.
                That means embracing excellent design, appearing highly in
                Google, and converting visitors into leads and then sales for
                your business.
              </p>
              <button>read more</button>
            </div>
          </div>
          <div class="col-sm-5 col-xs-12">
            <div class="about_video">
              <img class="img-fluid" src="{{asset('app/img/photo1.jpg')}}" alt="" />
              <a class="youtubeVideo" data-video-id="bmixiVwtDso"
                ><i class="fa fa-play-circle" aria-hidden="true"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title text-center">
              <h3>ምርትና አገልግሎቶቻችን</h3>
              <p>
                ምርትና አገልግሎቶቻችንምርትና አገልግሎቶቻችንምርትና አገልግሎቶቻችንምርትና አገልግሎቶቻችን
                
                <i class="fa fa-pencil-square" data-toggle="modal" data-target="#exampleModalCenter2"></i> 
                    
              </p>


              


              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle2">Edit</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      2
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="service_container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <i class="fa iconify" data-icon="mdi:barley" aria-hidden="true"></i>
                
                <i class="fa fa-pencil-square" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter3"></i> 
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle3">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        3
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <h2>ምርጥ ዘርና ማዳበሪያ</h2>
                <p>
                  <ul>
                    <li>two</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>two</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <i class="fa iconify" data-icon="icon-park-outline:pesticide" aria-hidden="true"></i>
                
                <i class="fa fa-pencil-square" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter4"></i> 
                
                <h2>ጸረ ተባይ</h2>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle4" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle4">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        4
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <p>
                  <ul>
                    <li>nizalqk2400</li>
                    <li>clozasole3400</li>
                    <li>clozasole900</li>
                    <li>tetsole white600</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <i class="fa iconify" data-icon="healthicons:animal-cow" aria-hidden="true"></i>
                
                <i class="fa fa-pencil-square" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter5"></i> 
                
                <h2>የእንስሳት ህክምናና መድሃኒቶች</h2>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle5" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle5">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        5
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <p>
                  <ul>
                    <li>Doxycycline</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <a href="">
                  <i class="fa iconify" data-icon="si-glyph:shovel"></i>
                </a>
                <i class="fa fa-pencil-square" style="float: right;" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter6"></i> 
                
                <h2>የእርሻ መገልገያ መሳሪያዎች</h2>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle6" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle6">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        6
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <p>
                  <ul>
                    <li>Motocultor</li>
                    <li>The Rake</li>
                    <li>Shovel</li>
                    <li>Sprinkler</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <i class="fa iconify" data-icon="healthicons:i-training-class-negative" aria-hidden="true"></i>
                
                <i class="fa fa-pencil-square" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter7"></i> 
                
                <h2>መረጃና ስልጠና</h2>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle7" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle7">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        7
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <p>
                  <ul>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                  </ul>
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="service_item">
                <i class="fa iconify" data-icon="ls:etc" aria-hidden="true"></i>
                
                <i class="fa fa-pencil-square" style="float: right;" data-toggle="modal" data-target="#exampleModalCenter8"></i> 
                
                <h2>ሌሎች አገልግሎቶች</h2>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle8" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle8">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        8
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
                <p>
                  <ul>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                    <li>one</li>
                  </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="work">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title text-center">
              <h3>ፎቶ ማህደር</h3>
              <p>dfgdfgdfgdfsg dsfgsdfgh sdfgsdfgh sdfghsdfh sdfgdfg</p>
            </div>
          </div>
        </div>
        <div class="work_container">
          <div class="row">
            <div class="col-sm-12">
              <div class="portfolio_btn text-center">
                <ul class="portfolio-filter">
                  <!-- <li class="filter active" data-filter="*">All</li> -->
                  <li class="filter" data-filter=".ill">ዘርና ማዳበሪያ</li>
                  <li class="filter" data-filter=".brand">የእርሻ መሳሪያዎች</li>
                  <li class="filter" data-filter=".fs">ጸረ ተባይ</li>
                    <li class="filter" data-filter=".an">የእንስሳት ህክምና</li>
                  <li class="filter" data-filter=".an">ስልጠናዎች </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- portfolio single item -->
          <div class="galary_item_container">
            <div class="h">
              <div
                class="galary_item"
                style="position: relative; height: 780px"
              >
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 0px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/777.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/777.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-pencil-square" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item p-0"
                  style="position: absolute; left: 390px; top: 0px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/222.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/222.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item p-0"
                  style="position: absolute; left: 780px; top: 0px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/333.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/333.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item p-0"
                  style="position: absolute; left: 0px; top: 260px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/444.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/444.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/555.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/555.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-sm-6 col-xs-12 an singal_item p-0"
                  style="position: absolute; left: 780px; top: 260px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/666.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/666.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-sm-6 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 520px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/777.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/777.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-sm-6 col-xs-12 an singal_item p-0"
                  style="position: absolute; left: 390px; top: 520px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/444.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/444.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-sm-6 col-xs-12 ill singal_item p-0 hide_sm"
                  style="position: absolute; left: 780px; top: 520px"
                >
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/333.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/333.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about_us">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title text-center">
              <h3>የማዕከሉ ባለሙያዎችና ሰራተኞች</h3>
              <p>
                dfhdfhgf sdfhdfh sdfhdfh sdfhdfh sdfhdfh
                <a href="">
                  <i class="fa fa-pencil-square" style=""></i> 
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="team_container text-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team_item">
                <div class="team_img">
                  <img class="img-fluid" src="{{asset('app/img/businessperson.png')}}" alt="" />
                </div>
                <div class="team_info">
                  <h3>ባለው ወንድም</h3>
                  <p>ስራ አስኪያጅ</p>
                </div>
                <div class="team-social">
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
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team_item">
                <div class="team_img">
                  <img class="img-fluid" src="{{asset('app/img/businessperson.png')}}" alt="" />
                </div>
                <div class="team_info">
                  <h3>አበበ ከበደ</h3>
                  <p>የግብይት ባለሙያ</p>
                </div>
                <div class="team-social">
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
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team_item">
                <div class="team_img">
                  <img class="img-fluid" src="{{asset('app/img/businessperson.png')}}" alt="" />
                </div>
                <div class="team_info">
                  <h3>አገሬ መልካሙ</h3>
                  <p>የሽያጭ ሰራተኛ</p>
                </div>
                <div class="team-social">
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
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="team_item">
                <div class="team_img">
                  <img class="img-fluid" src="{{asset('app/img/businessperson.png')}}" alt="" />
                </div>
                <div class="team_info">
                  <h3>አለሙ ጫኔ</h3>
                  <p>የእንሳት ሃኪም</p>
                </div>
                <div class="team-social">
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
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section id="testmonial">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="section_title text-center">
              <h3>ደንበኞቻችን ምን አሉ?</h3>
              <p>
                ደንበኞቻችን በምርትና አገልግሎቶቻችን ላይ ከሰጡን አስተያዬቶች በጥቂቱ
                <a href="">
                  <i class="fa fa-pencil-square" style=""></i> 
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="testmonial_container">
          <div class="row">
            <div class="col-sm-12">
              <div class="testmonial_active owl-carousel owl-loaded">
                <div class="owl-stage-outer">
                  <div
                    class="owl-stage"
                    style="
                      transform: translate3d(-1740px, 0px, 0px);
                      transition: all 0.25s ease 0s;
                      width: 6380px;
                    "
                  >
                    <div
                      class="owl-item cloned"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item cloned"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item active"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item active"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። "
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img
                                  class="img-fluid"
                                  src="{{asset('app/img/download.png')}}"
                                  alt=""
                                />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="owl-item"
                      style="width: 560px; margin-right: 20px"
                    >
                      <div class="testmonial_item">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="testmonial_img">
                              <span>
                                <img class="img-fluid" src="{{asset('app/img/download.png')}}" alt="" />
                              </span>
                              <h2>አበበ ከበደ</h2>
                            </div>
                          </div>
                          <div class="col-sm-8">
                            <div class="testmonial_info">
                              <p>
                                "ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ። ፈጣን አገልግሎት በማግኘቴ ተደስቻለሁ።"
                              </p>
                              <span>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_title text-center">
              <h3>አድራሻችን</h3>
              <p>
                cbcbh fghfghfg fghfghfgh dfghfghfgh dfghfghfgh fgh
                <a href="">
                  <i class="fa fa-pencil-square" style=""></i> 
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="contact_container">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <div class="contact_form">
                <form>
                  <input type="text" class="name" placeholder="Enter Name" />
                  <input type="text" class="email" placeholder="Enter Email" />
                  <input type="text" class="phone" placeholder="Enter Phone" />
                  <input
                    type="text"
                    class="subject"
                    placeholder="Interest Of Service"
                  />
                  <textarea
                    class="message"
                    placeholder="leve Your Message"
                  ></textarea>
                  <button type="submit">submit</button>
                </form>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="contcat_info">
                <ul>
                  <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> ደብረ ማርቆስ / ኢትዮጵያ
                  </li>
                  <li>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    debremarkosfsc@gmail.com
                  </li>
                  <li>
                    <i class="fa fa-phone" aria-hidden="true"></i> +251 581785939 / +251 911586829
                  </li>
                  <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i> ከሰኞ - ቅዳሜ :
                    2:00 - 12:00
                  </li>
                </ul>
                <div class="fllow_info">
                  <h3>follow us on social media</h3>
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
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-xs-12">
            <div class="footer_logo">
              <h1><span>DM</span>farm service</h1>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="footer_copy text-center">
              <p>©allright reserved <span>Behance Computer Engineering</span></p>
            </div>
          </div>
          <div class="col-sm-3 col-xs-12">
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
    <script src="{{asset('app/js/jquery.countup.js')}}"></script>
    <!-- video modal -->
    <script src="{{asset('app/js/jquery-modal-video.js')}}"></script>
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
    <script src="{{asset('app/js/owl.carousel.js')}}"></script>
    <!-- pooper js -->

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
    <script src="../../app/js/jquery-3.3.1.min.js'"></script>
    <script src="../../app/js/popper.min.js"></script>
    <script src="../../app/js/bootstrap.min.js"></script>
    <!-- main -->
    <script src="{{asset('app/js/main.js')}}"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    
  </body>
</html>

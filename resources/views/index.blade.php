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
    <!-- <link rel="stylesheet" href="{{asset('app/css/bootstrap.min.css')}}"> -->
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
                    <a href="/login" class="fa btn btn-success" style="color:white; margin-left:100%;">Login</a>
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
                  <h1>እንኳን ደህና መጡ!</h1>
                  <p>
                    
                  </p>
                  <!-- <button onclick="window.location.href='#about_us'">
                    about us
                  </button>
                  <button
                    class="btn_sp"
                    onclick="window.location.href='#contact'"
                  >
                    contact us
                  </button> -->
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
              <h1>ስለ ማዕከላችን በጥቂቱ...</h1>
              <p>
                የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ። የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ።
                የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ። የደብረ ማርቆስ እርሻ አገልግሎት ማዕከል በ200_ ዓ.ም ተመሰረተ።
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
              </p>
            </div>
          </div>
        </div>
        <!-- <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Chemicals 
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <div class="service_container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="mdi:barley" aria-hidden="true"></i>
                          <h2>Selective Herbicides</h2>
                          <p>
                            <ul>
                              <li>Awura 2,4-D</li>
                              <li>Agro 2, 4-D</li>
                              <li>Zura  2, 4-D</li>
                              <li>Herbhnock 2, 4-D</li>
                              <li>Dical 2,4-D</li>
                              <li>Hond 2 4- D</li>
                              <li>Crop 2 ,4-D</li>
                              <li>Mega  2, 4-D</li>
                              <li>Grasp 2,4-D</li>
                              <li>Power 2,4-D</li>
                              <li>Shining 2,4-D</li>
                              <li>Kegna 2,4-D</li>
                              <li>East 2,4D</li>
                              <li>Palas 45 OD</li>
                              <li>Rich Way</li>
                              <li>Atlantis (post emergence)</li>
                              <li>Secator</li>
                              <li>Crop Star</li>
                              <li>Care Way</li>
                              <li>Premagram (Premergence)</li>
                              <li>Butrazin (Premerge)</li>
                              <li>Sarine (Premerge)</li>
                              <li>Galigan</li>
                              <li>Penda 500 EC</li>
                              
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="icon-park-outline:pesticide" aria-hidden="true"></i>
                          <h2>Non-Selective Herbicides</h2>
                          <p>
                            <ul>
                              <li>Glycel</li>
                              <li>Glymax</li>
                              <li>Glyweed</li>
                              <li>Round Up</li>
                              <li>Kalanch</li>
                              <li>Bound off</li>
                              <li>Cropphoset</li>
                              <li>Weedknock</li>
                              <li>Glyphosate</li>
                              <li>Coneo</li>
                              <li>Glyphovit Extra SL</li>
                              <li>Agroset</li>
                              <li>Lincoset</li>
                              <li>Abocel</li>
                              <li>Armon</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:animal-cow" aria-hidden="true"></i>
                          <h2>Fungicides</h2>
                          <p>
                            <ul>
                              <li>Mancozeb  80% (250 gm)</li>
                              <li>Redomil (0.25kg)</li>
                              <li>Cropaxyl gold 72%</li>
                              <li>Srizol 25 EC (0.5lt)</li>
                              <li>Agro-Laxyl</li>
                              <li>Crust</li>
                              <li>JEBA 25%</li>
                              <li>Progress 250 EC (0.5lt)</li>
                              <li>Panazol </li>
                              <li>Selzole</li>
                              <li>Bolano 20% SC</li>
                              <li>Altracol  32 SC</li>
                              <li>Shega</li>
                              <li>Aero Zeb</li>
                              <li>Dolar 52.5 WDG</li>
                              <li>Crop Zeb</li>
                              <li>COSAVET</li>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="si-glyph:shovel" aria-hidden="true"></i>
                          <h2>Insecticide</h2>
                          <p>
                            <ul>
                              <li>Aim 10%</li>
                              <li> Agrothoate(Diimathoate)</li>
                              <li>Confidence</li>
                              <li>Priour</li>
                              <li>Priour</li>
                              <li>Priour</li>
                               <li>Agrolambacin</li>
                               <li>Ethiolation</li>
                               <li>Malamar</li>
                               <li>Megaban (Termite)</li>
                               <li>Nehissa (Dimethoat) 0.5L</li>
                               <li>Ajenta / For thrips/</li>
                               <li>Best</li>
                               <li>Profit  /for Aphids /</li>
                               <li>Starprofenfos</li>
                               <li>Guard 5% EC</li>
                               <li>Diazinon</li>
                               <li>Perfecto /for ephids/</li>
                               <li>Gain</li>
                               <li>Bravo / for stalk borer/</li>
                               <li>Firatie</li>
                               <li>Lacy 50% EC</li>
                               <li>Profex</li>
                               <li>Signal</li>
                               <li>Hunter</li>
                               <li>Tutan</li>
                               <li>karatie / For thrips/</li>
                               <li>Tafgor</li>
                               <li>Trycel l/Chlorophyrifos/ </li>
                               <li>Carbaryle 85% WP</li>
                               <li>Cellphose</li>
                               <li>Tamphose</li>
                               <li>Fullingphose</li>
                               <li>Kill phose</li>
                               <li>Zincphose</li>
                               <li>Quickphos</li>
                               <li>Letphose</li>
                               <li>Shenpose</li>
                               <li>Talic (50gm)</li>
                               <li>Malathion 5% dust</li>
                               <li>Deltakal for weevils (50gm)</li>
                               <li>Roach killer</li>


                               </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:i-training-class-negative" aria-hidden="true"></i>
                          <h2>መረጃና ስልጠና</h2>
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
                          <h2>Rodentcide</h2>
                          <p>
                            <ul>
                              <li>Stop</li>
                              <li>Commando</li>
                              <li>Ratox</li>
                              <li>Phosphide</li>
                              
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  Farm Tools and Utensils 
                </button>
              </h2>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  <div class="service_container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="mdi:barley" aria-hidden="true"></i>
                          <h2>ምርጥ ዘርና ማዳበሪያ</h2>
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
                          <i class="fa iconify" data-icon="icon-park-outline:pesticide" aria-hidden="true"></i>
                          <h2>ጸረ ተባይ</h2>
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
                          <h2>የእንስሳት ህክምናና መድሃኒቶች</h2>
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
                          <i class="fa iconify" data-icon="si-glyph:shovel" aria-hidden="true"></i>
                          <h2>የእርሻ መገልገያ መሳሪያዎች</h2>
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
                          <h2>መረጃና ስልጠና</h2>
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
                          <h2>ሌሎች አገልግሎቶች</h2>
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
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Field Crop Seeds 
                </button>
              </h2>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Fertilizers 
                </button>
              </h2>
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  Sprayer Spare Parts 
                </button>
              </h2>
            </div>

            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                  Livestock Farming Equipments 
                </button>
              </h2>
            </div>

            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                  Vegetable Seeds
                </button>
              </h2>
            </div>

            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingEight">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                  Forestry Seeds
                </button>
              </h2>
            </div>

            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingNine">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                  Animal Forage Seeds
                </button>
              </h2>
            </div>

            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTen">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                  Animal Veterinary Drugs
                </button>
              </h2>
            </div>

            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingEleven">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                  Trainings and Others 
                </button>
              </h2>
            </div>

            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">
                  one                    
                </div>
              </div>
            </div>
          </div>                   
                  
        </div> -->
        <div class="service_container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="mdi:barley" aria-hidden="true"></i>
                          <h2>Selective Herbicides</h2>
                          <p>
                            <ul>
                              <li>Awura 2,4-D</li>
                              <li>Agro 2, 4-D</li>
                              <li>Zura  2, 4-D</li>
                              <li>Herbhnock 2, 4-D</li>
                              <li>Dical 2,4-D </li>
                              <div id="collapse" style="display:none">
                                <li>Hond 2 4- D</li>
                                <li>Crop 2 ,4-D</li>
                                <li>Mega  2, 4-D</li>
                                <li>Grasp 2,4-D</li>
                                <li>Power 2,4-D</li>
                                <li>Shining 2,4-D</li>
                                <li>Kegna 2,4-D</li>
                                <li>East 2,4D</li>
                                <li>Palas 45 OD</li>
                                <li>Rich Way</li>
                                <li>Atlantis (post emergence)</li>
                                <li>Secator</li>
                                <li>Crop Star</li>
                                <li>Care Way</li>
                                <li>Premagram (Premergence)</li>
                                <li>Butrazin (Premerge)</li>
                                <li>Sarine (Premerge)</li>
                                <li>Galigan</li>
                                <li>Penda 500 EC </li>
                              </div>
                              <a href="#collapse" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="icon-park-outline:pesticide" aria-hidden="true"></i>
                          <h2>Non-Selective Herbicides</h2>
                          <p>
                            <ul>
                              <li>Glycel</li>
                              <li>Glymax</li>
                              <li>Glyweed</li>
                              <li>Round Up</li>
                              <li>Kalanch</li>
                              <div id="collapse2" style="display:none">
                                <li>Bound off</li>
                                <li>Cropphoset</li>
                                <li>Weedknock</li>
                                <li>Glyphosate</li>
                                <li>Coneo</li>
                                <li>Glyphovit Extra SL</li>
                                <li>Agroset</li>
                                <li>Lincoset</li>
                                <li>Abocel</li>
                                <li>Armon</li>
                              </div>
                              <a href="#collapse2" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="jam:bottle" aria-hidden="true"></i>
                          <h2>Fungicides</h2>
                          <p>
                            <ul>
                              <li>Mancozeb  80% (250 gm)</li>
                              <li>Redomil (0.25kg)</li>
                              <li>Cropaxyl gold 72%</li>
                              <li>Srizol 25 EC (0.5lt)</li>
                              <li>Agro-Laxyl</li>
                              <div id="3" style="display:none">
                                <li>Crust</li>
                                <li>JEBA 25%</li>
                                <li>Progress 250 EC (0.5lt)</li>
                                <li>Panazol </li>
                                <li>Selzole</li>
                                <li>Bolano 20% SC</li>
                                <li>Altracol  32 SC</li>
                                <li>Shega</li>
                                <li>Aero Zeb</li>
                                <li>Dolar 52.5 WDG</li>
                                <li>Crop Zeb</li>
                                <li>COSAVET</li>
                              </div>
                              <a href="#3" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:synergist-insecticide-bioassays" aria-hidden="true"></i>
                          <h2>Insecticide</h2>
                          <p>
                            <ul>
                              <li>Aim 10%</li>
                              <li>Agrothoate(Diimathoate)</li>
                              <li>Confidence</li>
                              <li>Priour</li>
                              <li>Agrolambacin</li>
                               <div id="4" style="display:none">
                                <li>Ethiolation</li>
                                <li>Malamar</li>
                                <li>Megaban (Termite)</li>
                                <li>Nehissa (Dimethoat) 0.5L</li>
                                <li>Ajenta / For thrips/</li>
                                <li>Best</li>
                                <li>Profit  /for Aphids /</li>
                                <li>Starprofenfos</li>
                                <li>Guard 5% EC</li>
                                <li>Diazinon</li>
                                <li>Perfecto /for ephids/</li>
                                <li>Gain</li>
                                <li>Bravo / for stalk borer/</li>
                                <li>Firatie</li>
                                <li>Lacy 50% EC</li>
                                <li>Profex</li>
                                <li>Signal</li>
                                <li>Hunter</li>
                                <li>Tutan</li>
                                <li>karatie / For thrips/</li>
                                <li>Tafgor</li>
                                <li>Trycel l/Chlorophyrifos/ </li>
                                <li>Carbaryle 85% WP</li>
                                <li>Cellphose</li>
                                <li>Tamphose</li>
                                <li>Fullingphose</li>
                                <li>Kill phose</li>
                                <li>Zincphose</li>
                                <li>Quickphos</li>
                                <li>Letphose</li>
                                <li>Shenpose</li>
                                <li>Talic (50gm)</li>
                                <li>Malathion 5% dust</li>
                                <li>Deltakal for weevils (50gm)</li>
                                <li>Roach killer</li>
                               </div>
                              <a href="#4" class="nav-toggle">Read More</a>
                               </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:i-training-class-negative" aria-hidden="true"></i>
                          <h2>መረጃና ስልጠና</h2>
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
                          <i class="fa iconify" data-icon="openmoji:rat" aria-hidden="true"></i>
                          <h2>Rodentcide</h2>
                          <p>
                            <ul>
                              <li>Stop</li>
                              <li>Commando</li>
                              <li>Ratox</li>
                              <li>Phosphide</li>                              
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="service_container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="si-glyph:shovel" aria-hidden="true"></i>
                          <h2>Farm Tools and Utensils</h2>
                          <p>
                            <ul>
                              <li>PICS</li>
                              <li>Sickles</li>
                              <li>Sprayers</li>
                              <li>Watering can</li>
                              <li>Maize Sheller Moterized</li>
                              <div id="7" style="display:none">
                                <li>Maize sheller Manual</li>
                                <li>Wheat Cutter</li>
                                <li>Teff Row planter </li>
                                <li>Wheat & Teff Tresher </li>
                                <li>Gabion</li>
                                <li>Spade</li>
                                <li>Pick Axe</li>
                              </div>
                              <a href="#7" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="carbon:crop-growth" aria-hidden="true"></i>
                          <h2>Field Crop Seeds</h2>
                          <p>
                            <ul>
                              <li>DK-777 Maize Variety</li>
                              <li>Limu  Maize Variety </li>
                              <li>BH - 661 Maize Variety</li>
                              <li>Teff (kuncho)</li>
                              <li>Faba Bean seed </li>
                              <div id="8" style="display:none">
                                <li>Chick Pea</li>
                              </div>
                              <a href="#8" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="fluent:f-stop-16-filled" aria-hidden="true"></i>
                          <h2>Fertilizer</h2>
                          <p>
                            <ul>
                              <li>NPS Chemical Fertilizer</li>
                              <li>UREA Chemical Fertilizer</li>
                              <li>Eco-Green Organic Fertilizer</li>
                              <li>Hello Inorganic Fertilizer</li>
                              <li>Wuxal</li>
                              <div id="9" style="display:none">
                                <li>Green Miracle </li>
                                <li>Bio - Fertilizer </li>
                              </div>
                              <a href="#9" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:spraying" aria-hidden="true"></i>
                          <h2>Sprayers Spare Parts</h2>
                          <p>
                            <ul>
                              <li>Hose</li>
                              <li>Nozzel</li>
                              <li>Agitater</li>
                              <li>Lance</li>
                              <li>Controle valve</li>
                              <div id="10" style="display:none">
                              </div>
                              <a href="#10" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="vs:chicken" aria-hidden="true"></i>
                          <h2>Livestock Farming Equipments</h2>
                          <p>
                            <ul>
                              <li>Bee Veil</li>
                              <li>Bee brush</li>
                              <li>Water container for Chickens</li>
                              <li>Poultery Feeder</li>
                              <li>Queen Excluder</li>
                              <div id="11" style="display:none">
                                <li>Smoker</li>
                                <li>Honey Wax</li>
                                <li>Lactometer</li>
                                <li>Refracto meter</li>
                                <li>Plastic hand glove</li>
                                <li>Hand glove leather</li>
                                <li>Nazava</li>
                              </div>
                              <a href="#11" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="dashicons:carrot" aria-hidden="true"></i>
                          <h2>Vegetable Seeds</h2>
                          <p>
                            <ul>
                              <li>Beet Root</li>
                              <li>Cabbage</li>
                              <li>Carrot</li>
                              <li>Swisschard</li>
                              <li>Lettuce</li>
                              <div id="12" style="display:none">
                                <li>Tomato (POP)</li>
                              </div>
                              <a href="#12" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="service_container">
                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:forest" aria-hidden="true"></i>
                          <h2>Forestry Seeds</h2>
                          <p>
                            <ul>
                              <li>Woira Zer</li>
                              <li>Gesho Zer</li>
                              <li>Bulie Bahirzafe Zer</li>
                              <li>Key Bahirzafe Zer</li>
                              <li>Zigba Zer</li>
                              <div id="13" style="display:none">
                                <li>Omedila  Zer</li>
                                <li>Habsa Tsid Zer</li>
                              </div>
                              <a href="#13" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="ic:baseline-grass" aria-hidden="true"></i>
                          <h2>Animal Forage Seeds</h2>
                          <p>
                            <ul>
                              <li>Rodes Grass</li>
                              <li>Lucinea</li>
                              <li>Trelucern</li>
                              <li>Vetch</li>
                              <li>Lab Lab</li>
                              <div id="14" style="display:none">
                              </div>
                              <a href="#14" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="whh:antivirusalt" aria-hidden="true"></i>
                          <h2>Anthilmintic</h2>
                          <p>
                            <ul>
                              <li>Albenda  2500</li>
                              <li>Alzole </li>
                              <li>Ashalbin</li>
                              <li>Ashoxy 20% powder</li>
                              <li>Clozasole</li>
                              <div id="15" style="display:none">
                                <li>Diaznol</li>
                                <li>Fasinex</li>
                                <li>Flukazash cattle  2700</li>
                                <li>Flucazash sheep 340 </li>
                                <li>Fasinex Sheep 250 gm</li>
                                <li>Fenacure 750</li>
                                <li>Fenben 750</li>
                                <li>Flucazash  Cattle/China</li>
                                <li>Flucazash Sheep-340</li>
                                <li>H-Oxico 2700</li>
                                <li> H-Oxy Vat 200(100g)</li>
                                <li>Indigestion Powder</li>
                                <li> Iver (Plastic)</li>
                                <li>Iver (Glass)</li>
                                <li>Fenacure 750</li>
                                <li>Fenbendazole 2700</li>
                                <li>Milk way</li>
                                <li>Nizal Qk 2400</li>
                                <li> Petazole</li>
                                <li> Tetra</li>
                                <li> Tetrafen</li>
                                <li> Virocid</li>
                                <li> YZ - Oxy 3400</li>
                              </div>
                              <a href="#15" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="icon-park-outline:medicine-bottle" aria-hidden="true"></i>
                          <h2>Antibiotic</h2>
                          <p>
                            <ul>
                              <li>Aminovit</li>
                              <li>Ashampro 20%</li>
                              <li>CAPH</li>
                              <li>Diminal</li>
                              <li>Diminazic</li>
                              <div id="16" style="display:none">
                                <li>Dimnashish</li>
                               <li>Duxam QK 600 gm</li>
                               <li>Egg Boast WSP</li>
                               <li>Egg Stimulant</li>
                               <li>Fenbendazol</li>
                               <li>Levanide</li>
                               <li>Multivitamin</li>
                               <li>New Oxy</li>
                               <li>Oxytetra</li>
                               <li>OXYTETRACYCLIN</li>
                               <li>Oxytor 20 %</li>
                               <li>Oxy tong 10:%</li>
                               <li>Oxytong 20%/</li>
                               <li>Oxyvet</li>
                               <li>Oxyvic</li>
                               <li>Oxy forever 10%</li>
                               <li>Oxy new 20%</li>
                               <li>Palben 2500</li>
                               <li>PPF EFARM</li>
                               <li>Penstrip</li>
                               <li>Petazole</li>
                               <li>Penstrip</li>
                               <li>Sequzen</li>
                               <li>Sulpha </li>
                               <li>Tripashish</li>
                               <li>Veriben</li>
                               <li>Vita Stress</li>
                               <li>Vita Chicks</li>
                              </div>
                              <a href="#16" class="nav-toggle">Read More</a>

                               </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="healthicons:syringe-vaccine-negative" aria-hidden="true"></i>
                          <h2>Equipments</h2>
                          <p>
                            <ul>
                              <li>Mica Syringe</li>
                              <li>Boiling Gun</li>
                              <li>Burdizo cattle</li>
                              <li>Burdizo sheep</li>
                              <li>Mannual  termometer</li>
                              <div id="17" style="display:none">
                                <li>Digital Termometer</li>
                                <li>Dipossable syringe 20 ml</li>
                                <li>Needle</li>
                                <li>Sergical blade</li>
                                <li>Sergical glove</li>
                                <li>Stetscop</li>
                                <li>Teat Chanal</li>
                              </div>
                              <a href="#17" class="nav-toggle">Read More</a>
                            </ul>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="service_item">
                          <i class="fa iconify" data-icon="ic:baseline-sanitizer" aria-hidden="true"></i>
                          <h2>Anticeptic</h2>
                          <p>
                            <ul>
                              <li>Alcohol</li>
                              <li>Sablon</li>
                              <li>Iodine</li>
                              <li>Soap</li>
                              <li>Ajacs</li>
                              <div id="18" style="display:none">
                              </div>
                              <a href="#18" class="nav-toggle">Read More</a>
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
                  <li class="active filter" data-filter=".ill">ከማሳ በጥቂቱ </li>
                  <li class="filter" data-filter=".brand">የእርሻ መሳሪያዎች</li>
                  <li class="filter" data-filter=".fs">ኬሚካሎች</li>
                  <li class="filter" data-filter=".ze">ዘርና ማዳበሪያ</li>
                  <li class="filter" data-filter=".de">ደንበኞቻችን በግብይት ላይ </li>
                  <li class="filter" data-filter=".si">ስልጠናዎች</li>
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
                  style="position: absolute; left: 0px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/farm/DSC00903r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/DSC00903r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/farm/DSC00912r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/DSC00903r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/farm/DSC00913r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/DSC00903r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/farm/DSC00914r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/DSC00903r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ill singal_item p-0"
                  style="position: absolute; left: 0px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/farm/DSC00902r_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/DSC00903r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item p-0"
                  style="position: absolute; left: 390px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/equipments/DSC00381r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/equipments/DSC00381r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item p-0"
                  style="position: absolute; left: 390px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/equipments/DSC00383r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/equipments/DSC00383r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 brand singal_item p-0"
                  style="position: absolute; left: 390px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/equipments/DSC00384r.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/equipments/DSC00384r.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item p-0"
                  style="position: absolute; left: 780px; top: 0px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/chemicals/DSC00399_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/chemicals/DSC00399_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 fs singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/chemicals/DSC00400_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/chemicals/DSC00400_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>       
                <!-- portfolio single item -->  
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ze singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/seedsfertilizers/222.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/seedsfertilizers/222.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ze singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/seedsfertilizers/444.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/seedsfertilizers/444.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ze singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/seedsfertilizers/555.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/seedsfertilizers/555.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 ze singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/seedsfertilizers/666.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/seedsfertilizers/666.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->  
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00248_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00248_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00269_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00269_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00326_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00326_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00337_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00337_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00338_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00338_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00341_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00341_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00344_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00344_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00350_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00350_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 de singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/exchange/DSC00364_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/exchange/DSC00364_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- portfolio single item -->  
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00212_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00212_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC01059_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC01059_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC01052_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC01052_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00226_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00226_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC01045_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC01045_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00215_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00215_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00220_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00220_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00214_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00214_adobespark.jpg')}}" data-lightbox="sab"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="col-md-4 col-sm-6 col-lg-4 col-xs-12 si singal_item p-0"
                  style="position: absolute; left: 390px; top: 260px">
                  <div class="singal-galary">
                    <img class="img-fluid" src="{{asset('app/img/training/DSC00213_adobespark.jpg')}}" alt="" />
                    <div class="work_hover">
                      <a href="{{asset('app/img/training/DSC00213_adobespark.jpg')}}" data-lightbox="sab"
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
              <p>dfhdfhgf sdfhdfh sdfhdfh sdfhdfh sdfhdfh</p>
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
              <p>cbcbh fghfghfg fghfghfgh dfghfghfgh dfghfghfgh fgh</p>
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
    <!-- <script src="{{asset('app/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('app/js/popper.min.js')}}"></script>
    <script src="{{asset('app/js/bootstrap.min.js')}}"></script> -->
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <!-- main -->
    <script src="{{asset('app/js/main.js')}}"></script>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.nav-toggle').click(function () {
            var collapse_content_selector = $(this).attr('href');
            var toggle_switch = $(this);
            $(collapse_content_selector).toggle(function () {
                if ($(this).css('display') == 'none') {
                    toggle_switch.html('Read More');
                } else {
                    toggle_switch.html('Read Less');
                }
            });
        });

      });
    </script>
  </body>
</html>

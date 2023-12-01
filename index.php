<?php
include './header.php';
?>

<head>
  <style>
    .flip-card-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
      margin-top: 20px;
    }

    .flip-card {
      width: 260px;
      height: 185px;
      perspective: 500px;
    }

    .content {
      position: absolute;
      width: 100%;
      height: 100%;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      transition: transform 1s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .content {
      transform: rotateY(180deg);
      transition: transform 0.5s;
    }

    .front {
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      width: 100%;
      background: white;
      color: #03446A;
      text-align: center;
      border-radius: 5px;
    }
    .back {
      position: absolute;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      width: 100%;
      background: white;
      color: #03446A;
      text-align: center;
      border-radius: 5px;
      backface-visibility: hidden;
    }

    .back {
      background: #1C46A8;
      color: white;
      transform: rotateY(180deg);
    }

    .zoom-in {
      position: relative;
      overflow: hidden;
      display: inline-block;
    }

    .zoom-in img {
      transition: transform 0.3s ease;
    }

    .zoom-in:hover img {
      transform: scale(1.2);
    }

    .swiperlogo-b {
      width: 600px;
      height: 215px;
    }

    .swiper-back-card {
      width: 580px;
      height: 215px;
      margin-left: -50px;
      margin-top: -47px;
      background-color: #1C46A8;
      border-radius: 0px;
      border-top: 30px solid;
      border-color: #081A48;
      border-left: 52px solid transparent;
      border-right: 52px solid transparent;
    }

    .zoom-In:hover img {
      transform: scale(1.2);
    }

    .zoom-In img {
      transition: 0.3s ease-out;
    }
  </style>
</head>

<body>
  <div class="website-background" style="background-color:#F7FDFF; padding-top:60px">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="./images/mobile-development.webp" class="d-block w-100" alt="best-mobile-app-development-company-chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1 style="font-size:35px">Innovating People, Celebrating Culture, Redefining Workplace Excellence.</h1>
                <h2 style="font-size:24px">MDQuality Apps Solutions-</h2>
                <h3 style="font-size:20px">pioneer in Native and Hybrid Mobile App Development of <a class="inner-link" href=""> Android</a> and <a class="inner-link" href="">iOS</a></h3>
              </div>

            </div>

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./images/web-development.webp" class="d-block w-100" alt="best-web-development-company-chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1>Your Path to Technological Transformation.</h1>
                <h4>MDQuality Apps Solutions-</h4>
                <h5>pioneer in Native and Hybrid Website Development of <a class="inner-link" href=""> Android</a> and <a class="inner-link" href="">iOS</a></h5>
              </div>

            </div>

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./images/mobile-development.webp" class="d-block w-100" alt="best-cyber-security-development-company-chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1>Instructing Today, Versatile Tomorrow, Transforming the Future</h1>
                <h4>MDQuality Apps Solutions-</h4>
                <h5>pioneer in Native and Hybrid Mobile App Development of <a class="inner-link" href=""> Android</a> and <a class="inner-link" href="">iOS</a></h5>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- secondsection -->
    <div class="container-fluid">
      <div class="row px-4">
        <div class="col-lg-6 p-4" style="text-align:justify">
          <h5 class="py-3" style="color:#081A48; font-weight:700;">WE ARE MDQ</h5>
          <h2 style="font-weight:700;line-height:50px;color:#1C46A8">Empowering People through Technology</h2>
          <h5 class="py-2" style="font-weight:700;">We find ourselves at the dawn of a new era in digital transformation.</h5>
          <p class="website-para">Established in 2016, MDQuality Apps has rapidly expanded its client base across three different countries. Our core focus is on delivering comprehensive IT services and industry-specific solutions across 13 domains worldwide. Whether you're an ISV or a large corporation, we're here to accelerate your progress and unlock future possibilities. With a wealth of industry knowledge and technical prowess, we're dedicated to creating tangible value through digitalization and propelling various sectors forward by leveraging cutting-edge innovations.</p>
          <p class="website-para">At MDQuality Apps, we're committed to fostering innovation and addressing today's technology needs. Our co-founder, Divya L, leads our team of professionals and problem solvers on a mission to become a global leader in IT services and solutions. We draw inspiration from our diverse culture, unwavering commitment, and expertise as we collaborate effectively with partners and clients.</p>
          <div class="web-button-div">
            <button class="web-button my-4">About Us</button>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6">
              <div>
                <div class="card fourth-sec-card mx-4 mt-5 d-flex justify-content-center align-items-center" style="background-color:#6892D7">
                  <div class="card-body px-3 pb-5">
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/android.png" alt="android" />
                  </div>
                </div>
                <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                  <div class="card-body">
                    <h6 style="color:#1C46A8; font-weight:600">MOBILE APP</h6>
                    <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0101'></span>+</p>
                    <p>Extensive experience in delivering IT solutions & services.</p>
                  </div>
                </div>
              </div>
              <div class="my-5">
                <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#5CB85C">
                  <div class="card-body">
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/mac-os--v1.png" alt="mac-os--v1" />
                  </div>
                </div>
                <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                  <div class="card-body">
                    <h6 style="color:#1C46A8; font-weight:600">iOS</h6>
                    <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0102'></span>+</p>
                    <p>Extensive experience in delivering IT solutions & services.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-5 mt-4 ">
              <div class="my-5">
                <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#F15048">
                  <div class="card-body ">
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/programming.png" alt="programming" />
                  </div>
                </div>
                <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                  <div class="card-body">
                    <h6 style="color:#1C46A8; font-weight:600">WEBSITE</h6>
                    <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0103'></span>+</p>
                    <p>Extensive experience in delivering IT solutions & services.</p>
                  </div>
                </div>
              </div>
              <div class="my-5">
                <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#FB9056">
                  <div class="card-body">
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/administrator-male--v1.png" alt="administrator-male--v1" />
                  </div>
                </div>
                <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                  <div class="card-body">
                    <h6 style="color:#1C46A8; font-weight:600">CLIENTS</h6>
                    <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0104'></span>+</p>
                    <p>Clients across the globe testifying our quality & processes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- clients -->
      <div class="clients">
        <div class="swiperlogo">
          <div class="container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/clients/algoshacklogo.pptx.png" alt="custom web development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/ARpower.png" alt="android app development company usa" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/azonixlogo.pptx.png" alt="android app development company in bangalore" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/cartunez.png" alt="iphone app development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/clubnoww.png" alt="android app development company in usa" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/CMRAgency.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/dulydecors.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/evtron.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/fujifilmlogo.pptx.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/imsklogo.pptx.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/nadilogo.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/pixellogo.pptx.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vibrocarelogo.pptx.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/viscoperuse.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vkart.png" alt="" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vsafelogo.pptx.png" alt="" width="60%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid pl-5 pt-5 my-1">
      <h5 class=" px-5" style=" font-weight:700; color:#1C46A8">OUR SERVICES</h5>
      <h1 class="py-3 px-5" style="font-weight:800;color:#081A48">Providing a full range of services</h1>
      <?php
      include './includes/slider.php';
      ?>
    </div>

    <div class="industries container">
      <h5 class="pt-5" style="font-weight:700;  color:#1C46A8">Services We Offer</h5>
      <h2 class="py-3" style="font-weight:800;color:#081A48;">Here, We make almost every genre of applications. You name it and we build it.</h2>
      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <a href="./offering-mobile-app.php">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/900/A73FC0/android-os.png" alt="android-os"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">Android App Development</p>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/000000/mac-os.png" alt="mac-os"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">iOS App Development</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <a href="./offering-web-application.php">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/333FE7/google-code.png" alt="google-code"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">Web Design & Development</p>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <a href="./offering-ar-vr.php">
          <div class="flip-card-container">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/F92C2C/oculus-rift.png" alt="oculus-rift"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">AR App Development</p>
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <a href="industry-iot.php">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">IoT App Development</p>
                </div>
              </div>
            </div>
            </a>
          </div>
        </div><div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/5CB85C/virtual-reality.png" alt="virtual-reality"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">VR App Development</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                  <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/FB9056/settings-3.png" alt="settings-3"/>
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">Process Automation</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container">
            <div class="flip-card">
              <div class="content">
                <div class="front">
                  <div class="d-flex justify-content-center align-items-center">
                    <img width="70" height="70" src="https://img.icons8.com/ios/500/A33FBC/mobile-shopping-bag.png" alt="mobile-shopping-bag" />
                  </div>
                </div>
                <div class="back">
                  <p style="text-align:center">Automation Testing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid pt-5">
      <h5 class=" px-5" style=" font-weight:700; color:#1C46A8">TECHNOLOGY STACK</h5>
      <h1 class="py-3 px-5" style="font-weight:800;color:#081A48;">Technologies we work with</h1>
      <div class="d-flex justify-content-center">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="color:black; background-color:#F7FDFF !important">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-Front-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Front-End" type="button" role="tab" aria-controls="pills-Front-End" aria-selected="true">Front-End</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Back-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Back-End" type="button" role="tab" aria-controls="pills-Back-End" aria-selected="false">Back-End</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-Mobile" type="button" role="tab" aria-controls="pills-Mobile" aria-selected="false">Mobile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Open-Source-tab" data-bs-toggle="pill" data-bs-target="#pills-Open-Source" type="button" role="tab" aria-controls="pills-Open-Source" aria-selected="false">Open Source</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-devops-tab" data-bs-toggle="pill" data-bs-target="#pills-devops" type="button" role="tab" aria-controls="pills-devops" aria-selected="false">DevOps / Clouds</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-Database-tab" data-bs-toggle="pill" data-bs-target="#pills-Database" type="button" role="tab" aria-controls="pills-Database" aria-selected="false">Database</button>
          </li>
        </ul>
      </div>
      <div class="tab-content px-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-Front-End" role="tabpanel" aria-labelledby="pills-Front-End-tab">
          <div class="d-flex justify-content-center">
            <div>
              <div class="row">
                <div class="col-lg-12">
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/html-5--v1.png" alt="html-5--v1" />
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/css3.png" alt="css3" />
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/500/1C46A8/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-react-social-media-tanah-basah-glyph-tanah-basah" />
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/angularjs.png" alt="angularjs" />

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Back-End" role="tabpanel" aria-labelledby="pills-Back-End-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12">
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/php-logo.png" alt="php-logo" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/python.png" alt="python" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/windows/500/1C46A8/node-js.png" alt="node-js" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios/500/1C46A8/laravel.png" alt="laravel" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Mobile" role="tabpanel" aria-labelledby="pills-Mobile-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12">
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/flutter.png" alt="flutter" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/500/1C46A8/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-react-social-media-tanah-basah-glyph-tanah-basah" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/wired/500/1C46A8/iphone-x.png" alt="iphone-x" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/android-os.png" alt="android-os" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/kotlin.png" alt="kotlin" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/swift.png" alt="swift" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Open-Source" role="tabpanel" aria-labelledby="pills-Open-Source-tab">
          ...
        </div>
        <div class="tab-pane fade" id="pills-devops" role="tabpanel" aria-labelledby="pills-devops-tab">...</div>
        <div class="tab-pane fade" id="pills-Database" role="tabpanel" aria-labelledby="pills-Database-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12">
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/500/1C46A8/external-mongodb-a-cross-platform-document-oriented-database-program-logo-bold-tal-revivo.png" alt="external-mongodb-a-cross-platform-document-oriented-database-program-logo-bold-tal-revivo" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/mysql-logo.png" alt="mysql-logo" />
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/500/1C46A8/maria-db.png" alt="maria-db" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid pl-5 py-5" style="position:relative">
      <h5 class=" px-5" style="font-weight:700;color:#1C46A8">OUR WORK</h5>
      <h1 class="py-3 px-5" style="font-weight:800; color:#081A48">Our happiness lies in the journey</h1>
      <div class="swiperlogo">
        <div class="container d-flex justify-content-center align-items-center ">
          <div class="swiper-container" id="slider2">
            <div class="swiper-wrapper my-2">
              <div class="swiper-slide py-5 px-3">
                <a href="./readmore-portfolio.php" style="color:black; text-decoration:none">
                  <div class="card our-work-card" style="border-radius:0px">
                    <img class="portfolio-img py-1" src="./images/our-work/portfolio/beppers-mdq.jpeg" alt="mdq-beppers-website" width="100%" style="background-color:#EC0E71;">
                    <div class="py-3 d-flex  align-items-center px-4">
                      <div class="portfolio-logo" style="background-color:#EC0E71;">
                        <img src="./images/our-work/portfolio/icons8-makeup-brush-100.png" alt="web development company chennai" width="25px" height="25px">
                      </div>
                      <h5 style="text-align:center; font-weight: 600;">&nbsp;&nbsp; Beppers</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide py-5 px-3">
                <a href="./readmore-portfolio.php" style="color:black; text-decoration:none">
                  <div class="card our-work-card">
                    <img class="portfolio-img py-1" src="./images/our-work//portfolio/beppers-mdq.jpeg" alt="mdq-beppers-website" width="100%" style="background-color:#EC0E71;">
                    <div class="py-3 d-flex  align-items-center px-4">
                      <div class="portfolio-logo" style="background-color:#EC0E71;">
                        <img src="./images/our-work/portfolio/icons8-makeup-brush-100.png" alt="web development company chennai" width="25px" height="25px">
                      </div>
                      <h5 style="text-align:center; font-weight: 600;">&nbsp;&nbsp; Beppers</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide py-5 px-3">
                <a href="./readmore-portfolio.php" style="color:black; text-decoration:none">
                  <div class="card our-work-card">
                    <img class="portfolio-img py-1" src="./images/our-work//portfolio/beppers-mdq.jpeg" alt="mdq-beppers-website" width="100%" style="background-color:#EC0E71;">
                    <div class="py-3 d-flex  align-items-center px-4">
                      <div class="portfolio-logo" style="background-color:#EC0E71;">
                        <img src="./images/our-work/portfolio/icons8-makeup-brush-100.png" alt="web development company chennai" width="25px" height="25px">
                      </div>
                      <h5 style="text-align:center; font-weight: 600;">&nbsp;&nbsp; Beppers</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class=" pl-5 py-5">
      <div class="container">
        <h5 style="font-weight:700;  color:#1C46A8">NEWS & INSIGHT</h5>
        <h2 class="py-3" style="font-weight:800;color:#081A48;">Our happiness lies in the journey</h2>
        <div class="row">
          <div class="col-lg-6">
            <div class="card ">
              <img src="./images/news-blog.jpg" alt="" width="100%">
              <div class="card-body p-4 my-4">
                <h5 class="my-3" style="font-weight:600">Modern Web and Mobile Development Solutions</h5>
                <p>Discover case study highlights that display how our feature-rich, aesthetically appealing mobile and web app solutions helped clients in a wide range of sectors resolve their complex business problems.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card  mb-5 mt-2">
              <div class="card-body p-4 my-3">
                <h6 style="color:#081A48; font-weight: 600;">BLOG</h6>
                <h5 class="my-3" style="font-weight:600">Working with remote developers</h5>
                <p>Employing remote developers guarantees scalability, continued innovation, and rapid team ramp-up.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-body p-4 my-3">
                <h6 style="color:#081A48; font-weight: 600;">BLOG</h6>
                <h5 class="my-3" style="font-weight:600">Working with remote developers</h5>
                <p>Employing remote developers guarantees scalability, continued innovation, and rapid team ramp-up.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="testimonial" style="background: url(./images/arrangement-with-different-expressions.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh">
        <div class="card swiper-back-card"></div>
        <div class="swiperlogo-b" style="position: absolute;">
          <div class="container d-flex justify-content-center align-items-center">
            <div class="swiper-container" id="slider1">
              <div class="swiper-wrapper my-2">
                <div class="swiper-slide ">
                  <div class="card swiper-slide-b py-4" style="border-radius: 0px;">
                    <div class="card-body">
                      <h2>Obito</h2>
                      <p>With specific goals in mind, we've formulated solutions catering to unique requirements. Our team, proficient in addressing varied needs, focuses on innovation and adaptability to meet evolving standards.</p>

                    </div>
                  </div>
                  <div class="d-flex justify-content-end" style="margin-top: -70px; position:relative;">
                    <img src="./images/istockphoto-1364917563-612x612.jpg" alt="" style="border-radius:10px; border: 3px solid #1C46A8" width="100px" height="100px">
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-b">
                  <div class="card py-4">
                    <div class="card-body">
                      <h2>Development of Another Type</h2>
                      <p>With specific goals in mind, we've formulated solutions catering to unique requirements. Our team, proficient in addressing varied needs, focuses on innovation and adaptability to meet evolving standards.</p>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide swiper-slide-b">
                  <div class="card py-4">
                    <div class="card-body">
                      <h2>Development of Another Type</h2>
                      <p>With specific goals in mind, we've formulated solutions catering to unique requirements. Our team, proficient in addressing varied needs, focuses on innovation and adaptability to meet evolving standards.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <div class="industries container">
      <h5 class="pt-5" style="font-weight:700;  color:#1C46A8">Industries We Serve</h5>
      <h2 class="py-3" style="font-weight:800;color:#081A48;">Here, We make almost every genre of applications. You name it and we build it.</h2>
      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/A540BF/mobile-shopping-bag--v2.png" alt="mobile-shopping-bag--v2"/>
            </div>
            <p class="pb-4" style="text-align:center">E-Commerce</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/external-goofy-solid-kerismaker/960/DE9025/external-E-learning-education-goofy-solid-kerismaker.png" alt="external-E-learning-education-goofy-solid-kerismaker"/>
            </div>
            <p class="pb-4" style="text-align:center">Education & E-Learning</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/6835AF/electric-vehicle.png" alt="electric-vehicle"/>
            </div>
            <p class="pb-4" style="text-align:center">Electric Vechicle</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando"/>
            </div>
            <p class="pb-4" style="text-align:center">IoT Apps</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/2963E2/soup-plate.png" alt="soup-plate"/>
            </div>
            <p class="pb-4" style="text-align:center">Food & Restaurants</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/glyph-neue/1000/DDB01A/trust--v1.png" alt="trust--v1"/>
            </div>
            <p class="pb-4" style="text-align:center">Healthcare & Fitness</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/pastel-glyph/1000/92DE1E/transport--delivery--logistics--cargo--parcel--box--service-28.png" alt="transport--delivery--logistics--cargo--parcel--box--service-28"/>
            </div>
            <p class="pb-4" style="text-align:center">Logistics & Distribution</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/33DBB4/property.png" alt="property"/>
            </div>
            <p class="pb-4" style="text-align:center">E-Commerce</p>
          </div>
        </div>
      </div>
    </div>
    <script>
      const reviewsCarouselOptions = {
        direction: 'horizontal',
        freeMode: true,
        grabCursor: true,
        speed: 600,
        a11y: false,
        loop: false,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 5,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 10,
          },
          1366: {
            slidesPerView: 5,
            spaceBetween: 20,
          },
          1500: {
            slidesPerView: 6,
            spaceBetween: 20,
          },
        },
        autoplay: {
          delay: 2000,
        },
        loop: true,
      };
      const reviewsCarousel = new Swiper('.swiper-container', reviewsCarouselOptions);


      const slider1Options = {
        direction: 'horizontal',
        freeMode: true,
        grabCursor: true,
        speed: 600,
        a11y: false,
        loop: false,
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 5,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          1366: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          1500: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
        },
        autoplay: {
          delay: 2000,
        },
        loop: true,
      };
      const slider1 = new Swiper('#slider1', slider1Options);


      const slider2Options = {
        direction: 'horizontal',
        freeMode: true,
        grabCursor: true,
        speed: 600,
        a11y: false,
        loop: false,
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 5,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          1366: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          1500: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
        },
        autoplay: {
          delay: 2000,
        },
        loop: true,
      };
      const slider2 = new Swiper('#slider2', slider2Options);
    </script>
    <script>
      function animate(obj, initVal, lastVal, duration) {
        let startTime = null;

        const step = (timestamp) => {
          if (!startTime) {
            startTime = timestamp;
          }
          const progress = Math.min((timestamp - startTime) / duration, 1);
          obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
          if (progress < 1) {
            window.requestAnimationFrame(step);
          }
        };

        window.requestAnimationFrame(step);
      }

      let text1 = document.getElementById('0101');
      let text2 = document.getElementById('0102');
      let text3 = document.getElementById('0103');
      let text4 = document.getElementById('0104');

      const load = () => {
        animate(text1, 0, 110, 7000);
        animate(text2, 0, 95, 7000);
        animate(text3, 0, 120, 7000);
        animate(text4, 0, 200, 7000);
      }
      window.addEventListener('load', load);
    </script>
  </div>
</body>
<?php
include './footer.php';
?>
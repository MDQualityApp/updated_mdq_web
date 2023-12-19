<?php
include './header.php';
?>

<head>
<meta name="description" content="Elevate your digital journey with the premier software development company in India, Dubai, and the USA. Transform ideas into powerful solutions. Click now for cutting-edge technology, expert developers, and unmatched innovation!
" />
<meta name="keywords" content="Software Development Company, Custom Software Development" />
<title>Leading Software Development Company in India, Dubai, and USA | Transform Your Ideas into Solutions</title>
  <style>
    .swiper-container-1 {
      background: url(./images/our-work/mobile/mobileframe.png);
      background-position: center;
      background-size: cover;
      width: 250px;
      height: 500px;
    }

    .swiper-container-2 {
      background: url(./images/our-work/web/com-4.png);
      background-position: center;
      background-size: cover;
      width: 500px;
      height: 400px
    }

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

    .mobile-center {
      display: flex;
    }

    @media (max-width:720px) {
      .mobile-center {
        display: inline-block;
      }
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
          <img src="./images/mobile-development.webp" class="d-block w-100" alt="best mobile app development company chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1 style="font-size:35px">Innovating People, Celebrating Culture, Redefining Workplace Excellence.</h1>
                <h2 style="font-size:24px">MDQuality Apps Solutions-</h2>
                <h3 style="font-size:20px">pioneer in Native and Hybrid Mobile App Development of <a class="inner-link" href="./offering-mobile-app.php"> Android</a> and <a class="inner-link" href="#">iOS</a></h3>
              </div>

            </div>

          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./images/web-development.webp" class="d-block w-100" alt="best web development company chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1>Your Path to Technological Transformation.</h1>
                <h4>MDQuality Apps Solutions-</h4>
                <h5>pioneer in Native and Hybrid Website Development of <a class="inner-link" href="#"> Android</a> and <a class="inner-link" href="#">iOS</a></h5>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./images/cyber-security.webp" class="d-block w-100" alt="best cyber security development company chennai">
          <div class="card-img-overlay">
            <div class="row">
              <div class="col-lg-6 px-5">
                <h1>Instructing Today, Versatile Tomorrow, Transforming the Future</h1>
                <h4>MDQuality Apps Solutions-</h4>
                <h5>pioneer in Native and Hybrid Mobile App Development of <a class="inner-link" href="#"> Android</a> and <a class="inner-link" href="#">iOS</a></h5>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- secondsection -->
    <div class="container-fluid">
      <div class="row px-4">
        <div class="col-lg-6 p-4" >
          <h5 class="py-3" style="color:#081A48; font-weight:700;">WE ARE MDQ</h5>
          <h2 style="font-weight:700;line-height:50px;color:#1C46A8">Empowering People through Technology</h2>
          <h5 class="py-2" style="font-weight:700;">We find ourselves at the dawn of a new era in digital transformation.</h5>
          <p class="website-para" style="text-align:justify">Established in 2016, MDQuality Apps has rapidly expanded its client base across three different countries. Our core focus is on delivering comprehensive IT services and industry-specific solutions across 13 domains worldwide. Whether you're an ISV or a large corporation, we're here to accelerate your progress and unlock future possibilities. With a wealth of industry knowledge and technical prowess, we're dedicated to creating tangible value through digitalization and propelling various sectors forward by leveraging cutting-edge innovations.</p>
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
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/mac-os--v1.png" alt="mac" />
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
                    <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/administrator-male--v1.png" alt="administrator-male" />
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
            <div class="swiper-container" id="slider1">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./images/clients/algoshacklogo.pptx.png" alt="custom web development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/ARpower.png" alt="android app development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/azonixlogo.pptx.png" alt="android app development" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/cartunez.png" alt="iphone app development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/clubnoww.png" alt="android app development company mobile" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/CMRAgency.png" alt="cmragency" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/dulydecors.png" alt="dulydecors mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/evtron.png" alt="evtron mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/fujifilmlogo.pptx.png" alt="fujifilmlogo mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/imsklogo.pptx.png" alt="imsklogo mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/nadilogo.png" alt="nadilogo mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/pixellogo.pptx.png" alt="pixellogo mdq website development company" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vibrocarelogo.pptx.png" alt="vibrocarelogo app development mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/viscoperuse.png" alt="viscoperuse mdq" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vkart.png" alt="vkart web devlopment" width="60%"></div>
                <div class="swiper-slide"><img src="./images/clients/vsafelogo.pptx.png" alt=" vsafe mdq app and web development company" width="60%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid px-5  pt-5 my-1">
      <div>
        <h5 class="" style=" font-weight:700; color:#1C46A8">OUR SERVICES</h5>
        <h1 class="py-3" style="font-weight:800;color:#081A48">Providing a full range of services</h1>
      </div>
      <?php
      include './includes/slider.php';
      ?>
    </div>

    <div class="industries px-5 container-fluid">
      <h5 class="pt-5" style="font-weight:700;  color:#1C46A8">Services We Offer</h5>
      <h2 class="py-3" style="font-weight:800;color:#081A48;">Here, We make almost every genre of applications. You name it and we build it.</h2>
      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
            <a href="./offering-mobile-app.php">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/900/A73FC0/android-os.png" alt="android-os" />
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
          <a href="">
            <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/000000/mac-os.png" alt="mac-os" />
                    </div>
                  </div>
                  <div class="back">
                    <p style="text-align:center">iOS App Development</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1100">
            <a href="./offering-web-application.php">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/333FE7/google-code.png" alt="google-code" />
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
            <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1600">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/F92C2C/oculus-rift.png" alt="oculus-rift" />
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

          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1600">
            <a href="industry-iot.php">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando" />
                    </div>
                  </div>
                  <div class="back">
                    <p style="text-align:center">IoT App Development</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1100">
            <a href="">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/5CB85C/virtual-reality.png" alt="virtual-reality" />
                    </div>
                  </div>
                  <div class="back">
                    <p style="text-align:center">VR App Development</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
            <a href="">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/FB9056/settings-3.png" alt="settings-3" />
                    </div>
                  </div>
                  <div class="back">
                    <p style="text-align:center">Process Automation</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
            <a href="">
              <div class="flip-card">
                <div class="content">
                  <div class="front">
                    <div class="d-flex justify-content-center align-items-center">
                      <img width="70" height="70" src="https://img.icons8.com/ios-filled/300/1C46A8/robot.png" alt="robot" />
                    </div>
                  </div>
                  <div class="back">
                    <p style="text-align:center">Automation Testing</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid px-5 pt-5">
      <h5 style=" font-weight:700; color:#1C46A8">TECHNOLOGY STACK</h5>
      <h2 class="py-3" style="font-weight:800;color:#081A48;">Technologies we work with</h2>
      <div class="d-flex justify-content-center p-2" style="background-color:#1C46A8 !important; width:70%; margin-left:15%;margin-bottom:30px; border-radius:40px">
        <ul class="nav  nav-pills mb-3" id="pills-tab" role="tablist" style="margin:0px !important;">
          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-work active" id="pills-Front-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Front-End" type="button" role="tab" aria-controls="pills-Front-End" aria-selected="true">Front-End</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-work" id="pills-Back-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Back-End" type="button" role="tab" aria-controls="pills-Back-End" aria-selected="false">Back-End</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-work" id="pills-Mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-Mobile" type="button" role="tab" aria-controls="pills-Mobile" aria-selected="false">Mobile</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-work" id="pills-devops-tab" data-bs-toggle="pill" data-bs-target="#pills-devops" type="button" role="tab" aria-controls="pills-devops" aria-selected="false">DevOps / Clouds</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link nav-link-work" id="pills-Database-tab" data-bs-toggle="pill" data-bs-target="#pills-Database" type="button" role="tab" aria-controls="pills-Database" aria-selected="false">Database</button>
          </li>
        </ul>
      </div>
      <div class="tab-content px-5" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-Front-End" role="tabpanel" aria-labelledby="pills-Front-End-tab">
          <div class="d-flex justify-content-center">
            <div>
              <div class="row">
                <div class="col-lg-12 mobile-center">
                  <div class="d-flex">
                    <div>
                      <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/html-5--v1.png" alt="html-5--v1" />
                      <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">HTML</p>
                    </div>
                  </div>
                  <div class="d-flex">
                  <div>
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/css3.png" alt="css3" />
                  <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">CSS</p>
                  </div>
                  </div>
                  <div class="d-flex">
                  <div>
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/500/1C46A8/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-react-social-media-tanah-basah-glyph-tanah-basah" />
                  <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">React JS</p>
                  </div>
                  </div>
                  <div class="d-flex">
                  <div>
                  <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/angularjs.png" alt="angularjs" />
                  <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Angular JS</p>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Back-End" role="tabpanel" aria-labelledby="pills-Back-End-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12 mobile-center">
              <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/php-logo.png" alt="php-logo" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">PHP</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/python.png" alt="python" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Python</p>
  </div>
  </div>
                <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/windows/500/1C46A8/node-js.png" alt="node-js" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Node JS</p>
                </div>
                </div>
                <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios/500/1C46A8/laravel.png" alt="laravel" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">laravel</p>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Mobile" role="tabpanel" aria-labelledby="pills-Mobile-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12 mobile-center">
              <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/flutter.png" alt="flutter" />

                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Flutter</p>
                </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/500/1C46A8/external-react-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-react-social-media-tanah-basah-glyph-tanah-basah" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">React</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/wired/500/1C46A8/iphone-x.png" alt="iphone-x" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">iOS</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/android-os.png" alt="android-os" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Android</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/kotlin.png" alt="kotlin" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Kotlin</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/swift.png" alt="swift" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Swift</p>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-devops" role="tabpanel" aria-labelledby="pills-devops-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12 mobile-center">
              <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/windows/3200/1C46A8/amazon-web-services.png" alt="amazon-web-services" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">AWS</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/800/1C46A8/azure-1.png" alt="azure-1" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Azure</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-glyphs/900/1C46A8/cloud.png" alt="cloud" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Google Cloud</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/fluency-systems-filled/960/1C46A8/docker.png" alt="docker" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Doker</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/1000/1C46A8/jenkins.png" alt="jenkins" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Jenkins</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/windows/900/1C46A8/kubernetes.png" alt="kubernetes" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Kubernetes</p>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-Database" role="tabpanel" aria-labelledby="pills-Database-tab">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-12 mobile-center">
              <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/500/1C46A8/external-mongodb-a-cross-platform-document-oriented-database-program-logo-bold-tal-revivo.png" alt="external-mongodb-a-cross-platform-document-oriented-database-program-logo-bold-tal-revivo" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">Mongo</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/1C46A8/mysql-logo.png" alt="mysql-logo" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">MySQL</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="./images/pngwing.com.png" alt="maria-db" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">MariaDB</p>
                    </div>
                    </div>
                    <div class="d-flex">
                    <div>
                <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/1000/1C46A8/postgreesql.png" alt="postgreesql" />
                <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">PostgreSQL</p>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="website-para pt-4">We harness a diverse range of cutting-edge technologies and tools to engineer robust, scalable, and high-performance mobile and web applications. Our proficiency in these technologies allows us to remain at the forefront of the continuously evolving development landscape.</p>
      <p class="website-para">We are committed to staying updated with the latest advancements in both mobile and web technologies. Our team continuously explores and adopts emerging tools and frameworks to ensure that your mobile and web applications are built using the most efficient, reliable, and scalable solutions available in the industry.</p>
    </div>

    <!-- <div class="container-fluid pl-5 py-5" style="position:relative">
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
    </div> -->


    <div class="portfolio  mt-5">
      <div class="container-fluid px-5 px-3">
        <h5 style="font-weight:700;color:#1C46A8">OUR WORK</h5>
        <h2 class="py-3" style="font-weight:800;color:#081A48;">We bring your ideas to life by creating intuitive, feature-rich mobile applications for iOS and Android platforms. </h2>
        <div class="row">
          <div class="col-lg-3">
            <div class="clients">
              <div class="swiperlogo">
                <div class="container">
                  <div class="swiper-container swiper-container-1" id="slider3" style="margin-left:10px">
                    <div class="swiper-wrapper" style="margin-top:25px; margin-left:20px; border-radius:10px">
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/Home screen open card . transaction scroll.png" width="100%" alt="mdq mobile development"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/unnamed (1).jpg" width="100%" alt="web development mdq"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/unnamed (2).jpg" width="100%" alt="vsafe mdq"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/unnamed (3).jpg" width="100%" alt="srinar mdq"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/unnamed (4).jpg" width="100%" alt="igreen mdq"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/Card list screen.png" width="100%" alt="android development mdq"></div>
                      <div class="swiper-slide swiper-slide-1"><img style="border-radius:20px;width:210px; height: 450px;" class="radius" src="images/our-work/mobile/unnamed (5).jpg" width="100%" alt="website development mdq"></div>
                    </div>
                    <script>
                      const reviewsCarousel_1_Options = {
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
                      const reviews_Carousel = new Swiper('#slider3', reviewsCarousel_1_Options);
                    </script>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9 p-5 d-flex justify-content-center align-items-center">
            <div class="">
              <h2 style="color:#1C46A8; font-weight:600;">Mobile Application Development</h2>
              <p class="fs-5" style=" padding-right:10%">From concept to deployment, we bring your ideas to life by creating intuitive, feature-rich mobile applications for iOS and Android platforms. Our team of experienced developers ensures seamless functionality and stunning designs that captivate users.</p>
              <div class="web-button-div">
                <a href="./portfolio.php">
                  <button class="web-button mt-2">Read More</button>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="">
              <h2 style="color:#1C46A8; font-weight:600;">Web Application Development</h2>
              <p class="fs-5">From conceptualization to deployment, our dedicated team ensures that your vision is realized in every aspect of the website application. We emphasize intuitive designs, seamless functionality, and user engagement to deliver an end product that exceeds expectations.</p>
              <div class="web-button-div">
                <a href="./portfolio.php">
                  <button class="web-button mt-2">Read More</button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="swiper-container swiper-container-2" id="slider4">
              <div class="swiper-wrapper" style="margin-top:73px; margin-left:43px;">
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/b.png" alt="bebbers mdq" width="100%"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/food-finder.png" width="100%" alt="best food finder mdq"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/shopztrend.png" width="100%" alt="shopztrend mdq"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/igreen.png" width="100%" alt="igreen mdq"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/beppers-banner.png" width="100%" alt="bebbers mdq"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/shield-connect.png" width="100%" alt="shield connect mdq"></div>
                <div class="swiper-slide swiper-slide-1"><img style="border-radius:0px;width:412px; height: 232px;" class="radius" src="images/our-work/web/gogreen.png" width="100%" alt="gogreen mdq"></div>

              </div>
              <script>
                const reviewsCarousel_2_Options = {
                  direction: 'horizontal',
                  freeMode: true,
                  grabCursor: true,
                  speed: 600,
                  a11y: false,
                  loop: false,
                  breakpoints: {
                    640: {
                      slidesPerView: 1,
                    },
                    768: {
                      slidesPerView: 1,

                    },
                    1024: {
                      slidesPerView: 1,

                    },
                    1366: {
                      slidesPerView: 1,

                    },
                    1500: {
                      slidesPerView: 1,

                    },
                  },
                  autoplay: {
                    delay: 2000,
                  },
                  loop: true,
                };
                const reviews_1_Carousel = new Swiper('#slider4', reviewsCarousel_2_Options);
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="industries container-fluid px-5">
      <h5 class="pt-5" style="font-weight:700;  color:#1C46A8">Industries We Serve</h5>
      <h2 class="py-3" style="font-weight:800;color:#081A48;">Here, We make almost every genre of applications. You name it and we build it.</h2>
      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/A540BF/mobile-shopping-bag--v2.png" alt="mobile-shopping-bag--v2" />
            </div>
            <p class="pb-4" style="text-align:center">E-Commerce</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/external-goofy-solid-kerismaker/960/DE9025/external-E-learning-education-goofy-solid-kerismaker.png" alt="external-E-learning-education-goofy-solid-kerismaker" />
            </div>
            <p class="pb-4" style="text-align:center">Education & E-Learning</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/6835AF/electric-vehicle.png" alt="electric-vehicle" />
            </div>
            <p class="pb-4" style="text-align:center">Electric Vechicle</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando" />
            </div>
            <p class="pb-4" style="text-align:center">IoT Apps</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/2963E2/soup-plate.png" alt="soup-plate" />
            </div>
            <p class="pb-4" style="text-align:center">Food & Restaurants</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/glyph-neue/1000/DDB01A/trust--v1.png" alt="trust--v1" />
            </div>
            <p class="pb-4" style="text-align:center">Healthcare & Fitness</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/pastel-glyph/1000/92DE1E/transport--delivery--logistics--cargo--parcel--box--service-28.png" alt="transport--delivery--logistics--cargo--parcel--box--service-28" />
            </div>
            <p class="pb-4" style="text-align:center">Logistics & Distribution</p>
          </div>
        </div>
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
            <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
              <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/33DBB4/property.png" alt="property" />
            </div>
            <p class="pb-4" style="text-align:center">Real Estate</p>
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
      const reviewsCarousel = new Swiper('#slider1', reviewsCarouselOptions);


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
      const slider1 = new Swiper('#slider2', slider1Options);


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
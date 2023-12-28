<?php
include './header.php';
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/42ccddb556.js" crossorigin="anonymous"></script>
    <style>
.group-photo {
  position: relative;
  text-align: center;
  color: white;
}

        .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

        .zoom-gallery:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<div class="background-color" style="background-color:#F7FDFF; padding-top:60px">
    <div class="group-photo">
    <img src="./images/mdq-team-14.jpg" alt="Snow" style="width:100%;">
    <div class="centered">We Transform your Idea into Business</div>
        <!-- <div class="d-flex align-items-center" style="background-color: rgba(0, 0, 0, 0.6); width:100%; height: 100%;">
        <h1 class=" mt-5" style="color:white; font-weight:600; font-size:60px; padding-left:100px; padding-right:100px">We Transform your Idea into Business</h1> -->
    </div>
    </div>
    <div class="container-fluid">
        <div class="p-5">
            <h2 style="font-weight:700; color:#1C46A8;">Company Overview:</h2>
            <p class="website-para">At MD Quality Apps, we're committed to fostering innovation and addressing today's technology needs. Our co-founder, Divya L, leads our team of professionals and problem solvers on a mission to become a global leader in IT services and solutions. We draw inspiration from our diverse culture, unwavering commitment, and expertise as we collaborate effectively with partners and clients.</p>
        </div>
        <div class="row px-5" style="background:linear-gradient(to right, #1C46A8, #081A48); color:white">
            <div class="col-lg-7 py-4 px-3">
                <div>
                    <h2 style="font-weight:800">Our mission is to make our clients succeed</h2>
                    <h3 style="font-size:22px; line-height:35px">Empowering our clients' success is at the core of our mission. At MacAppStudio, we're dedicated to crafting innovative solutions that not only propel our clients forward but also foster their longevity among industry leaders. Our commitment extends beyond just delivering solutions; it's about enabling sustained excellence within their domains.</h3>
                </div>
            </div>
            <div class="col-lg-5 d-flex justify-content-center align-items-center">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">


                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <div class="d-flex justify-content-center">
                                <img src="images/Doctor.png" alt="docter medical fields" class="d-block" width="80%">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="images/chef.png" alt="catering and kitchen" class="d-block " width="80%">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center">
                                <img src="images/Office.png" alt="it office developments" class="d-block " width="80%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .swiper-slide-team{
            border-radius: 100%;
        }
    </style>
    <div class="container-fluid px-5" style="padding-top:5%; padding-bottom:10%">
    <h2 class="py-3" style="font-weight:700; color:#1C46A8;">Our Team</h2>
        <div class=" d-flex justify-content-center align-items-center" style="height:100%">
        <!-- <div class="swiper-container swiper-container-1" id="slider3">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-team">
                    <img style="border-radius:100%;" class="radius" src="images/robert.png"  width="100%" alt="mdq mobile development"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="web development mdq"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="vsafe mdq"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="srinar mdq"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="igreen mdq"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="android development mdq"></div>
                <div class="swiper-slide swiper-slide-team"><img style="border-radius:100%;" class="radius" src="images/robert.png" width="100%" alt="website development mdq"></div>
            </div>
            <div class="swiper-button-prev custom-prev" style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/back.png') !important;"></div>
            <div class="swiper-button-next custom-next" style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/forward--v1.png') !important;"></div>

        </div> -->
        </div>
    </div>
    <div class="gallery">
        <div class="row" style="padding:0px !important; margin:0px">
            <div class="col-lg-6 " style="padding: 0 !important; overflow: hidden;">
                <div style="width: 100%;  overflow: hidden;">
                    <img class="zoom-gallery" src="./images/team/mdq-team-1.webp" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality apps solutions" height="100%" style="transition: transform 0.3s ease-in-out;">
                </div>
            </div>
            <style>

            </style>

            <div class="col-lg-3" style="padding: 0 !important; overflow: hidden;">
                <div style="width: 100%; overflow: hidden;">
                    <img class="zoom-gallery" src="./images/team/mdq-team-14.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdqualityapps solutions">
                </div>
            </div>
            <div class="col-lg-3" style="padding: 0 !important; overflow: hidden;">
                <div style="width: 100%; overflow: hidden;">
                    <img class="zoom-gallery" src="./images/team/mdq-team-10.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality">
                </div>
            </div>
            <div class="row" style="padding:0px !important; margin:0px">
                <div class="col-lg-4" style="padding: 0 !important; overflow: hidden;">
                <div class="row" style="padding:0px !important; margin:0px">
                        <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                    <div style="width: 100%; overflow: hidden;">
                        <img class="zoom-gallery" src="./images/team/mdq-team.jpeg" width="100%" style="transition: transform 0.3s ease-in-out;"  alt="mdq">
                    </div>
                    </div>
                    <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-11.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality developers">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" style="padding: 0 !important; overflow: hidden;">

                    <div class="row" style="padding:0px !important; margin:0px">
                        <div class="col-lg-5" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-5.jpg" width="100%" style="transition: transform 0.3s ease-in-out;"  alt="mdquality team">
                            </div>
                        </div>
                        <div class="col-lg-7" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-6.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6" style="padding: 0 !important; overflow: hidden;">
                        <div class="row" style="padding:0px !important; margin:0px">
                        <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-7.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality developers">
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-12.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality developers">
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6" style="padding: 0 !important; overflow: hidden;">
                        <div class="row" style="padding:0px !important; margin:0px">
                        <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-15.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality apps chennai">
                            </div>
                            </div>
                        <div class="col-lg-12" style="padding: 0 !important; overflow: hidden;">
                            <div style="width: 100%; overflow: hidden;">
                                <img class="zoom-gallery" src="./images/team/mdq-team-13.jpg" width="100%" style="transition: transform 0.3s ease-in-out;" alt="mdquality apps chennai">
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .nav-link-aboutus {
            color: #8da2d3 !important;
            font-weight: 800;
            font-size: 20px;
            text-align: left !important;
        }

        .nav-pills-aboutus .nav-link-aboutus.active {
            border-radius: 0px !important;
            color: #1C46A8 !important;
            background-color: #F7FDFF !important;
            font-weight: 800;
        }
    </style>
    <div class="container-fluid p-5">
        <div>
            <h2 style="font-weight:700; color:#1C46A8;">Empowering People through Technology</h2>
            <p class="website-para">We find ourselves at the dawn of a new era in digital transformation.</p>
            <p class="website-para">Established in 2016, MD Quality Apps has rapidly expanded its client base across three different countries. Our core focus is on delivering comprehensive IT services and industry-specific solutions across 13 domains worldwide. Whether you're an ISV or a large corporation, we're here to accelerate your progress and unlock future possibilities. With a wealth of industry knowledge and technical prowess, we're dedicated to creating tangible value through digitalization and propelling various sectors forward by leveraging cutting-edge innovations.</p>
            <div class="row">
                <div class="d-flex align-items-start">
                    <div class="col-lg-4 d-flex align-items-center justify-content-center" style="height:100%">
                        <div class="nav flex-column nav-pills nav-pills-aboutus me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link nav-link-aboutus active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-shield-alt"></i> Our Principles:</button>
                            <button class="nav-link nav-link-aboutus" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-binoculars"></i> Our Vision:</button>
                            <button class="nav-link nav-link-aboutus" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-bullseye"></i> Our Mission:</button>
                            <button class="nav-link nav-link-aboutus" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-check-circle"></i> Ensuring Quality:</button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-5 p-4 d-flex justify-content-center align-items-center" style="height: 300px;">
                                        <img style="border-radius: 20px;" src="./images/principles.webp" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                                        <p class="website-para" style="padding-right: 14%;">
                                            Our core values shape the culture of MD Quality Apps, continuously driving us to develop innovative solutions and nurture strong relationships with customers, employees, and the community.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                <div class="col-lg-5 p-4 d-flex justify-content-center align-items-center" style="height: 300px;">
                                        <img style="border-radius: 20px;" src="./images/vission.webp" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                                        <p class="website-para">
                                            We aspire to lead the global IT products and services industry, with an unwavering commitment to innovation, excellence, and ethical corporate practices. Our ultimate goal is to make a positive impact on society.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="row">
                                <div class="col-lg-5 p-4 d-flex justify-content-center align-items-center" style="height: 300px;">
                                        <img style="border-radius: 20px;" src="./images/mission.webp" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                                        <p class="website-para">
                                            We're dedicated to engineering excellence, quality standards, and customer satisfaction. Our mission is to craft innovative solutions and deliver top-notch services that enhance the value of your business.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="row">
                                <div class="col-lg-5 p-4 d-flex justify-content-center align-items-center" style="height: 300px;">
                                        <img style="border-radius: 20px;" src="./images/quality.webp" width="100%" alt="">
                                    </div>
                                    <div class="col-lg-7 d-flex align-items-center justify-content-center">
                                        <p class="website-para">
                                            Adhering to established international quality standards, we provide efficient, high-quality services and solutions that help clients achieve their project goals while constantly striving for excellence in everything we do.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                        2000: {
                            slidesPerView: 6,
                            spaceBetween: 20,
                        },
                    },
                    autoplay: {
                        delay: 2000,
                    },
                    loop: true,
                    navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                };
                const reviews_Carousel = new Swiper('#slider3', reviewsCarousel_1_Options);
            </script>
    <?php
    include './footer.php';
    ?>
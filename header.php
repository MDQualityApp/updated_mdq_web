<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"> </script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js" integrity="sha512-NdZyIQYjul6RuB0vCoq9ec+xqTO2riVTZAZf9YM3BHkkcJxFTq7z9FAK3PXP+XYs5zQRuOycmL5GdwD85t2T+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"> </script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
  <img id="logo" src="./images/mdq-white.png" alt="app-development-company-chennai" width="115">
</a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav nav_ani mx-auto">
          <li class="nav-item scroll-nav-item ">
            <a class="nav-link scroll-nav-link nav_ani_li active nav-underline" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item scroll-nav-item">
            <div class="dropdown">
              <a class="nav-link scroll-nav-link nav_ani_li dropdown nav-underline" style="cursor: pointer;">Company</a>
              <?php include './dropdown-company.php'; ?>
            </div>
          </li>
          <li class="nav-item scroll-nav-item ">
            <div class="dropdown">
              <a class="nav-link scroll-nav-link nav_ani_li dropdown nav-underline" style="cursor: pointer;">Our Work</a>
              <?php include './dropdown-ourwork.php'; ?>
          </li>
          <li class="nav-item scroll-nav-item ">
            <div class="dropdown">
              <a class="nav-link scroll-nav-link nav_ani_li dropdown nav-underline" style="cursor: pointer;">Services</a>
              <?php include './dropdown-services.php'; ?>
            </div>
          </li>
          <li class="nav-item scroll-nav-item ">
            <div class="dropdown">
              <a class="nav-link scroll-nav-link nav_ani_li dropdown nav-underline" style="cursor: pointer;">Technology</a>
              <?php include './dropdown-technology.php'; ?>
            </div>
          </li>
          <li class="nav-item scroll-nav-item ">
            <div class="dropdown">
              <a class="nav-link scroll-nav-link nav_ani_li dropdown nav-underline" style="cursor: pointer;">Hire Developers</a>
              <?php include './dropdown-hiredevelopers.php'; ?>
          </li>

        </ul>
        <nav class="bub-nav custom-btn  " style="margin-top:5px">
          <div class="navbar_button frame">
            <a class="mar-a" href="#contactus">
              <span class="mar-span"></span>
              <span class="mar-span"></span>
              <span class="mar-span"></span>
              <span class="mar-span"></span>
              <ul class="bub-ul btn-11 letstalk_button">
                <li class="bub-li">
                  Let's Talk
                  <span class="bub-span"></span>
                  <span class="bub-span"></span>
                  <span class="bub-span"></span>
                  <span class="bub-span"></span>
                </li>
              </ul>
              <div class="dot"></div>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </nav>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar');
  if (window.scrollY > 30) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});
window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar');
  var logo = document.getElementById('logo');

  if (window.scrollY > 30) {
    navbar.classList.add('scrolled');
    logo.src = './images/MDQualityappssolutions.png'; // Change to the path of your new logo
    logo.style.width = '100px'; // Set the width for the scrolled state
  } else {
    navbar.classList.remove('scrolled');
    logo.src = './images/mdq-white.png'; // Change back to the original logo path
    logo.style.width = '115px'; // Set the width for the default state
  }
});
  </script>
</body>

</html>
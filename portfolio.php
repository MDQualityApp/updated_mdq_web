<?php
include './header.php';

include './connect.php';

?>
<head>
<meta name="description" content="Transform your business with our top-notch web and mobile application development services. Explore innovative enterprise software solutions tailored to meet your unique needs. Partner with us for cutting-edge technology solutions that drive success.
" />
<meta name="keywords" content="Mobile App Design and Development Portfolio, Scalable Enterprise Solutions
" />
<title>Web & Mobile Application Development | Enterprise Software Solutions
</title>
<style>
  .carousel-indicators [data-bs-target]{
    display: none;
  }
</style>
</head>
<div class="website-background" style="background-color:#F7FDFF">
    <div class="container-fluid px-5" style="padding-top:80px">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 pt-4">
                <h1 style="color:#1C46A8; font-weight:700;">Our Beautiful Interfaces</h1>
                 <p class="fs-5" >We have been instrumental in turning our clients' dreams of building exceptional technology platforms into reality, successfully launching them into the market, generating substantial revenues, amassing thousands of users, and achieving million-dollar valuations. We can replicate this success for you too. Remember, every remarkable journey begins with a single step.</p>

                </div>
                <div class="col-lg-4">
                  <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators ">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/portfolio/indxslider/image1.png" alt="Los Angeles" class="d-block slideshow"  width="100%">
      </div>
      <div class="carousel-item">
        <img  src="images/portfolio/indxslider/image2.png" alt="Chicago" class="d-block slideshow"  width="100%">
      </div>
      <div class="carousel-item">
        <img  src="images/portfolio/indxslider/image3.png" alt="New York" class="d-block  slideshow"  width="100%">
      </div>
    </div>
  </div>
 </div>
</div>


<!-- first row -->
<div class="container">
<h2 class="craft py-4 fw-bold text-center">Passion-Infused Exemplary Apps.</h2>
<div class="row">
<h3 class="craft fw-bold text-center">Mobile Applications</h3>
<?php
$logo = mysqli_query($conn, "SELECT id, projectname, aboutproject,image FROM project_list WHERE type_project=2");

while ($frow = mysqli_fetch_array($logo)) {
    $projectname = $frow['projectname'];
    $aboutproject = $frow['aboutproject'];
    $image = $frow['image'];
    $id=$frow['id'];
    ?>
            <div class="col-lg-4">
                <a href="portfolio-mobile.php?id=<?php echo $id; ?>" style="color:black; text-decoration:none">
                <!-- <a rel="preload" href="user.php?id=<?php echo $id; ?>" -->
                <div class="card mt-5 our-work-card">
                    <img class="portfolio-img py-1" src="./images/portfolio/<?php echo $image; ?>" alt="mdq-beppers-website" width="100%" style="background-color:#1C46A8;">
                    <div class="py-3 px-2">
                    <h4 class="mx-4 fw-bold text-start"><?php echo $projectname; ?></h4>
                <h6 class="mx-4"><?php echo $aboutproject; ?></h6>
                    </div>
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
</div>
<div class="container">
<div class="row py-5">
      <h3 class="craft fw-bold text-center">Web Applications</h3>
<?php
$logo = mysqli_query($conn, "SELECT id, projectname, aboutproject,image FROM project_list WHERE type_project=1");

while ($frow = mysqli_fetch_array($logo)) {
    $projectname = $frow['projectname'];
    $aboutproject = $frow['aboutproject'];
    $image = $frow['image'];
    $id=$frow['id'];
    ?>
            <div class="col-lg-4">
                <a href="portfolio-web.php?id=<?php echo $id; ?>" style="color:black; text-decoration:none">
                <!-- <a rel="preload" href="user.php?id=<?php echo $id; ?>" -->
                <div class="card mt-5 our-work-card">
                    <img class="portfolio-img py-1" src="./images/portfolio/<?php echo $image; ?>" alt="mdq-beppers-website" width="100%" style="background-color:#1C46A8;">
                    <div class="py-3 px-2">
                    <h4 class="mx-4 fw-bold text-start"><?php echo $projectname; ?></h4>
                <h6 class="mx-4"><?php echo $aboutproject; ?></h6>

                    </div>
                </div>
                </a>
            </div>
            <?php } ?>
</div>
</div>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>
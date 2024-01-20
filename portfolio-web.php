<?php
include './header.php';
include './connect.php';
?>
<style>
     div.item {
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
    width: 120px;
}
.sizeclr {
    width: 50px;
    height: 50px;

}
.caption {
    /* Make the caption a block so it occupies its own line. */
    display: block;
}
</style>
<div class="website-background" style="padding-top:63px">
    <div class="container-fluid">
    <div class="useclr container-fluid">
            <div class="container">
            <?php
            $id=$_GET['id'];

            $logo=mysqli_query($conn,"SELECT aw.webproject_title AS project_title,aw.weblogo_images AS logo_images,aw.webbanner_images AS banner_images,aw.webproject_overview AS project_overview,aw.webphotos AS photos,aw.technology AS awtechnology,aw.project_id AS project_id,tn.technology AS technology,tn.technology_images AS technology_images FROM web_details aw INNER JOIN technology_name tn ON tn.id=aw.technology Where aw.cilent_id='$id'");

            while ($frow = mysqli_fetch_array($logo)) {
               $projectlogo = $frow['logo_images'];
               $bannerimages = $frow['banner_images'];
               $overview = $frow['project_overview'];
               $project_title = $frow['project_title'];
               $mobileimages = $frow['photos'];
               $awtechnology= $frow['awtechnology'];
               $project_id = $frow['project_id'];

                    ?>
            <div class="row py-4">
                <div class="col-lg-6">
                <div style="width:80px; height:80px">
                      <img  src="images/portfolio/<?php echo $projectlogo; ?>"  width="100%">
                </div>
                      <h2 class="py-4 fw-bold"><?php echo $project_title;?></h2>


            <?php
                  $projectpointsid = $frow['project_id'];
                  $resultpoints= explode(",", $projectpointsid );
                $points = array_map('trim', array_filter($resultpoints));
                   foreach ($points as $prjpoints) {
                    $pointsimg=mysqli_query($conn,"SELECT id, images, projectpoints FROM project_points WHERE id='$prjpoints'");
                       while ($frow = mysqli_fetch_array($pointsimg)) {
                          $projectpoints = $frow['projectpoints'];
                         $images= $frow['images'];
                                            ?>


          <h5 class="py-1">
            <?php
                 if ($prjpoints != null) {
                   echo "<img src='images/portfolio/$images'   width='50px' height='50px'/>";
                               }

                                            ?>
                 <span class=""><?php echo $projectpoints; ?></span>
     </h5>
        <?php } }?>

                   <p class="px-2 py-4 ">Platforms developed :
                    <div class="col-lg-8 px-4 d-flex ">
                    <div >
        <img class="px-1" width="30px" src="images/portfolio/ios.png">
       ios
    </div>
    <p class="px-2">|</p>
    <div>
        <img width="20px" src="images/portfolio/Android.png">
       android
    </div>
    <p  class="px-2">|</p>
    <div >
        <img width="20px" src="images/portfolio/Reactjs.png">
        Reactjs
    </div>
    </div>
                </p>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="images/portfolio/<?php echo $bannerimages; ?>" width="100%" height="100%">
                </div>
            </div>
        </div>
        </div>

        <div class="container pybot">
        <div class="row py-4">
            <div class="col-lg-4">
                <h3 class="fw-bold">Overview</h3>
            </div>
            <div class="col-lg-8">
             <p>
             <?php echo $overview; ?></p>
            </div>
        </div>
    </div>
    <!-- Technology -->
<div class="container">
    <div class="row py-4">
        <div class="col-lg-4">
            <h3 class="fw-bold">Technology</h3>
        </div>

            <div class="col-lg-8 d-flex ">
            <?php

                $resulttechnology = explode(",", $awtechnology);
              $result = array_map('trim', array_filter($resulttechnology));
                 foreach ($result as $tech) {
                  $technologyimg=mysqli_query($conn,"SELECT id, technology, technology_images FROM technology_name WHERE id='$tech'");
                     while ($frow = mysqli_fetch_array($technologyimg)) {
                        $technology= $frow['technology'];
                       $technology_images= $frow['technology_images'];
                                          ?>


            <div class="item">
            <?php
                 if ($tech != null) {
                   echo "<img src='images/portfolio/$technology_images' class='img-fluid px-2' alt='$tech' width='50%' height='80%'/>";
                               }

                                            ?>
                 <span class="caption"><?php echo $technology; ?></span>
        </div>
        <?php } }?>
              </div>
        </div>
</div>
  <?Php } ?>
        <div>
            <div class="swiper-container" id="slider1">
                <div class="swiper-wrapper">
                <?php
                                      $resultImages = explode(",", $mobileimages);
                                      $resultImages = array_map('trim', array_filter($resultImages));
                                         foreach ($resultImages as $img) {
                                            ?>
                    <div class="swiper-slide py-5 px-3">
                            <div class="card d-flex justify-content-center align-items-center" style="border:none; width:330px;">
                            <?php
                                                if ($img != null) {
                                                    echo "<img src='websites/$img' class='img-fluid shadow' alt='$img' width='100%' height='100%'/>";
                                                }

                                            ?>
                            </div>
                    </div>

                    <?php } ?>
                </div>

                <div class="swiper-button-prev custom-prev px-5" style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/back.png') !important;"></div>
                <div class="swiper-button-next custom-next px-5" style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/forward--v1.png') !important;"></div>

            </div>
        </div>

        <div class="clients pt-5">
            <h3 class="mt-4" style="color: #064B96; font-weight:700; text-align:center;">Want to Know More?</h3>
            <h5 class="my-4" style="color: black; text-align:center;">Connect with us to know more and how we helped our client achieve their goals</h5>
            <div class="swiperlogo">
                <div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <?php
$logo = mysqli_query($conn, "SELECT id, projectname, aboutproject,image FROM project_list WHERE type_project=1");

while ($frow = mysqli_fetch_array($logo)) {
    $projectname = $frow['projectname'];
    $aboutproject = $frow['aboutproject'];
    $image = $frow['image'];
    $id=$frow['id'];
    ?>
                            <div class="swiper-slide py-5 d-flex justify-content-center">

                                <a href="portfolio-web.php?id=<?php echo $id; ?>" style="color:black; text-decoration:none">
                <!-- <a rel="preload" href="user.php?id=<?php echo $id; ?>" -->
                <div class="card mt-5 our-work-card p-4">
                <div class="d-flex justify-content-center align-items-center" style="width:100%; height:250px; background-color:#1CC4F8">
                    <img class="portfolio-img py-1" src="./images/portfolio/<?php echo $image; ?>" alt="mdq-beppers-website" width="100%">
                </div>
                    <div class="py-3 px-2">
                    <h4 style="color:#1C46A8" class="fw-bold text-start"><?php echo $projectname; ?></h4>
                <h6 style="color:rgba(0, 0, 0, 0.7)"><?php echo $aboutproject; ?></h6>

                    </div>
                </div>
                </a>

                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-prev custom-prev" style="background-image:none !important;"><img width="40" height="40" src="https://img.icons8.com/material-outlined/150/1C46A8/circled-chevron-left.png" alt="circled-chevron-right"/></div>
                    <div class="swiper-button-next custom-next" style="background-image:none !important;"><img width="40" height="40" src="https://img.icons8.com/material-outlined/150/1C46A8/circled-chevron-right.png" alt="circled-chevron-right"/></div>

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
                                    slidesPerView: 1,
                                    spaceBetween: 5,
                                },
                                768: {
                                    slidesPerView: 2,
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
                            navigation: {
                                nextEl: '.swiper-button-next',
                                prevEl: '.swiper-button-prev',
                            },
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
                        const slider1 = new Swiper('#slider1', slider1Options);
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include './footer.php';
?>
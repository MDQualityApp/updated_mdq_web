<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
        <div class="col-auto px-0">
                <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/admin/', $path);
                $first_part = $components[1];
                include 'sidebar.php'; ?>
            </div>
            <div class="col py-3 table-responsive">

                <div id="post" class="tabcontent">
                    <?php
                    if (isset($_POST['postedit'])) {
                        $postid = $_POST['postid'];
                        //echo $user_id;
                        $result = mysqli_query($conn, "SELECT * FROM carousel WHERE id = '$postid'");
                        while ($users = mysqli_fetch_array($result)) {
                    ?>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 py-3">
                                        <div class="row py-3">
                                            <a href="carouseltable.php">
                                                <button type="button" class="btn-close btn-close-black" aria-label="Close">
                                                </button>
                                            </a>
                                            <div class='text-center'>
                                                <h4 class='fw-bold text-uppercase'>Carousel Edit</h4>
                                            </div>
                                        </div>
                                        <form action='carouselbackend.php' method='post' enctype="multipart/form-data">
                                            <div style='border-radius:1rem' class="card shadow px-3 py-3">
                                                <div class="row py-3 gy-3">
                                                    <div class="col-lg-12">
                                                        <div class="py-1">
                                                            <label for="gallery" class="form-label">Selected Image :</label>
                                                            <div class="row">
                                                                <?php
                                                               $image = $users['image'];{
                                                                    echo "<div class='col-md-4 col-lg-3'>";
                                                                    echo "<img src='../images/carousel/$image' class='img-fluid' alt='$image'>";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="py-1">
                                                                <label for="image" class="form-label">File Upload</label>
                                                                <input class="form-control" type="file" name="image" value="<?php echo $users['image']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="py-1">
                                                            <input type="text" class='d-none' value='<?php echo $users['id']; ?>' name='id'>
                                                            <label for="name" class="form-label">Heading :</label>
                                                            <input type="text" name='imgname' value='<?php echo $users['title1']; ?>' class="form-control" id="imgname" placeholder="Enter the name">
                                                            <label for="name" class="form-label">Heading :</label>
                                                            <input type="text" name='imgname' value='<?php echo $users['title2']; ?>' class="form-control" id="imgname" placeholder="Enter the name">
                                                            <label for="name" class="form-label">Heading :</label>
                                                            <input type="text" name='imgname' value='<?php echo $users['title3']; ?>' class="form-control" id="imgname" placeholder="Enter the name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='text-center py-3'>
                                                    <button type="submit" name='editimage' class='btn w-25'>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
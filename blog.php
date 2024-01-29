<?php
include './header.php';
include './connect.php';
?>

<head>
    <meta name="description" content="Supercharge your digital success with MDQuality Apps – where expertise meets excellence! Our stellar software and application development team craft cutting-edge solutions to propel your business forward." />
    <meta name="keywords" content="Reliable application development services, Customized application solutions" />
    <title>MDQuality Apps: Your Top Choice for Software & Application Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/42ccddb556.js" crossorigin="anonymous"></script>
    <style>
        #contactus {
            background-color: #fff !important;
        }

        .limited-text {
            overflow: hidden;
            position: relative;
            max-height: 6em;
            line-height: 1.2em;
        }

        .limited-text::before {
            content: '...';
            position: absolute;
            bottom: 0;
            right: 0;
            padding-left: 30px;
        }
    </style>
</head>
<div class="background-color" style="background-color:#fff; padding-top:30px">
    <div class="container">
        <h1 class="text-center py-4" style="color:#1C46A8; font-weight:600;">Blog</h1>
        <div class="container">
            <div class="row">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM blog");
                while ($data = mysqli_fetch_array($sql)) {
                    $id = $data['id'];
                    $title = $data['title'];
                    $content = $data['content'];
                    $image = $data['image'];
                ?>
                    <div class="col-lg-4 p-3">
                        <a href="./blog-details.php?id=<?php echo $data['id']; ?>" style="text-decoration: none; color:rgba(0, 0, 0, 0.7);">
                            <div>
                                <img src="./images/blog/<?php echo $data['image']; ?>" alt="<?php echo $data['image']; ?>" width="100%" height="300px" style="border-radius: 8px;">
                            </div>



                            <div>
                                <div class="limited-text">
                                    <p><?php echo $data['title']; ?></p>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
<?php
include './footer.php';
?>
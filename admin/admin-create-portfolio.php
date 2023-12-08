<?php include 'header.php'; ?>

<style>
    .body_color {
        background-color: #e5e8e8 !important;
    }

    .table> :not(caption)>*>* {
        background-color: #111420 !important;
    }

    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #2d2e37 !important;
    }

    .vision_button {
        margin-left: -15px;
    }

    #edit .fr-box {
        height: 500px;
        /* Set the desired height */
        border-radius: 0;
        /* Set border radius to 0 */
        border: 1px solid #ccc;
        /* Optional: Add border for visualization */
    }
</style>

<body class="body_color">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto px-0">
                <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/admin/', $path);
                $first_part = $components[1];
                include 'sidebar.php'; ?>
            </div>
            <div class="container-fluid px-5 py-3 mx-auto">
                <div class="row">
                    <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600">Create Portfolio</p>
                    <p class="fs-5 card-text" style="font-weight:600">For Slider</p>

                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq" style="border-radius:10px; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="aboutupload.php" enctype="multipart/form-data">
                                    <div class="row my-2">
                                        <div class="col-lg-6">
                                            <label for="">Project Name</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" rows="1" name="name" placeholder="Enter the Name" required />
                                        </div>
                                        <div class="col-lg-6">

                                            <label for="">Slider Image</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="" required /><br>
                                        </div>
                                        <div class="col-lg-6">

                                            <label for="">Background Color</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="Hex color code" required /><br>
                                        </div>
                                        <div class="col-lg-6">

                                            <label for="">Logo</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="" required /><br>
                                        </div>
                                    </div>
                                    <span class="d-flex justify-content-end">
                                    <button class="btn" style="width:100%; margin-left:-15px !important" type="submit" name="upload">Add</button>
                                </span>
                                </form>
                            </div>

                        </div>
                    </div>
                    <p class="fs-5 pt-4 card-text" style="font-weight:600">For Main Page</p>

                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq" style="border-radius:10px; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="aboutupload.php" enctype="multipart/form-data">
                                    <div class="row my-2">
                                        <div class="col-lg-6">
                                            <label for="">Project Name</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" rows="1" name="name" placeholder="Enter the Name" required />
                                        </div>
                                        <div class="col-lg-6">

                                            <label for="">Project Logo</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="" required /><br>
                                        </div>

                                        <div class="col-lg-6">

                                            <label for="">Technologies</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="Hex color code" required /><br>
                                        </div>
                                        <div class="col-lg-6">

                                            <label for="">Banner Image</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="" required /><br>
                                        </div>
                                        <div class="col-lg-12">

                                            <label for="">Project Screen Shots</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="1" name="image" placeholder="" required /><br>
                                        </div>
                                        <span class="d-flex justify-content-end">
                                    <button class="btn" style="width:100%; margin-left:-15px !important" type="submit" name="upload">Add</button>
                                </span>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>
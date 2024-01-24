<?php
include '../connect.php';

if(isset($_POST['edit-post'])){
    $post_id = $_POST['id'];
    $projectimages = $_FILES["logo_images"]["name"];
    $projectimagesTempname = $_FILES["logo_images"]["tmp_name"];
    $folder="../images/portfolio/";

    $bannerimages = $_FILES["banner_images"]["name"];
    $bannerimagesTempname = $_FILES["banner_images"]["tmp_name"];

    $project_overview = $_POST["project_overview"];
    $project_title = $_POST["project_title"];

    $images_name = "";
    foreach ($_FILES["photos"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["photos"]["tmp_name"][$key];
            $name = $_FILES["photos"]["name"][$key];
            $images_name = $images_name . "," . $name;

            // Move each uploaded file individually
            if (!move_uploaded_file($tmp_name, $folder . $name)) {
                echo "<script type='text/javascript'>
                    alert('Failed to move uploaded files');
                    window.location.href='table-add-mobile.php';
                </script>";
                exit;  // Exit the script if any move operation fails
            }
        }
    }

    // Move logo and banner images
    if (!move_uploaded_file($projectimagesTempname, $folder . $projectimages) || !move_uploaded_file($bannerimagesTempname, $folder . $bannerimages)) {
        echo "<script type='text/javascript'>
            alert('Failed to move uploaded files');
            window.location.href='table-add-mobile.php';
        </script>";
        exit;  // Exit the script if any move operation fails
    }

    $cilent_id = $_POST['cilent_id'];
    $technology = $_POST['technology'];
    $icontech = implode(",", $technology);

    $sql = mysqli_query($conn, "UPDATE application_web SET cilent_id = '$cilent_id', technology = '$icontech', photos = '$images_name', project_overview = '$project_overview', project_title = '$project_title', logo_images = '$projectimages' , banner_images = '$bannerimages' WHERE id = '$post_id'");

    if($sql){
        echo "<script type='text/javascript'>
            alert('Application has been updated successfully');
            window.location.href='table-add-mobile.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Failed to update application');
            window.location.href='table-add-mobile.php';
        </script>";
    }
}
?>

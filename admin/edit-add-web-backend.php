<?php
include '../connect.php';

if(isset($_POST['edit-post'])){
    $post_id = $_POST['id'];
    $projectimages = $_FILES["weblogo_images"]["name"];
    $projectimagesTempname = $_FILES["weblogo_images"]["tmp_name"];
    $folder="../images/portfolio/";

    $bannerimages = $_FILES["webbanner_images"]["name"];
    $bannerimagesTempname = $_FILES["webbanner_images"]["tmp_name"];

    $project_overview = $_POST["webproject_overview"];
    $project_title = $_POST["webproject_title"];

    $images_name = "";
    foreach ($_FILES["webphotos"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["webphotos"]["tmp_name"][$key];
            $name = $_FILES["webphotos"]["name"][$key];
            $images_name = $images_name . "," . $name;

            // Move each uploaded file individually
            if (!move_uploaded_file($tmp_name, $folder . $name)) {
                echo "<script type='text/javascript'>
                    alert('Failed to move uploaded files');
                    window.location.href='table-add-web.php';
                </script>";
                exit;  // Exit the script if any move operation fails
            }
        }
    }

    // Move logo and banner images
    if (!move_uploaded_file($projectimagesTempname, $folder . $projectimages) || !move_uploaded_file($bannerimagesTempname, $folder . $bannerimages)) {
        echo "<script type='text/javascript'>
            alert('Failed to move uploaded files');
            window.location.href='table-add-web.php';
        </script>";
        exit;  // Exit the script if any move operation fails
    }

    $cilent_id = $_POST['cilent_id'];
    $technology = $_POST['technology'];
    $icontech = implode(",", $technology);

    $sql = mysqli_query($conn, "UPDATE web_details SET cilent_id = '$cilent_id', technology = '$icontech', webphotos = '$images_name', webproject_overview = '$project_overview', webproject_title = '$project_title', weblogo_images = '$projectimages' , webbanner_images = '$bannerimages' WHERE id = '$post_id'");

    if($sql){
        echo "<script type='text/javascript'>
            alert('Application has been updated successfully');
            window.location.href='table-add-web.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Failed to update application');
            window.location.href='table-add-web.php';
        </script>";
    }
}
?>

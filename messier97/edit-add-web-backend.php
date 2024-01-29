<?php
include '../connect.php';

if (isset($_POST['edit-post'])) {
    $post_id = $_POST['id'];
    $folder = "../images/portfolio/";

    // Fetch the existing photos from the database
    $result = mysqli_query($conn, "SELECT webphotos FROM web_details WHERE id = '$post_id'");
    $row = mysqli_fetch_assoc($result);
    $existingPhotos = $_POST['hiddenPhotos'];
    // $existingPhotos = $row['hiddenPhotos'];

    // Process new photos
    $newPhotos = [];
    foreach ($_FILES["webphotos"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["webphotos"]["tmp_name"][$key];
            $name = $_FILES["webphotos"]["name"][$key];
            $newPhotos[] = $name;

            move_uploaded_file($tmp_name, $folder . $name);
        }
    }

    // Combine existing and new photos
    $removedPhotos = isset($_POST['removed_photos']) ? $_POST['removed_photos'] : [];
    foreach ($removedPhotos as $removedPhoto) {
    }

    // Combine existing, new, and removed photos
    $allPhotos = array_merge(explode(',', $existingPhotos), $newPhotos);
    $updatedPhotos = implode(',', $allPhotos);
    // $allPhotos =  $removeimage;

    $weblogo_images = $_FILES["weblogo_images"]["name"];
    $projectimagesTempname = $_FILES["weblogo_images"]["tmp_name"];

    $webbanner_images = $_FILES["webbanner_images"]["name"];
    $bannerimagesTempname = $_FILES["webbanner_images"]["tmp_name"];

    $webproject_overview = $_POST["webproject_overview"];
    $webproject_title = $_POST["webproject_title"];

    move_uploaded_file($projectimagesTempname, $folder . $weblogo_images);
    move_uploaded_file($bannerimagesTempname, $folder . $webbanner_images);

    $cilent_id = $_POST['cilent_id'];
    $technologys = isset($_POST['technology']) ? $_POST['technology'] : [];
    $technology = implode(",", $technologys);
    // Update the database with all photos and other fields
    $sql = mysqli_query($conn, "UPDATE web_details SET cilent_id = IF(LENGTH('$cilent_id')=0, cilent_id, '$cilent_id'), technology = IF(LENGTH('$technology')=0, technology, '$technology'), webphotos = IF(LENGTH('$allPhotos')=0, webphotos, ' $updatedPhotos'), webproject_overview = IF(LENGTH('$webproject_overview')=0, webproject_overview,'$webproject_overview'), webproject_title = IF(LENGTH('$webproject_title')=0, webproject_title, '$webproject_title'), weblogo_images = IF(LENGTH('$weblogo_images')=0, weblogo_images, '$weblogo_images'), webbanner_images = IF(LENGTH('$webbanner_images')=0, webbanner_images, '$webbanner_images') WHERE id = '$post_id'");

    if ($sql) {
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

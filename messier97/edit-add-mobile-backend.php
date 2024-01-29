<?php
include '../connect.php';

if(isset($_POST['edit-post'])){
    $post_id = $_POST['id'];
    $folder="../images/portfolio/";

    // Fetch the existing photos from the database
    $result = mysqli_query($conn, "SELECT photos FROM application_web WHERE id = '$post_id'");
    $row = mysqli_fetch_assoc($result);
    $existingPhotos = $_POST['hiddenPhotos'];
    // $existingPhotos = $row['hiddenPhotos'];

    // Process new photos
    $newPhotos =[];
    foreach ($_FILES["photos"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["photos"]["tmp_name"][$key];
            $name = $_FILES["photos"]["name"][$key];
            $newPhotos[] = $name;

            move_uploaded_file($tmp_name, $folder . $name);

            // if (!move_uploaded_file($tmp_name, $folder . $name)) {
            //     echo "<script type='text/javascript'>
            //         alert('Failed to move uploaded files');
            //         window.location.href='table-add-mobile.php';
            //     </script>";
            //     exit;
            // }
        }
    }

    // Combine existing and new photos
    $removedPhotos = isset($_POST['removed_photos']) ? $_POST['removed_photos'] : [];
    foreach ($removedPhotos as $removedPhoto) {
        // Remove the image from the folder if needed
        // unlink($folder . $removedPhoto);
        // You can uncomment the above line if you want to delete the image from the folder
    }

    // Combine existing, new, and removed photos
    $allPhotos = array_merge(explode(',', $existingPhotos), $newPhotos);
    $updatedPhotos = implode(',', $allPhotos);
    // $allPhotos =  $removeimage;

    $logo_images = $_FILES["logo_images"]["name"];
    $projectimagesTempname = $_FILES["logo_images"]["tmp_name"];

    $banner_images = $_FILES["banner_images"]["name"];
    $bannerimagesTempname = $_FILES["banner_images"]["tmp_name"];

    $project_overview = $_POST["project_overview"];
    $project_title = $_POST["project_title"];

    // if (!move_uploaded_file($projectimagesTempname, $folder . $logo_images) || !move_uploaded_file($bannerimagesTempname, $folder . $banner_images)) {
    //     echo "<script type='text/javascript'>
    //         alert('Failed to move a uploaded files');
    //         window.location.href='table-add-mobile.php';
    //     </script>";
    //     exit;
    // }
    move_uploaded_file($projectimagesTempname, $folder . $logo_images);
    move_uploaded_file($bannerimagesTempname, $folder . $banner_images);


    $cilent_id = $_POST['cilent_id'];
    $technologys = isset($_POST['technology']) ? $_POST['technology'] : [];
    $technology = implode(",", $technologys);
    // Update the database with all photos and other fields
    $sql = mysqli_query($conn, "UPDATE application_web SET cilent_id = IF(LENGTH('$cilent_id')=0, cilent_id, '$cilent_id'), technology = IF(LENGTH('$technology')=0, technology, '$technology'), photos = IF(LENGTH('$allPhotos')=0, photos, ' $updatedPhotos'), project_overview = IF(LENGTH('$project_overview')=0, project_overview,'$project_overview'), project_title = IF(LENGTH('$project_title')=0, project_title, '$project_title'), logo_images = IF(LENGTH('$logo_images')=0, logo_images, '$logo_images'), banner_images = IF(LENGTH('$banner_images')=0, banner_images, '$banner_images') WHERE id = '$post_id'");

    if ($sql){
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
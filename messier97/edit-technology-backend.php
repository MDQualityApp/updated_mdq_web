<?php
include "../connect.php";

if(isset($_POST['edit-post'])){
    $post_id = $_POST['id'];
    $technology = $_POST['technology'];

    $path = '../images/portfolio/';

    if(isset($_FILES['technology_images']) && $_FILES['technology_images']['error'] === UPLOAD_ERR_OK) {
        $allowedExtensions = array("jpg", "jpeg", "webp", "png");

        $technology_images = $_FILES['technology_images']['name'];
        $fileuploadtempname = $_FILES['technology_images']['tmp_name'];
        $extension = pathinfo($technology_images, PATHINFO_EXTENSION);

        if (move_uploaded_file($fileuploadtempname, $path.$technology_images)) {
            if(in_array($extension, $allowedExtensions)) {
                $sql = mysqli_query($conn, "UPDATE technology_name SET technology = '$technology', technology_images = '$technology_images' WHERE id = '$post_id'");

                if($sql){
                    echo "<script type='text/javascript'>
                    alert ('Technology Updated Successfully');
                    window.location.href='table-technology.php';
                    </script>";
                    exit();
                } else {
                    echo "<script type='text/javascript'>
                    alert('Failed to update');
                    window.location.href='table-technology.php';
                    </script>" . mysqli_error($conn);
                    exit();
                }
            } else {
                echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
                window.location.href='table-technology.php'</script>";
                exit();
            }
        } else {
            echo "<script>alert('Failed to move uploaded file');
            window.location.href='table-technology.php'</script>";
            exit();
        }
    } else {
        $sql = mysqli_query($conn, "UPDATE technology_name SET technology = '$technology' WHERE id = '$post_id'");

        if($sql){
            echo "<script type='text/javascript'>
            alert ('Updated Successfully');
            window.location.href='table-technology.php';
            </script>";
            exit();
        } else {
            echo "<script type='text/javascript'>
            alert('Failed to update');
            window.location.href='table-technology.php';
            </script>" . mysqli_error($conn);
            exit();
        }
    }
}
?>

<?php
include "../connect.php";

if(isset($_POST['edit-post'])){
    $post_id = $_POST['id'];
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];

    $path = '../images/carousel/';

    if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowedExtensions = array("jpg", "jpeg", "webp", "png");

        $image = $_FILES['image']['name'];
        $fileuploadtempname = $_FILES['image']['tmp_name'];
        $extension = pathinfo($image, PATHINFO_EXTENSION);

        date_default_timezone_set('Asia/Kolkata');
        $createdAt = date("Y-m-d H:i:s", time());

        if (move_uploaded_file($fileuploadtempname, $path.$image)) {
            if(in_array($extension, $allowedExtensions)) {
                $sql = mysqli_query($conn, "UPDATE carousel SET title1 = '$title1', title2 = '$title2', image = '$image', created_at = '$createdAt' WHERE id = '$post_id'");

                if($sql){
                    echo "<script type='text/javascript'>
                    alert ('Carousel Updated Successfully');
                    window.location.href='table-carousel.php';
                    </script>";
                    exit();
                } else {
                    echo "<script type='text/javascript'>
                    alert('Failed to update');
                    window.location.href='table-carousel.php';
                    </script>" . mysqli_error($conn);
                    exit();
                }
            } else {
                echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
                window.location.href='table-carousel.php'</script>";
                exit();
            }
        } else {
            echo "<script>alert('Failed to move uploaded file');
            window.location.href='table-carousel.php'</script>";
            exit();
        }
    } else {
        $sql = mysqli_query($conn, "UPDATE carousel SET title1 = '$title1', title2 = '$title2' WHERE id = '$post_id'");

        if($sql){
            echo "<script type='text/javascript'>
            alert ('Title Updated Successfully');
            window.location.href='table-carousel.php';
            </script>";
            exit();
        } else {
            echo "<script type='text/javascript'>
            alert('Failed to update');
            window.location.href='table-carousel.php';
            </script>" . mysqli_error($conn);
            exit();
        }
    }
}
?>

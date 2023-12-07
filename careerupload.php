<?php
include "connect.php";

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $image = $_FILES['image']['name'];
    $fileuploadtempname = $_FILES["image"]["tmp_name"];
    $extension = pathinfo($image, PATHINFO_EXTENSION);

    $upload_cover = "";
    $extension_cover = "";


    $img = './resume/';
    $img_cover = './cover_letter/';
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $qualification = $_POST['qualification'];
    $year = $_POST['year'];
    $experience = $_POST['experience'];
    $cur_salary = $_POST['cur_salary'];
    $exp_salary = $_POST['exp_salary'];
    $upload_cover = $_POST['upload_cover'];
    $message = $_POST['message'];

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    if (move_uploaded_file($fileuploadtempname, $img.$image)) {
        if (($extension == "jpg" || $extension == "jpeg" || $extension == "webp" || $extension == "png" || $extension == "pdf"))
         {

            if (!empty($_FILES['upload_cover']['name'])) {
                $upload_cover = $_FILES['upload_cover']['name'];
                $fileuploadtempname_cover = $_FILES["upload_cover"]["tmp_name"];
                $extension_cover = pathinfo($upload_cover, PATHINFO_EXTENSION);

                    move_uploaded_file($fileuploadtempname_cover, $img_cover.$upload_cover);
                    if (empty($upload_cover) || ($extension_cover == "jpg" || $extension_cover == "jpeg" || $extension_cover == "webp" || $extension_cover == "png" || $extension == "pdf")
                    ) {

                    $sql = mysqli_query($conn, "INSERT INTO career (name, image, upload_cover, phone, email, qualification, year, experience, cur_salary, exp_salary, message, created_at) VALUES ('$name', '$image', '$upload_cover', '$phone', '$email', '$qualification', '$year', '$experience', '$cur_salary', '$exp_salary', '$message', '$createdAt')");

                    if ($sql > 0) {
                        echo "<script type='text/javascript'>
                        alert ('Details Added Successfully');
                        window.location.href='career.php';
                        </script>";
                    } else {
                        echo "<script type='text/javascript'>
                        alert('Failed to upload');
                        window.location.href='career.php';
                        </script>";

                    }
                }else {
                    echo "<script>alert('Invalid file format. For the both fields, only jpg, jpeg, png, webp files are allowed.');
                    window.location.href='career.php'</script>";
                }
        } else{
            $sql = mysqli_query($conn, "INSERT INTO career (name, image, phone, email, qualification, year, experience, cur_salary, exp_salary, message, created_at) VALUES ('$name', '$image', '$phone', '$email', '$qualification', '$year', '$experience', '$cur_salary', '$exp_salary', '$message', '$createdAt')");

            if ($sql > 0) {
                echo "<script type='text/javascript'>
                alert ('Details Added Successfully');
                window.location.href='career.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='career.php';
                </script>" . mysqli_error($conn);
            }
        }

    } else {
        echo "<script>alert('Invalid file format. For the both fields, only jpg, jpeg, png, webp files are allowed. For the second image, only jpg, jpeg, png, webp files are allowed.');
        window.location.href='career.php'</script>";
    }
}else {
    echo "<script>alert('Failed to move images');
    window.location.href='career.php'</script>";
}
}
?>
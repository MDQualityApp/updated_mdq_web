<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MDQ</title>
        <style>
            .text-clr{
 color:#000;
}
.inputpy{
   margin-top:5px;
}
.clrbtn {
  display: inline-block;
  font-weight: 400;
  line-height: 1.5;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  background-color: #1FBAED !important;
  color:#fff !important;
  border-radius: 20px;
  padding: .375rem .75rem;
  font-size: 1rem;
  border-radius: .25rem;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}


        </style>
        <body>
        <div id="dashboard" class="container-fluid">
        <div class="row">
            <div class="col-auto px-0">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
 <!-- Bullets -->
 <div class="container-fluid px-5 py-5">
        <div class="row  justify-content-center">
            <div class="col-lg-7 col-md-12 cardshade">
                <div class="shadow px-3 py-3 mt-4 marq" style="border-radius:1rem">
                <form method="post" action="uploadicon.php" enctype="multipart/form-data">
                  <div class="mt-2 py-4">
                                <label for="files">Technology:</label>
                            <div class="px-4 py-2">
                               <label for="files">*Images:</label>
                                <input name='images'  type="file" class="text-clr" id="files" multiple="multiple"   height="100" width="100" />
                            </div>
                            <div class="px-4 py-4">
                            <label for="files">*Technology name:</label>
                                <input  class="inputpy" id="text"  width="60px" name='icon_points' placeholder="" />
                                </div>
                            <div class="mt-2 py-4 d-flex justify-content-center">
                                <button class="clrbtn" type="submit" name="upload">Upload</button>
                            </div>
                            </div>
                            </form>
                </div></div>
                            </body>
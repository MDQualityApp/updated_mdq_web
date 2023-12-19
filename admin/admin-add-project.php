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

/* @media only screen and (min-width: 900px) {
.inputpy{
   margin-left:-48%;
   width:60%
}
.platformpy{
  margin-left:-48%;
   width:40%
}
} */
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
                <form method="post" action="uploadproject.php" enctype="multipart/form-data">
                  <div class="mt-2 py-4">
                                <label for="files">Projects:</label>
                                <div class="mx-4 mt-4">
                            <label>Select Project Name:</label>
                            <select  name='projecttype' >
      <?php
                    $multiplesearch = mysqli_query($conn,"SELECT id, projecttype FROM web_application");
                    while($multiicon = mysqli_fetch_array($multiplesearch))
                    {
                         $project_id=$multiicon['id'];
                         $projecttype = $multiicon['projecttype'];

                         ?>

                <option  value="<?php echo $project_id; ?>" ><?php echo $projecttype; ?></option>
                <?php

                }?>
  </select>

</div>
                            <div class="px-4 py-4">
                            <label for="files">*Project Name:</label>
                                <input  class="inputpy" id="text"  width="60px" name='projectname' placeholder="" required/>
                                </div>
                                <div class="px-4 py-4">
                            <label for="files">*About the project:</label>
                                <input  class="inputpy" id="text"  width="60px" name='aboutproject' placeholder="" required/>
                                </div>
                                <div class="mt-2 px-4 py-4">
                                <label for="files">Project Images</label>
                                <input type="file" class="text-clr" id="files" multiple="multiple" name="image"  height="100" width="100" required/>
                                <output id="result" ></output>
                            </div>
                            <div class="mt-2 py-4 d-flex justify-content-center">
                                <button class="clrbtn" type="submit" name="upload">Upload</button>
                            </div>
                            </div>
                            </form>
                </div></div>
                            </body>
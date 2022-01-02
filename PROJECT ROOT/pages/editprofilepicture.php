<div class="container">
    <h1 class="mb-4 pb-2">Update Profile Photo</h1>
    <?php 
        if(isset($_FILES['photo']) ){
            $allowed_mime = array('image/gif', 'image/jpeg', 'image/png');
            if(!in_array($_FILES['photo']['type'], $allowed_mime)) {
                echo '<div class="alert alert-danger" role="alert">Only GIF, JPEG and PNG files are allowed.</div>';
            }else{
                $random = substr(str_shuffle(MD5(microtime())), 0, 10);
                $new_filename = $random . $_FILES['photo']['name'];
            }
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], __DIR__.'/../user-images/'.$new_filename)) {
                $User = new User($Conn);
                $User->updateUserProfile($new_filename);
                echo '<div class="alert alert-success" role="alert">Profile photo updated.</div>';
            }else{
                echo '<div class="alert alert-danger" role="alert">Only GIF, JPEG and PNG files are allowed.</div>';
            }
        }
    ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8" style="text-align:center;">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form"  style="padding-bottom:5%; padding-left:20%">
                    <label for="photo">Photo</label>
                    <input type="file" class="form-control-file" name="photo">
                </div>
                <button type="submit" class="btn btn-tailsandtrails">Update Profile Picture</button>  
            </form> 
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
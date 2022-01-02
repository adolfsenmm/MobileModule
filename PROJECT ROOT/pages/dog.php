<?php
$dog_id = $_GET['id'];
$Dog=new Dog($Conn);
$dogs = $Dog->getAllDogs($dog_id);
?>

<div class="container">  
        <div class="row">
            <div class="col-md-6">
                <div class="dog-card">
                    <div class="ind-card-image responsive" style="background-image: url('./dog-images/<?php echo $dogs[0]['dog_images']; ?>');">
                    </div>
                </div> 
            </div>
        <div class="col-md-6">
        <h1><?php echo $dogs[0]['dog_breed']; ?></h1>
            <?php echo $dogs[0]['dog_description']; ?>
                <ul class="dog-features">
                    <li><i class="fas fa-globe-africa"></i> Origins: <?php echo $dogs[0]['dog_origins']; ?></li>
                    <li><i class="fas fa-dog"></i> Average Size: <?php echo $dogs[0]['dog_size']; ?></li>
                    <li><i class="far fa-heart"></i> Average Lifespan: <?php echo $dogs[0]['dog_lifespan']; ?></li>
                    <li><i class="fas fa-walking"></i> Daily Amount of Exercise: <?php echo $dogs[0]['dog_exercise']; ?></li>
                    <li><i class="fas fa-cut"></i> Grooming: <?php echo $dogs[0]['dog_grooming']; ?></li>
                </ul>
                <?php 
                $Favourite = new Favourite($Conn);
                $is_fav = $Favourite->isFavourite($_GET['id']);
                
                if($is_fav) {
                ?>
                    <button id="removeFav" type="button" class="btn btn-tailsandtrails mb-3" data-dogid="<?php echo $_GET['id']; ?>">Remove from favourites</button>
                <?php
                }else{
                ?>
                    <button id="addFav" type="button" class="btn btn-tailsandtrails mb-3" data-dogid="<?php echo $_GET['id']; ?>">Add to favourites</button>
                <?php
                }
                ?>
        </div>
           <!-- this could be an area where you allow users to upload their own pictures of the breed
            <div class="row">
                <form action="index.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="image"><input type="submit" name="submit" value="upload">
                </form
            </div> -->
    </div>
</div>
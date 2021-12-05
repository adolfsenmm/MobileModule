<?php
$Breed = new Breed($Conn);
$breeds = $Breed->getAllBreeds();
?>
<div class="container-fluid">
    <h1 class="mb-4 pb-2">Dog Breeds</h1>

    <div class="row">
        <?php foreach($breeds as $breed) { ?>
            <div class="col-md-3">
                <div class="dog-card">
                    <div class="dog-card-image" style="background-image: url('./dog-images/<?php echo $breed['dog_image']; ?>');">
                        <a href="index.php?p=dog&id=<?php echo $breed['dog_id']; ?>"></a>
                    </div>
                    <a href="index.php?p=dog&id=<?php echo $breed['dog_id']; ?>"><h3><?php echo $breed['dog_name']; ?></h3></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
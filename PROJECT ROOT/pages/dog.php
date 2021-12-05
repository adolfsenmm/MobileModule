<?php
$dog_id = $_GET['id'];
$Dog=new Dog($Conn);
$dogs = $Dog->getAllDogs($dog_id);
?>
<div class="container-fluid">
    <h1 class="mb-4 pb-2">Lunch Recipes</h1>
        <p>Browse our wide range of lunch recipes below!</p>
    <div class="row">
        <?php foreach($dogs as $dog) { ?>
            <div class="col-md-3">
                <div class="dog-card">
                    <div class="dog-card-image" style="background-image: url('./dog-images/<?php echo $dog['dog_image']; ?>');">
                        <a href="index.php?p=dog&id=<?php echo $dog['dog_id']; ?>"></a>
                    </div>
                    <a href="index.php?p=dog&id=<?php echo $dog['dog_id']; ?>"><h3><?php echo $dog['dog_name']; ?></h3></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

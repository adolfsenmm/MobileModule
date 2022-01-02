<?PHP
$Dog = new Dog($Conn);
$dogs = $Dog->searchDogs($_POST['query']);
?>
<h1 class="mb-4 pb-2">Search results for "<?php echo $_POST['query']; ?>"</h1>
<div class="container">
    <div class="row">
        <?php foreach($dogs as $Dog) { ?>
            <div class="col-md-3">
                <div class="dog-card">
                    <div class="dog-card-image" style="background-image: url('./dog-images/<?php echo $Dog['dog_image']; ?>');">
                        <a href="index.php?p=dog&id=<?php echo $Dog['dog_id']; ?>"></a>
                    </div>
                    <a href="index.php?p=dog&id=<?php echo $Dog['dog_id']; ?>"><h3><?php echo $Dog['dog_breed']; ?></h3></a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
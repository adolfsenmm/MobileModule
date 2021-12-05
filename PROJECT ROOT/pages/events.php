<!-- maybe make this page like the categories page for the months of the year for the events, then the recipes page is what events are in that month, then the recipe page is the individual event. -->
<?php
$Category = new Breed($Conn);
$categories = $Category->getAllBreeds();
?>
<div class="container-fluid">
                <h1 class="mb-4 pb-2">Events for 2022</h1>

                <div class="row">
                    <?php foreach($categories as $category) { ?>
                        <div class="col-md-3">
                            <div class="dog-card">
                                <div class="dog-card-image" style="background-image: url('./category-images/<?php echo $category['category_image']; ?>');">
                                <a href="index.php?p=recipes&id=<?php echo $category['event_id']; ?>"></a>
                                </div>
                                <a href="index.php?p=recipes&id=<?php echo $category['event_id']; ?>"><h3><?php echo $category['category_name']; ?></h3></a>
                            </div>
                        </div>
                    <?php } ?>
            </div>
</div>
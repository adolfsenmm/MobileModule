<div class="container">
    <h1 class="mb-4 pb-2">My Account</h1>
    <h2 class="text-muted" style="text-align:center">Welcome to your account page!</h2>
    <div class="row">
        <div class="col-lg-6">
            <h2 class="text-muted" style="text-align:center">My Favourites</h2>
            <div class="accordion" id="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Breed Favourites 
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div>
                            <ul>
                                <?php
                                    $Favourite = new Favourite($Conn);
                                    $user_favs = $Favourite->getAllFavouritesForUser();
                                    if($user_favs) {
                                        foreach($user_favs as $fav) {
                                            echo '<li><a class="accordion-body" href="index.php?p=breeds&id='.$fav['breed_id'].'">'.$fav['dog_breed'].'</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <?php
                    if($_SESSION['user_data']['user_image']) {
                        echo '<img class="mb-3" style="max-width: 40%;margin-left: auto;margin-right: auto;" src="./user-images/'.$_SESSION['user_data']['user_image'].'" />';
                    }
                ?>
            </div>
            <div class="row">
                <a class="btn btn-tailsandtrails" href="index.php?p=editprofilepicture">Edit Profile Picture</a>
            </div>      
        </div>
    </div>
</div>


<?php
session_start();
require_once(__DIR__.'/../includes/autoloader.php');
require_once(__DIR__.'/../includes/database.php');
if($_SESSION['user_data']){
    $breed_id = (int) $_POST['breed_id'];
        if($breed_id){
            $Favourite = new Favourite($Conn);
            $toggle = $Favourite->toggleFavourite($_POST['breed_id']);
            if($toggle) {
                echo json_encode(array(
                    "success" => true,
                    "reason" => "Dog breed was added to users favourites."
                ));
            }else{
                echo json_encode(array(
                    "success" => true,
                    "reason" => "Dog breed was removed from users favourites."
                ));
            }
        }else{
            echo json_encode(array(
                "success" => false,
                "reason" => "Dog ID not provided."
            ));
        }
}else{
    echo json_encode(array(
        "success" => false,
        "reason" => "User not logged in."
    ));
};
if($_SESSION['user_data']){
    $events_id = (int) $_POST['events_id'];
        if($events_id){
            $Favorite = new Favorite($Conn);
            $toggle = $Favorite->toggleFavorite($_POST['events_id']);
            if($toggle) {
                echo json_encode(array(
                    "success" => true,
                    "reason" => "This event was added to users favourites."
                ));
            }else{
                echo json_encode(array(
                    "success" => true,
                    "reason" => "This event was removed from users favourites."
                ));
            }
        }else{
            echo json_encode(array(
                "success" => false,
                "reason" => "Event ID not provided."
            ));
        }
}else{
    echo json_encode(array(
        "success" => false,
        "reason" => "User not logged in."
    ));
}
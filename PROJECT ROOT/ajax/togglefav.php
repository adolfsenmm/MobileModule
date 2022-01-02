<?php
session_start();
require_once(__DIR__.'/../includes/autoloader.php');
require_once(__DIR__.'/../includes/database.php');
if($_SESSION['user_data']){
    $dog_id = (int) $_POST['dog_id'];
        if($dog_id){
            $Favourite = new Favourite($Conn);
            $toggle = $Favourite->toggleFavourite($_POST['dog_id']);
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
}
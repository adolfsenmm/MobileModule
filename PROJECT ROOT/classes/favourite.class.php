<?php
    class Favourite {
        protected $Conn;
        public function __construct($Conn){
            $this->Conn = $Conn;
        }
        
        public function isFavourite($dog_id){
            $query = "SELECT * FROM user_favourites WHERE user_id = :user_id AND dog_id = :dog_id";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute([
                "user_id" => $_SESSION['user_data']['user_id'],
                "dog_id" => $dog_id
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function toggleFavourite($dog_id){
            // Check if the dog is already a favourite
            $is_favourite = $this->isFavourite($dog_id);

            if($is_favourite) {
                // Is already favourite - so remove.
                $query = "DELETE FROM user_favourites WHERE user_fav_id = :user_fav_id";
                $stmt = $this->Conn->prepare($query);
                $stmt->execute([
                    "user_fav_id" => $is_favourite['user_fav_id']
                ]);
                return false; // Return false for "removed"
            }else{
                // Is not a favourite - so add
                $query = "INSERT INTO user_favourites (user_id, dog_id) VALUES (:user_id, :dog_id)";
                $stmt = $this->Conn->prepare($query);
                
                return $stmt->execute(array(
                    "user_id" => $_SESSION['user_data']['user_id'],
                    "dog_id" => $dog_id
                ));
                return true; // Return false for "added"
            }
        }

        public function getAllFavouritesForUser(){
            $query = "SELECT * FROM user_favourites LEFT JOIN dog_page ON user_favourites.dog_id = dog_page.dog_id WHERE user_favourites.user_id = :user_id";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute([
                "user_id" => $_SESSION['user_data']['user_id']
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

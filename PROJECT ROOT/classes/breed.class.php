<?php
    class Breed{
        protected $Conn;
        public function __construct($Conn){
            $this->Conn = $Conn;
        }
        public function getAllBreeds(){
            $query = "SELECT * FROM dog_breeds";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    

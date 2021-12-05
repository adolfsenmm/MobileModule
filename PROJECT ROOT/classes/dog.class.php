<?php
    class Dog{
        protected $Conn;

        public function __construct($Conn){
            $this->Conn = $Conn;
        }
        public function getAllDogs($dog_id){
            $query = "SELECT * FROM dog_page WHERE dog_id = :dog_id";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute([
                "dog_id" => $dog_id
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
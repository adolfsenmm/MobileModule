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
        public function searchDogs($query_string) {
            $query = "SELECT * FROM dog_page WHERE dog_breed LIKE :query_string";
            $stmt = $this->Conn->prepare($query);
            $stmt -> execute([
                "query_string" => "%".$query_string."%"
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
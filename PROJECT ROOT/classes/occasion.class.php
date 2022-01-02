<?php
    class Occasion{
        protected $Conn;

        public function __construct($Conn){
            $this->Conn = $Conn;
        }
        public function getAllOccasions($events_id){
            $query = "SELECT * FROM dog_occasion WHERE events_id = :events_id";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute([
                "events_id" => $events_id
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function searchEvents($query_string) {
            $query = "SELECT * FROM dog_occasion WHERE occasion_name LIKE :query_string";
            $stmt = $this->Conn->prepare($query);
            $stmt -> execute([
                "query_string" => "%".$query_string."%"
            ]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
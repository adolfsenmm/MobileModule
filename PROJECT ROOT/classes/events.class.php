<?php
    class Events{
        protected $Conn;
        public function __construct($Conn){
            $this->Conn = $Conn;
        }
        public function getAllEvents(){
            $query = "SELECT * FROM events";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getLatestEvents(){
            $query = "SELECT * FROM events ORDER BY events_id DESC LIMIT 3";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
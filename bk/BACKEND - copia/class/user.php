<?php
    class User {
        private $conn;
        private $db_table = "contact";
        public $contactid;
        public $name;
       
        public $status;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function getUsers() {
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }

        public function createUser() {
            $sqlQuery = "INSERT INTO " . $this->db_table . "
             SET
                name = :name,
               
                status = :status";
      
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(":name", $this->name);
            
            $stmt->bindParam(":status", $this->status);
      
            if($stmt->execute()){
               
               return true;
      
            
            } return false;
        }

        public function updateUser() {
            $sqlQuery = "UPDATE " . $this->db_table . "
             SET
                name = :name,
               
                status = :status
            WHERE
                contactid = :contactid";
      
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(":name", $this->name);
           
            $stmt->bindParam(":status", $this->status);
            $stmt->bindParam(":contactid", $this->contactid);
      
            if($stmt->execute()){
               return true;
            } 
            return false;
        }

        public function deleteUser() {
            $sqlQuery = "DELETE FROM " . $this->db_table . "
            WHERE
                contactid = :contactid";
      
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(":contactid", $this->contactid);
      
            if($stmt->execute()){
               return true;
            
            } return false;
        }

        public function getSingleUser() {
            $sqlQuery = "SELECT * FROM " . $this->db_table . "
                        WHERE contactid = :contactid LIMIT 1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(":contactid", $this->contactid);
            $stmt->execute();

            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->name = $dataRow['name'];
           
            $this->contactid = $dataRow['contactid'];
        }

    }

?>
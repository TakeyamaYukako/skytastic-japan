<?php

require_once "database.php";

class Acc extends Database{
    public function getAcc(){
        $sql = "SELECT * FROM accs";

        if($result = $this->conn->query($sql)){
            return $result;
        }else {
            die("Error retrieving accs: " . $this->conn->error);
        }

    }

}
?>
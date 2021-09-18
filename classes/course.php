<?php
require "database.php";
class Course extends Database{
    public function getCourses(){
        $sql = "SELECT * FROM courses";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else {
            die("Error retrieving course: " . $this->conn->error);
        }
    }
}

?>

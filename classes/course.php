<?php
require_once "database.php";
class Course extends Database{
    public function getCourses(){
        $sql = "SELECT * FROM courses";

        if($result = $this->conn->query($sql)){
            return $result;
        }else {
            die("Error retrieving courses: " . $this->conn->error);
        }
    }
}

?>

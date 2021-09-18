<?php
class Booking extends Database{
    public function index(){
        $sql = "SELECT * FROM bookings";
        $result = $this->conn->query($sql);
        return $result;
        // $result->fetch_assoc();
    }
}

?>
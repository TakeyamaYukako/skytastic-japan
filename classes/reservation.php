<?php

require_once "database.php";


class Reservation extends Database{
    private $total_sdpay;
    private $sdpay;
    private $accpay;
    private $totalpay;


 
 

    public function makeReservation($id,$date_reserved, $course_id, $number_of_people, $acc_id){
        $sql = "INSERT INTO `reservations`(`id`,`date_reserved`,`course_id`,`number_of_people`,
        `acc_id`) VALUES('$id','$date_reserved', '$course_id', '$number_of_people', '$acc_id')";

        if($this->conn->query($sql)){
            $reservation_id = $this->conn->insert_id;
            header("location:../views/payment.php?reservation_id=$reservation_id");
            exit;
        }else {
            die("Error making reservation: " . $this->conn->error);
        }
    }

    public function getReservation($reservation_id){
        $sql = "SELECT reservations.date_reserved  AS `date_reserved`, reservations.number_of_people AS `number_of_people`,reservations.acc_id AS `acc_id`, courses.course_name AS `course_name`,accs.acc_use AS `acc_use`
        FROM reservations 
        INNER JOIN courses
        ON reservations.course_id = courses.course_id
        INNER JOIN accs
        ON reservations.acc_id = accs.acc_id
        WHERE reservation_id = $reservation_id";
        ;

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else {
            die("Error retrieving reservation: " . $this->conn->error);
        }
    }

 

    public function updateReservation($course_id,$number_of_people,$acc_id,$reservation_id){
        $sql = "UPDATE reservations SET `course_id` = '$course_id',`number_of_people` = '$number_of_people',`acc_id` = '$acc_id' WHERE `reservation_id`='$reservation_id'";

        if($this->conn->query($sql)){
            header("location: ../views/payment.php?reservation_id=$reservation_id");
            exit;
        }else{
            die("Error updating reservation: " .$this->conn->error);
        }
    }

    public function skyDivingPay($course_name,$number_of_people){
        if($course_name=="Standard"){
            $this->sdpay=250;
            $this->total_sdpay= 250*$number_of_people;
        }elseif($course_name=="Hand Camera"){
            $this->sdpay=350;
            $this->total_sdpay= 350*$number_of_people;
        }else{
            $this->sdpay=450;
            $this->total_sdpay= 450*$number_of_people;
        }
    }

    public function getSdpay(){
        return $this->sdpay;
    }

    public function getTotalsdpay(){
        return $this->total_sdpay;
    }

    public function setAcc($acc_id){
        if($acc_id==1){
            $this->accpay=150;
        }else{
            $this->accpay=0;
        }
    }

    public function totalPay(){
        $this->totalpay=$this->accpay+$this->total_sdpay;
    }

    public function getAccpay(){
        return $this->accpay;
    }

    public function getTotalpay(){
        return $this->totalpay;
    }

    public function price($r_price,$reservation_id){
        $sql = "UPDATE `reservations` SET `r_price`= '$r_price'  WHERE reservation_id = '$reservation_id'";

        if($this->conn->query($sql)){
            header("location:../views/dashboard.php");
            exit;
        }else {
            die("Error making reservation: " . $this->conn->error);
        }
    }




  
}
?>

<?php

require_once "database.php";

class User extends Database{
    public function createUser($first_name, $last_name,$contact_number, $email,$username, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `contact_number`,`email`,`username`,`password`) VALUES ('$first_name','$last_name', $contact_number,'$email','$username', '$password')";

        if($this->conn->query($sql)){
            header("location: ../views/index.php");
            exit;
        }else{
            die("Error creating user:" . $this->conn->error);
        }
    }

    public function login($username,$password){
        $sql ="SELECT `id`,`username`,`password`FROM users WHERE  username = '$username'";
        if($result = $this->conn->query($sql)){
            if($result->num_rows==1){
                $user_row = $result->fetch_assoc();
                if(password_verify($password,$user_row['password'])){
                    
                    session_start();
                    $_SESSION['id'] = $user_row['id'];
                    $_SESSION['username']= $user_row['username'];
                    header("location: ../views/dashboard.php");
                    exit;
                }else{
                    die("Password is incorrect.");
                }
            }else{
                die("Username not found.");
            }
        }else{
            die("Error:". $this->conn->error);
        }
    }
}
?>
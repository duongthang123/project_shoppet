<?php

require_once("app/Model/Model.php");

class User extends Model
{
    protected $table = "users"; 

    public function getUserByEmailPassword($email, $password) 
    {
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $result = $this->dbConnection->query($sql);


        $rs = mysqli_num_rows($result);

        $user = $result->fetch_assoc();

        if($rs == 1) {
            return $user;
        } else{
            return null;
        }
    }
}
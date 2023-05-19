<?php

require_once("app/Model/Model.php");

class Order extends Model
{
    protected $table = 'oders';
    public function createOrder($data){
        $userId = $_SESSION['user']['id'];
        $fullname = $data['fullname'];
        $phoneNumber = $data['phoneNumber'];
        $city = $data['city'];
        $address = $data['address'];
        $email = $data['email'];
        $note = $data['note'];
        $pay = $data['pay'];
        $total = $data['total'];
        
        $sql = "INSERT INTO oders (user_id ,fullname, phoneNumber, city, address, email, note, pay, oder_date, total_money) 
                VALUES ($userId, '$fullname', '$phoneNumber', '$city', '$address','$email' , '$note' , '$pay', NOW() ,$total)";
        
        return $this->dbConnection->query($sql);
    }

    public function getOrderId()
    {
        $query = "SELECT id FROM oders ORDER BY id DESC LIMIT 1";
        $result = $this->dbConnection->query($query);

        return $result->fetch_assoc();
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM oders ";
        // $sql = "SELECT oders.id as id, fullname, email, phoneNumber, city, address, pay, oders.total_money ,
        // oder_details.id as oder_details_id, product.name
        // FROM oders inner join oder_details on oders.id = oder_details.oder_id INNER join product on oder_details.product_id = product.id
        // WHERE oder_id = 25";

        $result = $this->dbConnection->query($sql);
        // print_r($result->fetch_all(MYSQLI_ASSOC));die();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // public function getAllOrders()
    // {
    //     // $sql = "SELECT * FROM oders ";
    //     $sql = "SELECT oders.id as id, fullname, email, phoneNumber, city, address, pay, oders.total_money ,
    //     oder_details.id as oder_details_id, product.name
    //     FROM oders inner join oder_details on oders.id = oder_details.oder_id INNER join product on oder_details.product_id = product.id";

    //     $result = $this->dbConnection->query($sql);
    //     // print_r($result->fetch_all(MYSQLI_ASSOC));die();
    //     return $result->fetch_all(MYSQLI_ASSOC);
    // }
    
}
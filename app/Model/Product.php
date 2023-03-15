<?php

require_once ("app/Model/Model.php");

class Product extends Model
{
    protected $table = 'product';

    public function all() 
    {
        $sql =  "SELECT * FROM product";

        $result = $this->dbConnection->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function create($data)
    {
        $category_id = $data['category_id'];
        $name = $data['name'];
        $description = $data['description'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        
        //upload img
        $target_dir = "public/assets/admin/img/";
        $file_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $target_dir.$file_name);
        //end upload

        $sql = "INSERT INTO product(category_id, name, description, price, quantity, img, created_at) VALUES ($category_id, '$name', '$description', $price, $quantity, '$file_name', NOW());";
        return $this->dbConnection->query($sql);
        

    }

    public function edit($id) 
    {
        $sql = "SELECT * FROM product  WHERE id = $id";

        $result = $this->dbConnection->query($sql);

        return $result->fetch_assoc();
    }

    public function see($id) 
    {
        $sql = "SELECT * FROM product  WHERE id = $id";

        $result = $this->dbConnection->query($sql);
        
        return $result->fetch_assoc();
    }

    public function update($data, $id)
    {
        $category_id = $data['category_id'];
        $name = $data['name'];
        $description = $data['description'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        // $img = $data['img'];

        //upload img
        $target_dir = "public/assets/admin/img/";
        $file_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'], $target_dir.$file_name);
        //end upload
        $sql = "UPDATE product SET category_id = $category_id, name = '$name', description = '$description', price = $price, quantity = $quantity, img = '$file_name', updated_at = NOW() WHERE id = $id";
    
        $result = $this->dbConnection->query($sql);

        return $result;
    }

    public function delete($id) 
    {
        $sql = "DELETE FROM product WHERE id = $id";

        $result = $this->dbConnection->query($sql);

        return $result;
    }
}
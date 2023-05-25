<?php

class OrderDetail extends Model
{
    protected $table = 'oder_details';

    public function createOrderDetails($orderId)
    {
        $order_id = $orderId['id'];
        foreach($_SESSION['cart'] as $itemCart) {
            $product_id = $itemCart['product_id'];
            $product_price = $itemCart['price'];
            $product_quantity = $itemCart['quantity'];
            
            $sql = "INSERT INTO oder_details (oder_id, product_id, quantity, total_money) VALUES ($order_id, $product_id, $product_quantity, $product_price*$product_quantity)";

            $this->dbConnection->query($sql);
        }
    }

    public function getOrderDetailsList($orderId) {
        $sql = "SELECT product.name, product.price, oder_details.quantity, oder_details.oder_id FROM oder_details INNER join product
                on oder_details.product_id = product.id WHERE oder_id = $orderId";
        
        $result = $this->dbConnection->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
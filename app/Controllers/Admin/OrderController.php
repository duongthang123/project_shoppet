<?php

use function PHPSTORM_META\map;

require_once("app/Model/Order.php");
require_once("app/Model/OrderDetail.php");

class OrderController 
{
    private $order;
    private $orderDetail;

    public function __construct()
    {
        $this->order = new Order();
        $this->orderDetail = new OrderDetail();
    }

    public function index()
    {
        
        $orderList = $this->order->getAllOrders();

        $arrayId = [];

        foreach($orderList as $orderIteam)
        {
            $orderId =  $orderIteam['id'];
            array_push($arrayId, $orderId);
        }

        $array = [];
        foreach ($orderList as &$orderItem) {
            $arrayList = [];
            foreach ($arrayId as $itemId) {
                $list = $this->orderDetail->getOrderDetailsList($itemId);
                foreach ($list as $item) {
                    if ($orderItem['id'] == $item['oder_id']) {
                        $arrayList[] = $item;
                    }
                }
            }
            $orderItem['product'] = $arrayList;
            $array[] = $orderItem;
        }

        require "views/admin/donHangMoi/index.php";
    }
}
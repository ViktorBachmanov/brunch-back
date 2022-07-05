<?php

namespace app\models;

use yii\db\ActiveRecord;

use app\models\Product;


class Order extends ActiveRecord
{

  public function getSendOrders()
  {
    $orders = $this->find()->all();

    foreach($orders as $order) {
      $sendOrders[] = new SendOrder($order);
    }

    return $sendOrders;
  }
    
}

///////////////////////

class SendOrder
{
  public int $id;
  public int $userId;
  public array $products;

  public function __construct(Order $order)
  {
    $this->id = $order->id;
    $this->sum = $order->sum;
    $this->userId = $order->user_id;

    foreach($order->shop_cart as $key => $qty) {
      $product = Product::findOne($key);
      if($product === null) {
        continue;
      }
      $this->products[] = new ProductQty($product->name, $qty);
    }
  }
}

class ProductQty
{
  public string $name;
  public int $quantity;

  public function __construct(string $name, int $qty)
  {
    $this->name = $name;
    $this->quantity = $qty;
  }
}



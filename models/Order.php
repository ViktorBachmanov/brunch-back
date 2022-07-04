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
    $this->userId = $order->user_id;

    foreach($order->shop_cart as $key => $qty) {
      $product = Product::findOne($key);
      if($product === null) {
        continue;
      }
      $this->products[] = new ProductQtySum($product, $qty);
    }
  }
}

class ProductQtySum
{
  public $name;
  public $quantity;
  public $sum;
  
  public function __construct(Product $product, int $qty)
  {
    $this->name = $product->name;
    $this->quantity = $qty;
    $this->sum = $product->price * $qty;
  }
}



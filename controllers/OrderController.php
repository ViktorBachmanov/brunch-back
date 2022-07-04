<?php

namespace app\controllers;

use Yii;
//use yii\web\Response;

use yii\rest\ActiveController;

use app\models\Order;


class OrderController extends ActiveController
{
    public $modelClass = 'app\models\Order';

    use CorsTrait;

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex()
    {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;

        $sendOrders = (new Order())->getSendOrders();

        //$response->data = ['sendOrders' => $sendOrders];
        $response->data = $sendOrders;
    }

    
}
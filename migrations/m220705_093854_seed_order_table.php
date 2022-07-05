<?php

use yii\db\Migration;

/**
 * Class m220705_093854_seed_order_table
 */
class m220705_093854_seed_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert("order", ['sum' => 450, 'user_id' => 1, 'shop_cart' => ['1' => 1, '2' => 1] ]);
        $this->insert("order", ['sum' => 735, 'user_id' => 2, 'shop_cart' => ['2' => 2, '3' => 1] ]);
        $this->insert("order", ['sum' => 1295, 'user_id' => 3, 'shop_cart' => ['1' => 2, '4' => 3] ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete("order", "id=3");
        $this->delete("order", "id=4");
        $this->delete("order", "id=5");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220705_093854_seed_order_table cannot be reverted.\n";

        return false;
    }
    */
}

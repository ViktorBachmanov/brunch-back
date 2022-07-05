<?php

use yii\db\Migration;

/**
 * Class m220705_091157_seed_product_table
 */
class m220705_091157_seed_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert("product", ['name' => 'Прайм Эсколар', 'price' => 255]);
        $this->insert("product", ['name' => 'Вакаме с тунцом', 'price' => 285]);
        $this->insert("product", ['name' => 'Запечёный Чеддер', 'price' => 235]);
        $this->insert("product", ['name' => 'Бекон фри', 'price' => 265]);
        $this->insert("product", ['name' => 'Лава с лососем', 'price' => 315]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220705_091157_seed_product_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220705_091157_seed_product_table cannot be reverted.\n";

        return false;
    }
    */
}

<?php

//use Yii;
use yii\db\Migration;

/**
 * Class m220705_083613_seed_user_table
 */
class m220705_083613_seed_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert("user", ['email' => 'ivan@mail.ru', 'name' => 'Иван', 'tel' => '9164568789', 'password' => hashPassword('Ivan123')]);
        $this->insert("user", ['email' => 'peter@mail.ru', 'name' => 'Пётр', 'tel' => '9031234578', 'password' => hashPassword('Peter123')]);
        $this->insert("user", ['email' => 'alex@mail.ru', 'name' => 'Алексей', 'tel' => '9256847515', 'password' => hashPassword('Alex123')]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220705_083613_seed_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220705_083613_seed_user_table cannot be reverted.\n";

        return false;
    }
    */
}



///////////// helper functions ////////////

function hashPassword(string $password)
{
    return Yii::$app->getSecurity()->generatePasswordHash($password);
}
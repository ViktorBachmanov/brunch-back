<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%users}}`.
 */
class m220703_150854_drop_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%users}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(64),
            'name' => $this->string(64),
            'tel' => $this->string(64),
            'password' => $this->string(),
        ]);
    }
}

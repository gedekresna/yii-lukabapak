<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_balance}}`.
 */
class m200419_210541_create_user_balance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_balance}}', [
            'user_id' => $this->integer(),
            'balance' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-user-user_id-2',
            'user_balance',
            'user_id',
            'user',
            'id',
            'CASCADE',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-user-user_id-2',
            'user',
        );
        
        $this->dropTable('{{%user_balance}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%transaction}}`.
 */
class m200419_210550_create_transaction_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaction}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'ticket_id' => $this->integer(),
            'amount' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-user-user_id-3',
            'transaction',
            'user_id',
            'user',
            'id',
            'CASCADE',
        );

        $this->addForeignKey(
            'fk-ticket-ticket_id-2',
            'transaction',
            'ticket_id',
            'ticket',
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
            'fk-user-user_id-3',
            'user',
        );

        $this->dropForeignKey(
            'fk-ticket-ticket_id-2',
            'ticket',
        );

        $this->dropTable('{{%transaction}}');
    }
}

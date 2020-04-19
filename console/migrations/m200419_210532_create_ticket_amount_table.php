<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ticket_amount}}`.
 */
class m200419_210532_create_ticket_amount_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ticket_amount}}', [
            'ticket_id' => $this->integer(),
            'amount' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-ticket-ticket_id',
            'ticket_amount',
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
            'fk-ticket-ticket_id',
            'ticket',
        );

        $this->dropTable('{{%ticket_amount}}');
    }
}

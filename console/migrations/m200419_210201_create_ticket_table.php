<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ticket}}`.
 */
class m200419_210201_create_ticket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ticket}}', [
            'id' => $this->primaryKey(),
            'event_name' => $this->string(),
            'date' => $this->date(),
            'location' => $this->string(),
            'description' => $this->text(),
            'price' => $this->integer(),
            'image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ticket}}');
    }
}

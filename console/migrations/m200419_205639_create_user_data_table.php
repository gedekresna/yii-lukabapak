<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_data}}`.
 */
class m200419_205639_create_user_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_data}}', [
            'user_id' => $this->integer(),
            'full_name' => $this->string(),
            'is_admin' => $this->integer()->defaultValue(0),
        ]);
        
        $this->addForeignKey(
            'fk-user-user_id',
            'user_data',
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
            'fk-user-user_id',
            'user',
        );

        $this->dropTable('{{%user_data}}');
    }
}

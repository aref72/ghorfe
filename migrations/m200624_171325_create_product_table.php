<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m200624_171325_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50),
            'description' => $this->text(5000),
            'price' => $this->integer(),
            'offer_price' => $this->integer(),
            'count_view' => $this->integer(),
            'is_active' => $this->boolean(),
            'user_id' => $this->integer(),
            'created_at' => $this->string(),
            'updated_at' => $this->string(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}

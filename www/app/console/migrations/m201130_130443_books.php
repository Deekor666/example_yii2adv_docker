<?php

use yii\db\Migration;

/**
 * Class m201130_130443_books
 */
class m201130_130443_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'date_write' => $this->dateTime()->notNull(),
            'rating' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('books');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201130_130443_books cannot be reverted.\n";

        return false;
    }
    */
}

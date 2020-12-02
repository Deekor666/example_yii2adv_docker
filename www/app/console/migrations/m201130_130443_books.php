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
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'author_id' => $this->integer()->notNull(),
            'date_write' => $this->dateTime()->notNull(),
            'rating' => $this->integer()
        ], $tableOptions);
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

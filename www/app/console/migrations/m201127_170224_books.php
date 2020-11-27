<?php

use yii\db\Migration;

/**
 * Class m201127_170224_books
 */
class m201127_170224_books extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201127_170224_books cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        $this->dropTable('books');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m201130_132426_addAuthorIdForeignKey
 */
class m201130_132426_addAuthorIdForeignKey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // creates index for column `author_id`
        $this->createIndex(
            'idx-books-author_id',
            'books',
            'author_id'
        );

        // add foreign key for table `authors`
        $this->addForeignKey(
            'fk-books-author_id',
            'books',
            'author_id',
            'authors',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `authors`
        $this->dropForeignKey(
            'fk-books-author_id',
            'books'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-books-author_id',
            'books'
        );

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201130_132426_addAuthorIdForeignKey cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m201127_170242_authors
 */
class m201127_170242_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201127_170242_authors cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        $this->dropTable('authors');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m201130_130454_authors
 */
class m201130_130454_authors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'name' => $this->text()->notNull(),
            'date_birthday' => $this->dateTime()->notNull(),
            'rating' => $this->integer()
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201130_130454_authors cannot be reverted.\n";

        return false;
    }
    */
}

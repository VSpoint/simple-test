<?php

use yii\db\Schema;
use yii\db\Migration;

class m150302_064732_create_categories_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%categories}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(200) NOT NULL',
            'description' => Schema::TYPE_TEXT . '(1000) NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'image' => Schema::TYPE_STRING . '(51) NOT NULL',
            'category_id' => Schema::TYPE_INTEGER . '(11)',
        ], $tableOptions);
        //$this->createIndex('idx_categories_category_id', '{{%categories}}', 'category_id');
		$this->addForeignKey('fk_categories_category_id', '{{%categories}}', 'category_id', '{{%categories}}', 'id');
    }

    public function down()
    {
        $this->dropTable('{{%categories}}');
    }
}

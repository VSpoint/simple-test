<?php

use yii\db\Schema;
use yii\db\Migration;

class m150302_072711_create_organization_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
 
        $this->createTable('{{%organization}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . '(200) NOT NULL',
            'description' => Schema::TYPE_TEXT . '(1000) NOT NULL',
            'image' => Schema::TYPE_STRING . '(51) NOT NULL',
            'category_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
        ], $tableOptions);
		$this->addForeignKey('fk_organization_category_id', '{{%organization}}', 'category_id', '{{%categories}}', 'id');

    }

    public function down()
    {
        $this->dropTable('{{%organization}}');
    }
}

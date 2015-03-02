<?php

use yii\db\Schema;
use yii\db\Migration;

class m150302_073212_seed_categories_organization_tables extends Migration
{
    public function up()
    {
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
		//$this->dropForeignKey('fk_categories_category_id', '{{%categories}}');
		
		$this->insert('{{%categories}}',array('id'=>1, 'name'=>'hotels', 'description'=>'', 'image'=>'1.jpg'));
		$this->insert('{{%categories}}',array('id'=>2, 'name'=>'restaurants', 'description'=>'', 'image'=>'2.jpg'));
		$this->insert('{{%categories}}',array('id'=>3, 'name'=>'cafe', 'description'=>'', 'image'=>'3.jpg'));
		$this->insert('{{%categories}}',array('id'=>4, 'name'=>'tourism', 'description'=>'', 'image'=>'4.jpg'));
		$this->insert('{{%categories}}',array('id'=>5, 'name'=>'Thailand', 'category_id'=>4, 'description'=>'', 'image'=>'5.jpg'));
		$this->insert('{{%categories}}',array('id'=>6, 'name'=>'India', 'category_id'=>4, 'description'=>'', 'image'=>'6.jpg'));
		
		$this->insert('{{%organization}}',array('name'=>'Ground hotel', 'description'=>'Good hotel', 'image'=>'hotel1.jpg', 'category_id'=>1));
		$this->insert('{{%organization}}',array('name'=>'Silver hotel', 'description'=>'Good hotel', 'image'=>'hotel2.jpg', 'category_id'=>1));
		
		$this->insert('{{%organization}}',array('name'=>'Ukrainian foods', 'description'=>'Good foods', 'image'=>'rest1.jpg', 'category_id'=>2));
		$this->insert('{{%organization}}',array('name'=>'Polish foods', 'description'=>'Good foods', 'image'=>'rest2.jpg', 'category_id'=>2));
		
		$this->insert('{{%organization}}',array('name'=>'Modern cafe', 'description'=>'Good cafe', 'image'=>'cafe1.jpg', 'category_id'=>3));
		$this->insert('{{%organization}}',array('name'=>'Rock cafe', 'description'=>'Good cafe and music', 'image'=>'cafe2.jpg', 'category_id'=>3));
		
		$this->insert('{{%organization}}',array('name'=>'Tour 1', 'description'=>'tour #1', 'image'=>'tout1.jpg', 'category_id'=>5));
		$this->insert('{{%organization}}',array('name'=>'Tour 2', 'description'=>'tour #2', 'image'=>'tout2.jpg', 'category_id'=>5));
		$this->insert('{{%organization}}',array('name'=>'Tour 3', 'description'=>'tour #3', 'image'=>'tout3.jpg', 'category_id'=>5));
		$this->insert('{{%organization}}',array('name'=>'Tour 1', 'description'=>'tour #1', 'image'=>'tout1.jpg', 'category_id'=>6));
		$this->insert('{{%organization}}',array('name'=>'Tour 2', 'description'=>'tour #2', 'image'=>'tout2.jpg', 'category_id'=>6));
		$this->insert('{{%organization}}',array('name'=>'Tour 3', 'description'=>'tour #3', 'image'=>'tout3.jpg', 'category_id'=>6));
		
		//$this->addForeignKey('fk_categories_category_id', '{{%categories}}', 'category_id', '{{%categories}}', 'id');
    }

    public function down()
    {
        echo "m150302_073212_seed_categories_organization_tables cannot be reverted.\n";

        return false;
    }
}

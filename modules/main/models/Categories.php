<?php

namespace app\modules\main\models;

use Yii;

/**
 * This is the model class for table "{{%categories}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $status
 * @property string $image
 * @property integer $category_id
 *
 * @property Categories $category
 * @property Categories[] $categories
 * @property Organization[] $organizations
 */
class Categories extends \yii\db\ActiveRecord
{
	const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'image'], 'required'],
            [['description'], 'string'],
            [['status', 'category_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['image'], 'string', 'max' => 51]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'status' => 'Status',
            'image' => 'Image',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['category_id' => 'id'])->from(['t2' => self::tableName()]);;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['category_id' => 'id']);
    }
}

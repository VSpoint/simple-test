<?php

namespace app\modules\main\controllers;

use app\modules\main\models\Categories;
use app\modules\main\models\Organization;
use yii\base\InvalidParamException;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\helpers\Html as Html;
use Yii; 
 
class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
 
    public function actionIndex()
    {
		$categories = Categories::find()->where("test_categories.status = 1 AND test_categories.category_id<=> NULL")->joinWith('categories')->all();
		return $this->render('index', [
            'categories' => $categories,
        ]);
    }
 
    public function actionItems($cat)
    {
		$organizations = Organization::find()->where("category_id = :cat", [':cat' => $cat])->all();
		return $this->render('items', [
            'organizations' => $organizations,
        ]);
    }
    public function actionView($id)
    {
		$organization = Organization::find()->where("id = :id", [':id' => $id])->one();
		return $this->render('view', [
            'organization' => $organization,
        ]);
    }
 
    public function actionAbout()
    {
        return $this->render('about');
    }
}
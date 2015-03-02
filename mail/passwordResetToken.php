<?php
use yii\helpers\Html;
 
/* @var $this yii\web\View */
/* @var $user app\modules\user\models\User */
 
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['user/default/reset-password', 'token' => $user->password_reset_token]);
?>
 
������������, <?= Html::encode($user->username) ?>!
 
�������� �� ������, ����� ������� ������:
 
<?= Html::a(Html::encode($resetLink), $resetLink) ?>
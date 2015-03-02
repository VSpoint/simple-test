<?php
use yii\helpers\Html;
 
/* @var $this yii\web\View */
/* @var $user app\modules\user\models\User */
 
$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['user/default/confirm-email', 'token' => $user->email_confirm_token]);
?>
 
������������, <?= Html::encode($user->username) ?>!
 
��� ������������� ������ �������� �� ������:
 
<?= Html::a(Html::encode($confirmLink), $confirmLink) ?>
 
���� �� �� ���������������� �� ����� �����, �� ������ ������� ��� ������.
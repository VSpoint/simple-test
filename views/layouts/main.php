<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\widgets\Alert;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<?= Html::csrfMetaTags() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
			//Обратите внимание, что мы добавили функцию array_filter, чтобы можно было выводить либо скрывать пункты по выбору.
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => array_filter([
					['label' => 'Home', 'url' => ['/main/default/index']],
					['label' => 'About', 'url' => ['/main/default/about']],
					['label' => 'Contact', 'url' => ['/contact/default/index']],
					Yii::$app->user->isGuest ?
						['label' => 'Sign Up', 'url' => ['/user/default/signup']] :
						false,
					Yii::$app->user->isGuest ?
						['label' => 'Login', 'url' => ['/user/default/login']] :
						['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
							'url' => ['/user/default/logout'],
							'linkOptions' => ['data-method' => 'post']],
				]),
			]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
			<?php
				//alert Flash-messages
				echo Alert::widget();
			?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
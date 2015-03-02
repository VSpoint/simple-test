<?php
use yii\helpers\Html as Html;
/**
 * @var yii\web\View $this
 */
$this->title = 'My Yii Application';
?>
<div class="main-default-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
		
        <div class="row">
			<?php
				foreach($organizations as $organization){
					echo '<p class="bg-warning">'.Html::a(ucfirst($organization->name), ['view', 'id' => $organization->id]).'</p>';
				}
			?>
        
        </div>

    </div>
</div>

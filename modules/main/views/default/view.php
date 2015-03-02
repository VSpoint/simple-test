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
				echo 'Name: '.$organization->name.'<br />';
				echo 'Description: '. $organization->description.'<br />';
				echo 'Image: '. $organization->image.'<br />';
				
			?>
        
        </div>

    </div>
</div>

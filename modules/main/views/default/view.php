<?php
use yii\helpers\Html as Html;
/**
 * @var yii\web\View $this
 */
$this->title = 'My Yii Application';
?>


<div class="body-content">
	
	<div class="row">
		<?php
			echo 'Name: '.$organization->name.'<br />';
			echo 'Description: '. $organization->description.'<br />';
			echo 'Image: '. $organization->image.'<br />';
			
		?>
	
	</div>

</div>

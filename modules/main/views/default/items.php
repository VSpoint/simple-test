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
			foreach($organizations as $organization){
				echo '<p class="bg-warning">'.Html::a(ucfirst($organization->name), ['view', 'id' => $organization->id]).'</p>';
			}
		?>
	
	</div>

</div>

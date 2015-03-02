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
			foreach($categories as $category){
				$countChields = count($category->categories);
				echo $countChields ? '<p class="bg-warning">'.ucfirst($category->name) : '<p class="bg-warning">'.Html::a(ucfirst($category->name), ['items', 'cat' => $category->id]);
				if($countChields){
					echo ' (';
					foreach($category->categories as $childCat){
						echo Html::a(ucfirst($childCat->name), ['items', 'cat' => $childCat->id]). ' ';
					}
					echo ')';
				}
				echo '</p>';
			}
		?>
	</div>

</div>

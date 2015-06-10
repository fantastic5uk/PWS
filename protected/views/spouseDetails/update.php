<?php
/* @var $this SpouseDetailsController */
/* @var $model SpouseDetails */

$this->breadcrumbs=array(
	'Spouse Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SpouseDetails', 'url'=>array('index')),
	array('label'=>'Create SpouseDetails', 'url'=>array('create')),
	array('label'=>'View SpouseDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SpouseDetails', 'url'=>array('admin')),
);
?>

<h1>Update SpouseDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this OfficerController */
/* @var $model Officer */

$this->breadcrumbs=array(
	'Officers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Officer', 'url'=>array('index')),
	array('label'=>'Create Officer', 'url'=>array('create')),
	array('label'=>'View Officer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Officer', 'url'=>array('admin')),
);
?>

<h1>Update Officer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
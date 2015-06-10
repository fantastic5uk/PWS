<?php
/* @var $this OfficerController */
/* @var $model Officer */

$this->breadcrumbs=array(
	'Officers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Officer', 'url'=>array('index')),
	array('label'=>'Manage Officer', 'url'=>array('admin')),
);
?>

<h1>Create Officer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
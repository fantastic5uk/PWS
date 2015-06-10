<?php
/* @var $this SpouseDetailsController */
/* @var $model SpouseDetails */

$this->breadcrumbs=array(
	'Spouse Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SpouseDetails', 'url'=>array('index')),
	array('label'=>'Manage SpouseDetails', 'url'=>array('admin')),
);
?>

<h1>Create SpouseDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
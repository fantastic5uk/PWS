<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $model DisabledOfficerDetails */

$this->breadcrumbs=array(
	'Disabled Officer Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DisabledOfficerDetails', 'url'=>array('index')),
	array('label'=>'Manage DisabledOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Create DisabledOfficerDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
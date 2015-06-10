<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $model DisabledOfficerDetails */

$this->breadcrumbs=array(
	'Disabled Officer Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DisabledOfficerDetails', 'url'=>array('index')),
	array('label'=>'Create DisabledOfficerDetails', 'url'=>array('create')),
	array('label'=>'View DisabledOfficerDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DisabledOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Update DisabledOfficerDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
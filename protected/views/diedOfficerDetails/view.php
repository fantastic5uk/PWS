<?php
/* @var $this DiedOfficerDetailsController */
/* @var $model DiedOfficerDetails */

$this->breadcrumbs=array(
	'Died Officer Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DiedOfficerDetails', 'url'=>array('index')),
	array('label'=>'Create DiedOfficerDetails', 'url'=>array('create')),
	array('label'=>'Update DiedOfficerDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DiedOfficerDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiedOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>View DiedOfficerDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'officerId',
		'diedDate',
		'designationWhenDied',
		'RegistrationNo',
		'isPromoted',
		'promotedDesignation',
		'promotedDate',
		'lastWorkedPlace',
		'lastWorkedDivision',
		'createdAt',
		'updatedAt',
	),
)); ?>

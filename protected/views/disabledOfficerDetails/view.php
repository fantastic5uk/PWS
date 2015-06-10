<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $model DisabledOfficerDetails */

$this->breadcrumbs=array(
	'Disabled Officer Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DisabledOfficerDetails', 'url'=>array('index')),
	array('label'=>'Create DisabledOfficerDetails', 'url'=>array('create')),
	array('label'=>'Update DisabledOfficerDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DisabledOfficerDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DisabledOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>View DisabledOfficerDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'officerId',
		'retiredDesignation',
		'RegistrationNo',
		'serviceType',
		'retiredDate',
		'lastWorkedPlace',
		'lastWorkedDivision',
		'earningPercentageAffect',
		'hospitalBoardNo',
		'hospitalDecisionDate',
		'createdAt',
		'updatedAt',
	),
)); ?>

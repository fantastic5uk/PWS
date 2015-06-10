<?php
/* @var $this SpouseDetailsController */
/* @var $model SpouseDetails */

$this->breadcrumbs=array(
	'Spouse Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SpouseDetails', 'url'=>array('index')),
	array('label'=>'Create SpouseDetails', 'url'=>array('create')),
	array('label'=>'Update SpouseDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SpouseDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SpouseDetails', 'url'=>array('admin')),
);
?>

<h1>View SpouseDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'officerId',
		'type',
		'NIC',
		'fullName',
		'otherName',
		'initials',
		'relationship',
		'DOB',
		'nationality',
		'religion',
		'gender',
		'currentAddress',
		'currentAddPoliceDivision',
		'currentTelNo',
		'JPdivison',
		'divisionalSecOffice',
		'operationalDistrtict',
		'permanantAddress',
		'permanantTelNo',
		'permanantAddPoliceDivision',
		'isMarriedAgain',
		'marriedDate',
		'isReceivingPension50',
		'isWorking',
		'designation',
		'workplaceAddress',
		'healthCondition',
		'createdAt',
		'updatedAt',
	),
)); ?>

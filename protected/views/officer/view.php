<?php
/* @var $this OfficerController */
/* @var $model Officer */

$this->breadcrumbs=array(
	'Officers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Officer', 'url'=>array('index')),
	array('label'=>'Create Officer', 'url'=>array('create')),
	array('label'=>'Update Officer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Officer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Officer', 'url'=>array('admin')),
);
?>

<h1>View Officer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'name' => 'type',
            'value' => $model->getType($model->type)
        ),
        array(
            'name' => 'incidentType',
            'value' => $model->getIncidentType($model->incidentType)
        ),
		'description',
		'incidentDate',
		'incidentPlace',
		'policeDivision',
		'policeDistrict',
		'lastName',
		'otherName',
		'initials',
		'incidentTimeDesignation',
		'incidentTimeRegistrationNo',
		'NIC',
		'registrationNo',
		'DOB',
		'maritalStatus',
		'joinedDate',
		'nationality',
		'religion',
		'gender',
		'incidentAtWork',
		'currentAddress',
		'currentTelNo',
		'currentMobileNo',
		'email',
		'currentAddPoliceDivision',
		'currentAddPolicDistrict',
		'permanantAddress',
		'permanantTelNo',
		'permanantAddPoliceDivision',
		'permanantAddPoliceDistrict',
		'JPdivison',
		'divisionalSecOffice',
		'operationalDistrtict',
		'residenceType',
		'hasLand',
		'landAddress',
		'incidentResult',
		'createdAt',
		'updatedAt',
	),
)); ?>

<?php
/* @var $this OfficerController */
/* @var $model Officer */

$this->breadcrumbs=array(
	'Officers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Officer', 'url'=>array('index')),
	array('label'=>'Create Officer', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#officer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Create Officer',array('create')); ?>

<h1>Manage Officers</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'data-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name' => 'id',
            'header' => 'No.',
            'htmlOptions' => array('style' => 'width: 5%;'),
        ),
        array(
            'name' => 'type',
            'value' => '$data->getType($data->type)'
        ),
        array(
            'name' => 'incidentType',
            'value' => '$data->getIncidentType($data->incidentType)'
        ),
		'description',
		'incidentDate',
		'incidentPlace',
		/*
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
		*/
		//array(
		//	'class'=>'CButtonColumn',
		//),
        array(
            'header' => Yii::t('device', 'Actions'),
            'class'=>'CButtonColumn',
            'template' => '{view}{update}{delete}{details}{updateDiedDetails}{updateDisabledDetails}{addSpouse}{updateSpouse}',
            'afterDelete' => 'function(link, success, data){ $("#statusMsg").html(data); }',
            'htmlOptions' => array('style' => 'width: 15%;'),
            'buttons' => array(
                'view' => array(
                    'visible' => 'Yii::app()->user->checkAccess("oSystemFormRead") ? true : true',
                ),
                'update' => array(
                    'visible' => 'Yii::app()->user->checkAccess("oSystemFormUpdate") ? true : true',
                ),
                'delete' => array(
                    'visible' => 'Yii::app()->user->checkAccess("oSystemFormDelete") ? true : true',
                ),
                'details' => array(
                    'label' => Yii::t('device', 'Add Details'),
                    'url' => '$data->type == "1" ? Yii::app()->controller->createUrl("diedOfficerDetails/create", array("id" => $data->id)): Yii::app()->controller->createUrl("disabledOfficerDetails/create", array("id" => $data->id))',
                    //'imageUrl' => Yii::app()->baseUrl . '/media/images/parent-btn.png',
                    'visible' => 'is_null($data->detailId) ? true : false',
                    'options' => array('style' => 'padding: 0px 3%'),
                ),
                'updateDiedDetails' => array(
                    'label' => Yii::t('device', 'Update Details'),
                    'url' => 'Yii::app()->controller->createUrl("diedOfficerDetails/update", array("id" => $data->detailId))',
                    //'imageUrl' => Yii::app()->baseUrl . '/media/images/parent-btn.png',
                    'visible' => '$data->type == "2" && !is_null($data->detailId) ? true : false',
                    'options' => array('style' => 'padding: 0px 3%'),
                ),
                'updateDisabledDetails' => array(
                    'label' => Yii::t('device', 'Update Details'),
                    'url' => 'Yii::app()->controller->createUrl("disabledOfficerDetails/update", array("id" => $data->detailId))',
                    //'imageUrl' => Yii::app()->baseUrl . '/media/images/parent-btn.png',
                    'visible' => '$data->type == "1" && !is_null($data->detailId) ? true : false',
                    'options' => array('style' => 'padding: 0px 3%'),
                ),
                'addSpouse' => array(
                    'label' => Yii::t('device', 'Add Spouse'),
                    'url' => 'Yii::app()->controller->createUrl("spouseDetails/create", array("id" => $data->id, "type" => $data->type))',
                    //'imageUrl' => Yii::app()->baseUrl . '/media/images/parent-btn.png',
                    'visible' => 'is_null($data->spouseId) ? true : false',
                    'options' => array('style' => 'padding: 0px 3%'),
                ),
                'updateSpouse' => array(
                    'label' => Yii::t('device', 'Update Spouse'),
                    'url' => 'Yii::app()->controller->createUrl("spouseDetails/update", array("id" => $data->spouseId))',
                    //'imageUrl' => Yii::app()->baseUrl . '/media/images/parent-btn.png',
                    'visible' => '!is_null($data->spouseId) ? true : false',
                    'options' => array('style' => 'padding: 0px 3%'),
                ),
            ),
        ),
	),
)); ?>

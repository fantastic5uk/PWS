<?php
/* @var $this SpouseDetailsController */
/* @var $model SpouseDetails */

$this->breadcrumbs=array(
	'Spouse Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SpouseDetails', 'url'=>array('index')),
	array('label'=>'Create SpouseDetails', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#spouse-details-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Spouse Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'spouse-details-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'officerId',
		'type',
		'NIC',
		'fullName',
		'otherName',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

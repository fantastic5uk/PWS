<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Disabled Officer Details',
);

$this->menu=array(
	array('label'=>'Create DisabledOfficerDetails', 'url'=>array('create')),
	array('label'=>'Manage DisabledOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Disabled Officer Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

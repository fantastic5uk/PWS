<?php
/* @var $this DiedOfficerDetailsController */
/* @var $model DiedOfficerDetails */

$this->breadcrumbs=array(
	'Died Officer Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiedOfficerDetails', 'url'=>array('index')),
	array('label'=>'Manage DiedOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Create DiedOfficerDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
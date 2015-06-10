<?php
/* @var $this DiedOfficerDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Died Officer Details',
);

$this->menu=array(
	array('label'=>'Create DiedOfficerDetails', 'url'=>array('create')),
	array('label'=>'Manage DiedOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Died Officer Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

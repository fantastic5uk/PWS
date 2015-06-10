<?php
/* @var $this SpouseDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spouse Details',
);

$this->menu=array(
	array('label'=>'Create SpouseDetails', 'url'=>array('create')),
	array('label'=>'Manage SpouseDetails', 'url'=>array('admin')),
);
?>

<h1>Spouse Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

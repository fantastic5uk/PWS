<?php
/* @var $this DiedOfficerDetailsController */
/* @var $model DiedOfficerDetails */

$this->breadcrumbs=array(
	'Died Officer Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiedOfficerDetails', 'url'=>array('index')),
	array('label'=>'Create DiedOfficerDetails', 'url'=>array('create')),
	array('label'=>'View DiedOfficerDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DiedOfficerDetails', 'url'=>array('admin')),
);
?>

<h1>Update DiedOfficerDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this DiedOfficerDetailsController */
/* @var $model DiedOfficerDetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'officerId'); ?>
		<?php echo $form->textField($model,'officerId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diedDate'); ?>
		<?php echo $form->textField($model,'diedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'designationWhenDied'); ?>
		<?php echo $form->textArea($model,'designationWhenDied',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegistrationNo'); ?>
		<?php echo $form->textArea($model,'RegistrationNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isPromoted'); ?>
		<?php echo $form->textField($model,'isPromoted',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promotedDesignation'); ?>
		<?php echo $form->textArea($model,'promotedDesignation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'promotedDate'); ?>
		<?php echo $form->textField($model,'promotedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastWorkedPlace'); ?>
		<?php echo $form->textArea($model,'lastWorkedPlace',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastWorkedDivision'); ?>
		<?php echo $form->textArea($model,'lastWorkedDivision',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdAt'); ?>
		<?php echo $form->textField($model,'createdAt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedAt'); ?>
		<?php echo $form->textField($model,'updatedAt'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
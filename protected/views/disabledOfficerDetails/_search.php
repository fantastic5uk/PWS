<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $model DisabledOfficerDetails */
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
		<?php echo $form->label($model,'retiredDesignation'); ?>
		<?php echo $form->textArea($model,'retiredDesignation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RegistrationNo'); ?>
		<?php echo $form->textArea($model,'RegistrationNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serviceType'); ?>
		<?php echo $form->textField($model,'serviceType'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'retiredDate'); ?>
		<?php echo $form->textField($model,'retiredDate'); ?>
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
		<?php echo $form->label($model,'earningPercentageAffect'); ?>
		<?php echo $form->textArea($model,'earningPercentageAffect',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalBoardNo'); ?>
		<?php echo $form->textArea($model,'hospitalBoardNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hospitalDecisionDate'); ?>
		<?php echo $form->textField($model,'hospitalDecisionDate'); ?>
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
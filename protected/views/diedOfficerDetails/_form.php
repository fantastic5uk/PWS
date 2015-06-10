<?php
/* @var $this DiedOfficerDetailsController */
/* @var $model DiedOfficerDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'died-officer-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'diedDate'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'diedDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php //echo $form->textField($model,'diedDate'); ?>
		<?php echo $form->error($model,'diedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designationWhenDied'); ?>
		<?php echo $form->textField($model,'designationWhenDied'); ?>
		<?php echo $form->error($model,'designationWhenDied'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegistrationNo'); ?>
		<?php echo $form->textField($model,'RegistrationNo'); ?>
		<?php echo $form->error($model,'RegistrationNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isPromoted'); ?>
        <?php echo $form->dropDownList($model, 'isPromoted', $model->getBool(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'isPromoted',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'isPromoted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promotedDesignation'); ?>
		<?php echo $form->textField($model,'promotedDesignation'); ?>
		<?php echo $form->error($model,'promotedDesignation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'promotedDate'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'promotedDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php echo $form->error($model,'promotedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastWorkedPlace'); ?>
		<?php echo $form->textField($model,'lastWorkedPlace'); ?>
		<?php echo $form->error($model,'lastWorkedPlace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastWorkedDivision'); ?>
		<?php echo $form->textField($model,'lastWorkedDivision'); ?>
		<?php echo $form->error($model,'lastWorkedDivision'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
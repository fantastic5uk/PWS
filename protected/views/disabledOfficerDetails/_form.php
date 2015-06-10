<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $model DisabledOfficerDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disabled-officer-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'retiredDesignation'); ?>
		<?php echo $form->textField($model,'retiredDesignation'); ?>
		<?php echo $form->error($model,'retiredDesignation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RegistrationNo'); ?>
		<?php echo $form->textField($model,'RegistrationNo'); ?>
		<?php echo $form->error($model,'RegistrationNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serviceType'); ?>
		<?php //echo $form->textField($model,'serviceType'); ?>
        <?php echo $form->dropDownList($model, 'serviceType', $model->getServiceType(), array('empty'=>'- - Select - -')); ?>
		<?php echo $form->error($model,'serviceType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retiredDate'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'retiredDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php //echo $form->textField($model,'retiredDate'); ?>
		<?php echo $form->error($model,'retiredDate'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'earningPercentageAffect'); ?>
		<?php echo $form->textField($model,'earningPercentageAffect'); ?>
		<?php echo $form->error($model,'earningPercentageAffect'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hospitalBoardNo'); ?>
		<?php echo $form->textField($model,'hospitalBoardNo'); ?>
		<?php echo $form->error($model,'hospitalBoardNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hospitalDecisionDate'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'hospitalDecisionDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php //echo $form->textField($model,'hospitalDecisionDate'); ?>
		<?php echo $form->error($model,'hospitalDecisionDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
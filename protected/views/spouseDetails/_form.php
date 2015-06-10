<?php
/* @var $this SpouseDetailsController */
/* @var $model SpouseDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'spouse-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NIC'); ?>
		<?php echo $form->textField($model,'NIC',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'NIC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullName'); ?>
		<?php echo $form->textField($model,'fullName'); ?>
		<?php echo $form->error($model,'fullName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherName'); ?>
		<?php echo $form->textField($model,'otherName'); ?>
		<?php echo $form->error($model,'otherName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initials'); ?>
		<?php echo $form->textField($model,'initials'); ?>
		<?php echo $form->error($model,'initials'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relationship'); ?>
		<?php echo $form->textField($model,'relationship'); ?>
		<?php echo $form->error($model,'relationship'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOB'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'DOB',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php echo $form->error($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentAddress'); ?>
		<?php echo $form->textField($model,'currentAddress'); ?>
		<?php echo $form->error($model,'currentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentAddPoliceDivision'); ?>
		<?php echo $form->textField($model,'currentAddPoliceDivision'); ?>
		<?php echo $form->error($model,'currentAddPoliceDivision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentTelNo'); ?>
		<?php echo $form->textField($model,'currentTelNo'); ?>
		<?php echo $form->error($model,'currentTelNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JPdivison'); ?>
		<?php echo $form->textField($model,'JPdivison'); ?>
		<?php echo $form->error($model,'JPdivison'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divisionalSecOffice'); ?>
		<?php echo $form->textField($model,'divisionalSecOffice'); ?>
		<?php echo $form->error($model,'divisionalSecOffice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operationalDistrtict'); ?>
		<?php echo $form->textField($model,'operationalDistrtict'); ?>
		<?php echo $form->error($model,'operationalDistrtict'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantAddress'); ?>
		<?php echo $form->textField($model,'permanantAddress'); ?>
		<?php echo $form->error($model,'permanantAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantTelNo'); ?>
		<?php echo $form->textField($model,'permanantTelNo'); ?>
		<?php echo $form->error($model,'permanantTelNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantAddPoliceDivision'); ?>
		<?php echo $form->textField($model,'permanantAddPoliceDivision'); ?>
		<?php echo $form->error($model,'permanantAddPoliceDivision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isMarriedAgain'); ?>
        <?php echo $form->dropDownList($model, 'isMarriedAgain', $model->getBool(), array('empty'=>'- - Select - -')); ?>
		<?php //echo $form->textField($model,'isMarriedAgain',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'isMarriedAgain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marriedDate'); ?>
		<?php //echo $form->textField($model,'marriedDate'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'marriedDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php echo $form->error($model,'marriedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isReceivingPension50'); ?>
		<?php //echo $form->textField($model,'isReceivingPension50',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->dropDownList($model, 'isReceivingPension50', $model->getBool(), array('empty'=>'- - Select - -')); ?>
		<?php echo $form->error($model,'isReceivingPension50'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isWorking'); ?>
        <?php echo $form->dropDownList($model, 'isWorking', $model->getBool(), array('empty'=>'- - Select - -')); ?>
		<?php //echo $form->textField($model,'isWorking',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'isWorking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designation'); ?>
		<?php echo $form->textField($model,'designation'); ?>
		<?php echo $form->error($model,'designation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'workplaceAddress'); ?>
		<?php echo $form->textField($model,'workplaceAddress'); ?>
		<?php echo $form->error($model,'workplaceAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'healthCondition'); ?>
		<?php echo $form->textField($model,'healthCondition'); ?>
		<?php echo $form->error($model,'healthCondition'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
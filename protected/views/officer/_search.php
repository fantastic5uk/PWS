<?php
/* @var $this OfficerController */
/* @var $model Officer */
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
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentType'); ?>
		<?php echo $form->textField($model,'incidentType',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentDate'); ?>
		<?php echo $form->textField($model,'incidentDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentPlace'); ?>
		<?php echo $form->textArea($model,'incidentPlace',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'policeDivision'); ?>
		<?php echo $form->textArea($model,'policeDivision',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'policeDistrict'); ?>
		<?php echo $form->textArea($model,'policeDistrict',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastName'); ?>
		<?php echo $form->textArea($model,'lastName',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otherName'); ?>
		<?php echo $form->textArea($model,'otherName',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'initials'); ?>
		<?php echo $form->textArea($model,'initials',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentTimeDesignation'); ?>
		<?php echo $form->textArea($model,'incidentTimeDesignation',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentTimeRegistrationNo'); ?>
		<?php echo $form->textArea($model,'incidentTimeRegistrationNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIC'); ?>
		<?php echo $form->textField($model,'NIC'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registrationNo'); ?>
		<?php echo $form->textField($model,'registrationNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'maritalStatus'); ?>
		<?php echo $form->textField($model,'maritalStatus',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'joinedDate'); ?>
		<?php echo $form->textField($model,'joinedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentAtWork'); ?>
		<?php echo $form->textField($model,'incidentAtWork',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentAddress'); ?>
		<?php echo $form->textArea($model,'currentAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentTelNo'); ?>
		<?php echo $form->textArea($model,'currentTelNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentMobileNo'); ?>
		<?php echo $form->textArea($model,'currentMobileNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentAddPoliceDivision'); ?>
		<?php echo $form->textArea($model,'currentAddPoliceDivision',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'currentAddPolicDistrict'); ?>
		<?php echo $form->textArea($model,'currentAddPolicDistrict',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permanantAddress'); ?>
		<?php echo $form->textArea($model,'permanantAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permanantTelNo'); ?>
		<?php echo $form->textArea($model,'permanantTelNo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permanantAddPoliceDivision'); ?>
		<?php echo $form->textArea($model,'permanantAddPoliceDivision',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'permanantAddPoliceDistrict'); ?>
		<?php echo $form->textArea($model,'permanantAddPoliceDistrict',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JPdivison'); ?>
		<?php echo $form->textArea($model,'JPdivison',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'divisionalSecOffice'); ?>
		<?php echo $form->textArea($model,'divisionalSecOffice',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operationalDistrtict'); ?>
		<?php echo $form->textArea($model,'operationalDistrtict',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'residenceType'); ?>
		<?php echo $form->textField($model,'residenceType',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hasLand'); ?>
		<?php echo $form->textField($model,'hasLand',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landAddress'); ?>
		<?php echo $form->textArea($model,'landAddress',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incidentResult'); ?>
		<?php echo $form->textField($model,'incidentResult',array('size'=>1,'maxlength'=>1)); ?>
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
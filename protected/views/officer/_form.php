<?php
/* @var $this OfficerController */
/* @var $model Officer */
/* @var $form CActiveForm */
?>

<div class="form oddrows">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'officer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'type', $model->getTypes(), array('empty'=>'- - Select - -')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentType' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'incidentType', $model->getIncidentTypes(), array('empty'=>'- - Select - -')); ?>
		<?php echo $form->error($model,'incidentType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentDate' , array('class'=>'col-sm-4')); ?>
<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'incidentDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        )); ?>
		<?php echo $form->error($model,'incidentDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentPlace' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'incidentPlace',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'incidentPlace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policeDivision' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'policeDivision',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'policeDivision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policeDistrict' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'policeDistrict',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'policeDistrict'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastName' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'lastName',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherName' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'otherName',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'otherName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initials' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'initials'); ?>
		<?php echo $form->error($model,'initials'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentTimeDesignation' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'incidentTimeDesignation'); ?>
		<?php echo $form->error($model,'incidentTimeDesignation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentTimeRegistrationNo' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'incidentTimeRegistrationNo'); ?>
		<?php echo $form->error($model,'incidentTimeRegistrationNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIC' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'NIC'); ?>
		<?php echo $form->error($model,'NIC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'registrationNo' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'registrationNo'); ?>
		<?php echo $form->error($model,'registrationNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DOB' , array('class'=>'col-sm-4')); ?>
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
		<?php echo $form->labelEx($model,'maritalStatus' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'maritalStatus', $model->getMarriedStatus(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'maritalStatus',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'maritalStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joinedDate' , array('class'=>'col-sm-4')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
            'model'     => $model,
            'attribute' => 'joinedDate',
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
            //'language'=> Yii::app()->language,
        ));?>
		<?php //echo $form->textField($model,'joinedDate'); ?>
		<?php echo $form->error($model,'joinedDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'nationality', $model->getNationality(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'nationality',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'religion', $model->getRelegion(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'religion',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'gender', $model->getGender(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentAtWork' , array('class'=>'col-sm-4')); ?>
		<?php //echo $form->textField($model,'incidentAtWork',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->dropDownList($model, 'incidentAtWork', $model->getBool(), array('empty'=>'- - Select - -')); ?>

        <?php echo $form->error($model,'incidentAtWork'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentAddress' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textArea($model,'currentAddress',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'currentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentTelNo' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'currentTelNo'); ?>
		<?php echo $form->error($model,'currentTelNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentMobileNo' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'currentMobileNo'); ?>
		<?php echo $form->error($model,'currentMobileNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128,'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentAddPoliceDivision' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'currentAddPoliceDivision' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'currentAddPoliceDivision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentAddPolicDistrict' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'currentAddPolicDistrict' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'currentAddPolicDistrict'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantAddress' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textArea($model,'permanantAddress',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'permanantAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantTelNo' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'permanantTelNo'); ?>
		<?php echo $form->error($model,'permanantTelNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantAddPoliceDivision' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'permanantAddPoliceDivision' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'permanantAddPoliceDivision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'permanantAddPoliceDistrict' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'permanantAddPoliceDistrict' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'permanantAddPoliceDistrict'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JPdivison' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'JPdivison' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'JPdivison'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'divisionalSecOffice' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'divisionalSecOffice' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'divisionalSecOffice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operationalDistrtict' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textField($model,'operationalDistrtict' , array('class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'operationalDistrtict'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'residenceType' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'residenceType', $model->getResidenceTypes(), array('empty'=>'- - Select - -')); ?>
		<?php echo $form->error($model,'residenceType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hasLand' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'hasLand', $model->getBool(), array('empty'=>'- - Select - -')); ?>

        <?php //echo $form->textField($model,'hasLand',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'hasLand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landAddress' , array('class'=>'col-sm-4')); ?>
		<?php echo $form->textArea($model,'landAddress',array('rows'=>6, 'cols'=>50, 'class'=>'col-sm-6')); ?>
		<?php echo $form->error($model,'landAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incidentResult' , array('class'=>'col-sm-4')); ?>
        <?php echo $form->dropDownList($model, 'incidentResult', $model->getIncidentResult(), array('empty'=>'- - Select - -')); ?>
		<?php //echo $form->textField($model,'incidentResult',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'incidentResult'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
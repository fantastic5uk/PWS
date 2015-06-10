<?php
/* @var $this OfficerController */
/* @var $data Officer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentType')); ?>:</b>
	<?php echo CHtml::encode($data->incidentType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentDate')); ?>:</b>
	<?php echo CHtml::encode($data->incidentDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentPlace')); ?>:</b>
	<?php echo CHtml::encode($data->incidentPlace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policeDivision')); ?>:</b>
	<?php echo CHtml::encode($data->policeDivision); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('policeDistrict')); ?>:</b>
	<?php echo CHtml::encode($data->policeDistrict); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastName')); ?>:</b>
	<?php echo CHtml::encode($data->lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otherName')); ?>:</b>
	<?php echo CHtml::encode($data->otherName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initials')); ?>:</b>
	<?php echo CHtml::encode($data->initials); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentTimeDesignation')); ?>:</b>
	<?php echo CHtml::encode($data->incidentTimeDesignation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentTimeRegistrationNo')); ?>:</b>
	<?php echo CHtml::encode($data->incidentTimeRegistrationNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIC')); ?>:</b>
	<?php echo CHtml::encode($data->NIC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registrationNo')); ?>:</b>
	<?php echo CHtml::encode($data->registrationNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maritalStatus')); ?>:</b>
	<?php echo CHtml::encode($data->maritalStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joinedDate')); ?>:</b>
	<?php echo CHtml::encode($data->joinedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentAtWork')); ?>:</b>
	<?php echo CHtml::encode($data->incidentAtWork); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentAddress')); ?>:</b>
	<?php echo CHtml::encode($data->currentAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentTelNo')); ?>:</b>
	<?php echo CHtml::encode($data->currentTelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentMobileNo')); ?>:</b>
	<?php echo CHtml::encode($data->currentMobileNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentAddPoliceDivision')); ?>:</b>
	<?php echo CHtml::encode($data->currentAddPoliceDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentAddPolicDistrict')); ?>:</b>
	<?php echo CHtml::encode($data->currentAddPolicDistrict); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantAddress')); ?>:</b>
	<?php echo CHtml::encode($data->permanantAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantTelNo')); ?>:</b>
	<?php echo CHtml::encode($data->permanantTelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantAddPoliceDivision')); ?>:</b>
	<?php echo CHtml::encode($data->permanantAddPoliceDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantAddPoliceDistrict')); ?>:</b>
	<?php echo CHtml::encode($data->permanantAddPoliceDistrict); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JPdivison')); ?>:</b>
	<?php echo CHtml::encode($data->JPdivison); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divisionalSecOffice')); ?>:</b>
	<?php echo CHtml::encode($data->divisionalSecOffice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operationalDistrtict')); ?>:</b>
	<?php echo CHtml::encode($data->operationalDistrtict); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('residenceType')); ?>:</b>
	<?php echo CHtml::encode($data->residenceType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasLand')); ?>:</b>
	<?php echo CHtml::encode($data->hasLand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landAddress')); ?>:</b>
	<?php echo CHtml::encode($data->landAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incidentResult')); ?>:</b>
	<?php echo CHtml::encode($data->incidentResult); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedAt')); ?>:</b>
	<?php echo CHtml::encode($data->updatedAt); ?>
	<br />

	*/ ?>

</div>
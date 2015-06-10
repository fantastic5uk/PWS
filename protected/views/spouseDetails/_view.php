<?php
/* @var $this SpouseDetailsController */
/* @var $data SpouseDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officerId')); ?>:</b>
	<?php echo CHtml::encode($data->officerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIC')); ?>:</b>
	<?php echo CHtml::encode($data->NIC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullName')); ?>:</b>
	<?php echo CHtml::encode($data->fullName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otherName')); ?>:</b>
	<?php echo CHtml::encode($data->otherName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initials')); ?>:</b>
	<?php echo CHtml::encode($data->initials); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('relationship')); ?>:</b>
	<?php echo CHtml::encode($data->relationship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentAddress')); ?>:</b>
	<?php echo CHtml::encode($data->currentAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentAddPoliceDivision')); ?>:</b>
	<?php echo CHtml::encode($data->currentAddPoliceDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentTelNo')); ?>:</b>
	<?php echo CHtml::encode($data->currentTelNo); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantAddress')); ?>:</b>
	<?php echo CHtml::encode($data->permanantAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantTelNo')); ?>:</b>
	<?php echo CHtml::encode($data->permanantTelNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanantAddPoliceDivision')); ?>:</b>
	<?php echo CHtml::encode($data->permanantAddPoliceDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isMarriedAgain')); ?>:</b>
	<?php echo CHtml::encode($data->isMarriedAgain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marriedDate')); ?>:</b>
	<?php echo CHtml::encode($data->marriedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isReceivingPension50')); ?>:</b>
	<?php echo CHtml::encode($data->isReceivingPension50); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isWorking')); ?>:</b>
	<?php echo CHtml::encode($data->isWorking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designation')); ?>:</b>
	<?php echo CHtml::encode($data->designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('workplaceAddress')); ?>:</b>
	<?php echo CHtml::encode($data->workplaceAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('healthCondition')); ?>:</b>
	<?php echo CHtml::encode($data->healthCondition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedAt')); ?>:</b>
	<?php echo CHtml::encode($data->updatedAt); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this DiedOfficerDetailsController */
/* @var $data DiedOfficerDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officerId')); ?>:</b>
	<?php echo CHtml::encode($data->officerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diedDate')); ?>:</b>
	<?php echo CHtml::encode($data->diedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('designationWhenDied')); ?>:</b>
	<?php echo CHtml::encode($data->designationWhenDied); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegistrationNo')); ?>:</b>
	<?php echo CHtml::encode($data->RegistrationNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isPromoted')); ?>:</b>
	<?php echo CHtml::encode($data->isPromoted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('promotedDesignation')); ?>:</b>
	<?php echo CHtml::encode($data->promotedDesignation); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('promotedDate')); ?>:</b>
	<?php echo CHtml::encode($data->promotedDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastWorkedPlace')); ?>:</b>
	<?php echo CHtml::encode($data->lastWorkedPlace); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastWorkedDivision')); ?>:</b>
	<?php echo CHtml::encode($data->lastWorkedDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedAt')); ?>:</b>
	<?php echo CHtml::encode($data->updatedAt); ?>
	<br />

	*/ ?>

</div>
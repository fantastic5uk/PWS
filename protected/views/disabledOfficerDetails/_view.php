<?php
/* @var $this DisabledOfficerDetailsController */
/* @var $data DisabledOfficerDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officerId')); ?>:</b>
	<?php echo CHtml::encode($data->officerId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retiredDesignation')); ?>:</b>
	<?php echo CHtml::encode($data->retiredDesignation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RegistrationNo')); ?>:</b>
	<?php echo CHtml::encode($data->RegistrationNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serviceType')); ?>:</b>
	<?php echo CHtml::encode($data->serviceType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retiredDate')); ?>:</b>
	<?php echo CHtml::encode($data->retiredDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastWorkedPlace')); ?>:</b>
	<?php echo CHtml::encode($data->lastWorkedPlace); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastWorkedDivision')); ?>:</b>
	<?php echo CHtml::encode($data->lastWorkedDivision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earningPercentageAffect')); ?>:</b>
	<?php echo CHtml::encode($data->earningPercentageAffect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalBoardNo')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalBoardNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalDecisionDate')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalDecisionDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdAt')); ?>:</b>
	<?php echo CHtml::encode($data->createdAt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedAt')); ?>:</b>
	<?php echo CHtml::encode($data->updatedAt); ?>
	<br />

	*/ ?>

</div>
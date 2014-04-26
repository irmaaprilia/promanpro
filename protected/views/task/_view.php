<?php
/* @var $this TaskController */
/* @var $data Task */
?>

<div class="view">
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('pID')); ?>:</b>
	<?php echo CHtml::encode($data->pID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<!--<?php echo CHtml::encode($data->Name); ?>-->
        <?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PJ')); ?>:</b>
	<?php echo CHtml::encode($data->PJ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Progress')); ?>:</b>
	<?php echo CHtml::encode($data->Progress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Start_Time')); ?>:</b>
	<?php echo CHtml::encode($data->Start_Time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('End_Time')); ?>:</b>
	<?php echo CHtml::encode($data->End_Time); ?>
	<br />
<<<<<<< HEAD

	*/ ?>
=======
        <br></br>
>>>>>>> 358cc416f01cbbfbe817d60143a9f250065662d0

</div>
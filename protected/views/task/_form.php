<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'task-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

        <!-- form 
        <div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PJ'); ?>
		<?php echo $form->textField($model,'PJ',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'PJ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Progress'); ?>
		<?php echo $form->textField($model,'Progress'); ?>
		<?php echo $form->error($model,'Progress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Start_Time'); ?>
		<?php echo $form->textField($model,'Start_Time'); ?>
		<?php echo $form->error($model,'Start_Time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'End_Time'); ?>
		<?php echo $form->textField($model,'End_Time'); ?>
		<?php echo $form->error($model,'End_Time'); ?>
	</div>
        -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
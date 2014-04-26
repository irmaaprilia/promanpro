<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'task-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary($model); ?>

<<<<<<< HEAD
	<div class="row">
		<?php echo $form->labelEx($model,'pID'); ?>
		<?php echo $form->textField($model,'pID'); ?>
		<?php echo $form->error($model,'pID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>
=======
    <div class="row">
<?php echo $form->labelEx($model, 'Name'); ?>
<?php echo $form->textField($model, 'Name', array('size' => 20, 'maxlength' => 20)); ?>
        <!--<?php echo $form->error($model, 'Name'); ?>-->
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Start_Date'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => 'Task[Start_Time]',
            'value' => $model->Start_Time,
            'htmlOptions' => array(
                'size' => '10', // textField size
                'maxlength' => '10', // textField maxlength
            ),
            'options' => array(
                'dateFormat' => 'yy-mm-dd',
            )
        ));
        ?>
        <!--<?php echo $form->textField($model, 'Start_Time', array('placeholder' => 'YYYY-MM-DD')); ?>-->
        <!--<?php echo $form->error($model, 'Start_Time'); ?>-->
    </div>
>>>>>>> 358cc416f01cbbfbe817d60143a9f250065662d0

    <!-- form 
    <div class="row">
<?php echo $form->labelEx($model, 'Description'); ?>
<?php echo $form->textArea($model, 'Description', array('rows' => 6, 'cols' => 50)); ?>
    <?php echo $form->error($model, 'Description'); ?>
    </div>

    <div class="row">
<?php echo $form->labelEx($model, 'PJ'); ?>
<?php echo $form->textField($model, 'PJ', array('size' => 20, 'maxlength' => 20)); ?>
    <?php echo $form->error($model, 'PJ'); ?>
    </div>

<<<<<<< HEAD
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
=======
    <div class="row">
<?php echo $form->labelEx($model, 'Progress'); ?>
<?php echo $form->textField($model, 'Progress'); ?>
        <?php echo $form->error($model, 'Progress'); ?>
    </div>
    -->
    <div class="row">
        <?php echo $form->labelEx($model, 'End_Date'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => 'Task[End_Time]',
            'value' => $model->End_Time,
            'htmlOptions' => array(
                'size' => '10', // textField size
                'maxlength' => '10', // textField maxlength
            ),
            'options' => array(
                'dateFormat' => 'yy-mm-dd',
            )
        ));
        ?>
        <!--<?php echo $form->textField($model, 'End_Time', array('placeholder' => 'YYYY-MM-DD')); ?>-->
        <!--<?php echo $form->error($model, 'End_Time'); ?>-->
    </div>
>>>>>>> 358cc416f01cbbfbe817d60143a9f250065662d0


    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
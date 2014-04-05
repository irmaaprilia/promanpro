<?php
/* @var $this SiteController */
/* @var $model user */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Register',
);
?>

<h1>Register</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
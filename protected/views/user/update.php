<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'View User', 'url'=>array('view', 'id'=>$model->ID)),
	//array('label'=>'Manage User', 'url'=>array('admin')),
);
?>
<br></br>
<h1>Edit Profile</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
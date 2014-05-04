<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->Name,
);

$this->menu=array(
	//array('label'=>'List Project', 'url'=>array('index')),
	//array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Update Project', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Project', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Create Task', 'url'=>array('task/create')),
        array('label'=>'View Task', 'url'=>array('task/index')),
        array('label'=>'Create invitation', 'url'=>array('invitation/create')),
        //array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>
<br></br>
<h1>View Project : <?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'ID',
		'Name',
		'Description',
		//'Status',
		'Start_Date',
		'End_Date',
		//'adminProject',
	),
)); ?>

<?php $this->widget('CTabView', array(
    'tabs'=>array(
        'tab1'=>array(
            'title'=>'timeline',
            //'view'=>'/task/_view',
            //'data'=>array('model'=>$model),
        ),
        'tab2'=>array(
            'title'=>'setting',
            //'url'=>'http://www.yiiframework.com/',
        ),
        'tab3'=>array(
            'title'=>'participants',
            //'url'=>'http://www.yiiframework.com/',
        ),
    ),
)); ?> 

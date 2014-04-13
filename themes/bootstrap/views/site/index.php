<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- 
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php $this->endWidget(); ?>
-->

    <?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Hello, world!',
    //TbHtml::button('Learn more', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE))
    
    
)); ?>
<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> 
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Sign Up',
    'url'=>array('/site/register'),
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // null, 'large', 'small' or 'mini'
)); ?>
<?php $this->endWidget(); ?>


<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>

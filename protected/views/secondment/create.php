<?php
/* @var $this SecondmentController */
/* @var $model Secondment */

$this->breadcrumbs=array(
	'Secondments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Secondment', 'url'=>array('index')),
	array('label'=>'Manage Secondment', 'url'=>array('admin')),
);
?>

<h1>Create Secondment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
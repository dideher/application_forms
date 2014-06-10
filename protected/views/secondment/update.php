<?php
/* @var $this SecondmentController */
/* @var $model Secondment */

$this->breadcrumbs=array(
	'Secondments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secondment', 'url'=>array('index')),
	array('label'=>'Create Secondment', 'url'=>array('create')),
	array('label'=>'View Secondment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Secondment', 'url'=>array('admin')),
);
?>

<h1>Update Secondment <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
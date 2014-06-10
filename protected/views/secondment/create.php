<?php
/* @var $this SecondmentController */
/* @var $model Secondment */

$this->breadcrumbs=array(
	'Αιτήσεις Αποσπάσεων'=>array('index'),
	'Καταχώρηση',
);

$this->menu=array(
	array('label'=>'List Secondment', 'url'=>array('index')),
	array('label'=>'Manage Secondment', 'url'=>array('admin')),
);
?>

<h1>Καταχώρηση Αίτησης</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

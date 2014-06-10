<?php
/* @var $this SecondmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Secondments',
);

$this->menu=array(
	array('label'=>'Create Secondment', 'url'=>array('create')),
	array('label'=>'Manage Secondment', 'url'=>array('admin')),
);
?>

<h1>Secondments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

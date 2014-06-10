<?php
/* @var $this SecondmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Αιτήσης Αποσπάσεων',
);

$this->menu=array(
	array('label'=>'Νέα Αίτηση Απόσπασης', 'url'=>array('create')),
	array('label'=>'Διαχείριση Αιτήσεων', 'url'=>array('admin')),
);
?>

<h1>Αιτήσεις Αποσπάσεων</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

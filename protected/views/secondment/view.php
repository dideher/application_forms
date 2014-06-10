<?php
/* @var $this SecondmentController */
/* @var $model Secondment */

$this->breadcrumbs=array(
	'Secondments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Secondment', 'url'=>array('index')),
	array('label'=>'Create Secondment', 'url'=>array('create')),
	array('label'=>'Update Secondment', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Secondment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secondment', 'url'=>array('admin')),
);
?>

<h1>View Secondment #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'oik_katastasi',
		'paidia',
		'eksosomatiki',
		'ygeia_idios',
		'ygeia_syzigos',
		'ygeia_paidi',
		'ygeia_adelfos',
		'entopiotita',
		'synyphrethsh',
		'spoudes',
		'goneis_dhmos',
		'goneis_ygeia',
		'protaireotita',
		'parathrhseis',
	),
)); ?>

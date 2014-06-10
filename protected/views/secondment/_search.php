<?php
/* @var $this SecondmentController */
/* @var $model Secondment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oik_katastasi'); ?>
		<?php echo $form->textField($model,'oik_katastasi',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paidia'); ?>
		<?php echo $form->textField($model,'paidia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eksosomatiki'); ?>
		<?php echo $form->textField($model,'eksosomatiki'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ygeia_idios'); ?>
		<?php echo $form->textField($model,'ygeia_idios',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ygeia_syzigos'); ?>
		<?php echo $form->textField($model,'ygeia_syzigos',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ygeia_paidi'); ?>
		<?php echo $form->textField($model,'ygeia_paidi',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ygeia_adelfos'); ?>
		<?php echo $form->textField($model,'ygeia_adelfos',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entopiotita'); ?>
		<?php echo $form->textField($model,'entopiotita',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'synyphrethsh'); ?>
		<?php echo $form->textField($model,'synyphrethsh',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spoudes'); ?>
		<?php echo $form->textField($model,'spoudes',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goneis_dhmos'); ?>
		<?php echo $form->textField($model,'goneis_dhmos',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goneis_ygeia'); ?>
		<?php echo $form->textField($model,'goneis_ygeia',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'protaireotita'); ?>
		<?php echo $form->textField($model,'protaireotita',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parathrhseis'); ?>
		<?php echo $form->textArea($model,'parathrhseis',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
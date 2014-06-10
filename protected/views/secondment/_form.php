<?php
/* @var $this SecondmentController */
/* @var $model Secondment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'secondment-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oik_katastasi'); ?>
		<?php echo $form->textField($model,'oik_katastasi',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'oik_katastasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paidia'); ?>
		<?php echo $form->textField($model,'paidia'); ?>
		<?php echo $form->error($model,'paidia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eksosomatiki'); ?>
		<?php echo $form->textField($model,'eksosomatiki'); ?>
		<?php echo $form->error($model,'eksosomatiki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_idios'); ?>
		<?php echo $form->textField($model,'ygeia_idios',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ygeia_idios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_syzigos'); ?>
		<?php echo $form->textField($model,'ygeia_syzigos',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ygeia_syzigos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_paidi'); ?>
		<?php echo $form->textField($model,'ygeia_paidi',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ygeia_paidi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_adelfos'); ?>
		<?php echo $form->textField($model,'ygeia_adelfos',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ygeia_adelfos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entopiotita'); ?>
		<?php echo $form->textField($model,'entopiotita',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'entopiotita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'synyphrethsh'); ?>
		<?php echo $form->textField($model,'synyphrethsh',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'synyphrethsh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spoudes'); ?>
		<?php echo $form->textField($model,'spoudes',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'spoudes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goneis_dhmos'); ?>
		<?php echo $form->textField($model,'goneis_dhmos',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'goneis_dhmos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goneis_ygeia'); ?>
		<?php echo $form->textField($model,'goneis_ygeia',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'goneis_ygeia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protaireotita'); ?>
		<?php echo $form->textField($model,'protaireotita',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'protaireotita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parathrhseis'); ?>
		<?php echo $form->textArea($model,'parathrhseis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'parathrhseis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
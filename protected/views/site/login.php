<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Ταυτοποίηση';
$this->breadcrumbs=array(
	'Ταυτοποίηση',
);
?>

<h1>Ταυτοποίηση</h1>

<p>Παρακαλούμε, συμπληρώστε τα παρακάτω στοιχεία :</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
  'type'=>'vertical',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array('class'=>'well')
)); ?>

	<p class="note">Τα πεδία με <span class="required">*</span> είναι υποχρεωτικά.</p>
<div class="row-fluid">
	<div class="span3">
		<?php echo $form->textFieldRow($model,'am'); ?>
		<?php echo $form->textFieldRow($model,'afm'); ?>
	</div>

	<div class="span6">
		<?php echo $form->textFieldRow($model,'namePrefix', array(
			'hint'=>'Σημείωση : Τα τρία πρώτα γράμματα του ονόματος σας αρκούν',
		)); ?>
		<?php echo $form->textFieldRow($model,'surnamePrefix', array(
			'hint'=>'Σημείωση : Τα τρία πρώτα γράμματα του επωνύμου σας αρκούν',
		)); ?>
	</div>

</div>






	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Ταυτοποίηση',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

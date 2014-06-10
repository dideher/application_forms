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

	<p class="note">Τα πεδία μαρκαρισμένα με <span class="required">*</span> είναι υποχρεωτικά.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'oik_katastasi'); ?>
		<!--
		<?php echo $form->textField($model,'oik_katastasi',array('size'=>60,'maxlength'=>60)); ?>
		-->
		<?php echo $form->dropdownList($model,'oik_katastasi',array(
			'ΑΓΓΑΜΟΣ'=>'Άγγαμος',
			'ΕΓΓΑΜΟΣ'=>'Έγγαμος',
			'ΣΕ ΧΗΡΕΙΑ'=>'Σε χηρεία',
			'ΣΕ ΧΗΡΕΙΑ ΜΕ ΑΝΗΛΙΚΟ'=>'Σε χηρεία με ανήλικο',
			'ΜΟΝΟΓΟΝΕΪΚΗ'=>'Μονογονεϊκη',
		)); ?>
		<?php echo $form->error($model,'oik_katastasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paidia'); ?>
		<?php echo $form->numberField($model,'paidia', array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'paidia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eksosomatiki'); ?>
		<?php echo $form->checkBox($model,'eksosomatiki'); ?>
		<?php echo $form->error($model,'eksosomatiki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_idios'); ?>
		<!--
		<?php echo $form->textField($model,'ygeia_idios',array('size'=>15,'maxlength'=>15)); ?>
		-->
		<?php echo $form->dropdownList($model,'ygeia_idios',array(
			'' => 'Επιλέξτε ποσοστό',
			'50-66%'=>'50% με 66%',
			'67-79%'=>'67% με 79%',
			'80% κ άνω'=>'80% και άνω',
		)); ?>
		<?php echo $form->error($model,'ygeia_idios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_syzigos'); ?>
		<!-- <?php echo $form->textField($model,'ygeia_syzigos',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'ygeia_syzigos',array(
			'' => 'Επιλέξτε ποσοστό',
			'50-66%'=>'50% με 66%',
			'67-79%'=>'67% με 79%',
			'80% κ άνω'=>'80% και άνω',
		)); ?>
		<?php echo $form->error($model,'ygeia_syzigos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_paidi'); ?>
		<!-- <?php echo $form->textField($model,'ygeia_paidi',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'ygeia_paidi',array(
			'' => 'Επιλέξτε ποσοστό',
			'50-66%'=>'50% με 66%',
			'67-79%'=>'67% με 79%',
			'80% κ άνω'=>'80% και άνω',
		)); ?>
		<?php echo $form->error($model,'ygeia_paidi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ygeia_adelfos'); ?>
		<!-- <?php echo $form->textField($model,'ygeia_adelfos',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'ygeia_adelfos',array(
			'' => 'Επιλέξτε ποσοστό',
			'67% κ άνω'=>'67% και άνω',
		)); ?>
		<?php echo $form->error($model,'ygeia_adelfos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entopiotita'); ?>
		<!-- <?php echo $form->textField($model,'entopiotita',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'entopiotita',array(
			'' => 'Επιλέξτε Δήμο',
			'ΗΡΑΚΛΕΙΟΥ'=>'Ηρακλείου',
			'ΜΑΛΕΒΙΖΙΟΥ'=>'Μαλεβιζίου',
			'ΧΕΡΣΟΝΗΣΟΥ'=>'Χερσονήσου',
			'ΑΡΧΑΝΩΝ-ΑΣ.'=>'Αρχανών - Αστερουσίων',
			'ΜΙΝΩΑ-ΠΕΔ.'=>'Μίνωα - Πεδιάδος',
			'ΦΑΙΣΤΟΥ.'=>'Φαιστού',
			'ΓΟΡΤΥΝΑΣ'=>'Γόρτυνας',
			'ΒΙΑΝΝΟΥ'=>'Βιάννου',
		)); ?>

		<?php echo $form->error($model,'entopiotita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'synyphrethsh'); ?>
		<!-- <?php echo $form->textField($model,'synyphrethsh',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'synyphrethsh',array(
			'' => 'Επιλέξτε Δήμο',
			'ΗΡΑΚΛΕΙΟΥ'=>'Ηρακλείου',
			'ΜΑΛΕΒΙΖΙΟΥ'=>'Μαλεβιζίου',
			'ΧΕΡΣΟΝΗΣΟΥ'=>'Χερσονήσου',
			'ΑΡΧΑΝΩΝ-ΑΣ.'=>'Αρχανών - Αστερουσίων',
			'ΜΙΝΩΑ-ΠΕΔ.'=>'Μίνωα - Πεδιάδος',
			'ΦΑΙΣΤΟΥ.'=>'Φαιστού',
			'ΓΟΡΤΥΝΑΣ'=>'Γόρτυνας',
			'ΒΙΑΝΝΟΥ'=>'Βιάννου',
		)); ?>
		<?php echo $form->error($model,'synyphrethsh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spoudes'); ?>
		<!-- <?php echo $form->textField($model,'spoudes',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'spoudes',array(
			'' => 'Επιλέξτε Δήμο',
			'ΗΡΑΚΛΕΙΟΥ'=>'Ηρακλείου',
		)); ?>

		<?php echo $form->error($model,'spoudes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goneis_dhmos'); ?>
		<!-- <?php echo $form->textField($model,'goneis_dhmos',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'synyphrethsh',array(
			'' => 'Επιλέξτε Δήμο',
			'ΗΡΑΚΛΕΙΟΥ'=>'Ηρακλείου',
			'ΜΑΛΕΒΙΖΙΟΥ'=>'Μαλεβιζίου',
			'ΧΕΡΣΟΝΗΣΟΥ'=>'Χερσονήσου',
			'ΑΡΧΑΝΩΝ-ΑΣ.'=>'Αρχανών - Αστερουσίων',
			'ΜΙΝΩΑ-ΠΕΔ.'=>'Μίνωα - Πεδιάδος',
			'ΦΑΙΣΤΟΥ.'=>'Φαιστού',
			'ΓΟΡΤΥΝΑΣ'=>'Γόρτυνας',
			'ΒΙΑΝΝΟΥ'=>'Βιάννου',
		)); ?>
		<?php echo $form->error($model,'goneis_dhmos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goneis_ygeia'); ?>
		<!-- <?php echo $form->textField($model,'goneis_ygeia',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'goneis_ygeia',array(
			'' => 'Επιλέξτε ποσοστό',
			'50-66%'=>'50% με 66%',
			'67% κ άνω'=>'67% και άνω',
		)); ?>
		<?php echo $form->error($model,'goneis_ygeia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'protaireotita'); ?>
		<!-- <?php echo $form->textField($model,'protaireotita',array('size'=>30,'maxlength'=>30)); ?> -->
		<?php echo $form->dropdownList($model,'protaireotita',array(
			'' => 'Επιλέξτε Περίπτωση',
			'ΕΙΔΙΚΗ ΚΑΤΗΓ. ΜΕΤΑΘΕΣΗΣ'=>'Ειδική Κατηγορία Μετάθεσης',
			'ΣΥΖΥΓΟΣ ΕΝΣΤΟΛΟΥ'=>'Σύζυγος Ενστόλου',
			'ΣΥΖΥΓΟΣ ΔΙΚΑΣΤΙΚΟΥ'=>'Σύζυγος Δικαστικού',
			'ΕΚΛΕΓΜΕΝΟΣ ΚΑΛΛΙΚΡΑΤΗΣ'=>'Εκλεγμένος βάση Καλλικράτη',
		)); ?>
		<?php echo $form->error($model,'protaireotita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parathrhseis'); ?>
		<?php echo $form->textArea($model,'parathrhseis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'parathrhseis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Καταχώρηση' : 'Αποθήκευση'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

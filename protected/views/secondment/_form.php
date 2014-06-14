<?php
/* @var $this SecondmentController */
/* @var $model Secondment */
/* @var $form CActiveForm */
?>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'secondment-form',
    'type'=>'vertical',
		'htmlOptions'=>array('class'=>'well')
)); ?>
<div class="row-fluid">
<fieldset>

  <legend>Ατομικά Στοιχεία<legend>

  <!-- first column -->
  <div class="span4">
    <?php echo $form->uneditableRow($model->employee,'am'); ?>
    <?php echo $form->uneditableRow($model->employee,'father_name'); ?>

  </div>

  <!-- second column -->
  <div class="span4">
    <?php echo $form->uneditableRow($model->employee,'name'); ?>
    <?php echo $form->uneditableRow($model->employee,'specialization'); ?>
  </div>

  <!-- third column -->
  <div class="span4">
    <?php echo $form->uneditableRow($model->employee,'surname'); ?>
    <?php echo $form->uneditableRow($model->employee,'school_name'); ?>
  </div>

  <div class="span4">
  </div>



	<legend>Οικογενειακή Κατάσταση</legend>
		<?php echo $form->dropdownListRow($model,'oik_katastasi',array(
			'ΑΓΓΑΜΟΣ'=>'Άγγαμος',
			'ΕΓΓΑΜΟΣ'=>'Έγγαμος',
			'ΣΕ ΧΗΡΕΙΑ'=>'Σε χηρεία',
			'ΣΕ ΧΗΡΕΙΑ ΜΕ ΑΝΗΛΙΚΟ'=>'Σε χηρεία με ανήλικο',
			'ΜΟΝΟΓΟΝΕΪΚΗ'=>'Μονογονεϊκη'), array('hint'=>'Δηλώστε την οικογενειακή σας κατάσταση')); ?>
		<?php echo $form->error($model,'oik_katastasi'); ?>

  	<?php echo $form->textFieldRow($model,'paidia', array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'paidia'); ?>

		<legend>Λόγοι Υγείας</legend>

    <div class="span6">

		<?php echo $form->checkBoxRow($model,'eksosomatiki'); ?>

		<?php echo $form->dropdownListRow($model,'ygeia_idios',array(
				'' => 'Επιλέξτε ποσοστό',
				'50-66%'=>'50% με 66%',
				'67-79%'=>'67% με 79%',
				'80% κ άνω'=>'80% και άνω',
			)); ?>
			<?php echo $form->error($model,'ygeia_idios'); ?>
    </div>

    <div class="span6">

			<?php echo $form->dropdownListRow($model,'ygeia_syzigos',array(
				'' => 'Επιλέξτε ποσοστό',
				'50-66%'=>'50% με 66%',
				'67-79%'=>'67% με 79%',
				'80% κ άνω'=>'80% και άνω',
			)); ?>
			<?php echo $form->error($model,'ygeia_syzigos'); ?>

			<?php echo $form->dropdownListRow($model,'ygeia_paidi',array(
				'' => 'Επιλέξτε ποσοστό',
				'50-66%'=>'50% με 66%',
				'67-79%'=>'67% με 79%',
				'80% κ άνω'=>'80% και άνω',
			)); ?>
			<?php echo $form->error($model,'ygeia_paidi'); ?>

			<?php echo $form->labelEx($model,'ygeia_adelfos'); ?>
			<!-- <?php echo $form->textField($model,'ygeia_adelfos',array('size'=>15,'maxlength'=>15)); ?> -->
			<?php echo $form->dropdownList($model,'ygeia_adelfos',array(
				'' => 'Επιλέξτε ποσοστό',
				'67% κ άνω'=>'67% και άνω',
			)); ?>
			<?php echo $form->error($model,'ygeia_adelfos'); ?>

    </div>

	<legend>Εντοπιότητα</legend>

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

	<legend>Συνηπηρέτηση</legend>

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



	<legend>Σπούδες</legend>

		<?php echo $form->labelEx($model,'spoudes'); ?>
		<!-- <?php echo $form->textField($model,'spoudes',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'spoudes',array(
			'' => 'Επιλέξτε Δήμο',
			'ΗΡΑΚΛΕΙΟΥ'=>'Ηρακλείου',
		)); ?>

		<?php echo $form->error($model,'spoudes'); ?>

	<legend>Λόγοι Υγείας Γονέων</legend>

		<?php echo $form->labelEx($model,'goneis_ygeia'); ?>
		<!-- <?php echo $form->textField($model,'goneis_ygeia',array('size'=>15,'maxlength'=>15)); ?> -->
		<?php echo $form->dropdownList($model,'goneis_ygeia',array(
			'' => 'Επιλέξτε ποσοστό',
			'50-66%'=>'50% με 66%',
			'67% κ άνω'=>'67% και άνω',
		)); ?>
		<?php echo $form->error($model,'goneis_ygeia'); ?>



	<legend>Λοιπά</legend>

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

	<?php echo $form->labelEx($model,'parathrhseis'); ?>
	<?php echo $form->textArea($model,'parathrhseis',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo $form->error($model,'parathrhseis'); ?>

</fieldset>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=> $model->isNewRecord ? 'Καταχώρηση' : 'Αποθήκευση')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>



<?php $this->endWidget(); ?>




	<p class="note">Τα πεδία μαρκαρισμένα με <span class="required">*</span> είναι υποχρεωτικά.</p>

	<?php echo $form->errorSummary($model); ?>

<?php
/* @var $this SecondmentController */
/* @var $data Secondment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oik_katastasi')); ?>:</b>
	<?php echo CHtml::encode($data->oik_katastasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paidia')); ?>:</b>
	<?php echo CHtml::encode($data->paidia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eksosomatiki')); ?>:</b>
	<?php echo CHtml::encode($data->eksosomatiki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ygeia_idios')); ?>:</b>
	<?php echo CHtml::encode($data->ygeia_idios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ygeia_syzigos')); ?>:</b>
	<?php echo CHtml::encode($data->ygeia_syzigos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ygeia_paidi')); ?>:</b>
	<?php echo CHtml::encode($data->ygeia_paidi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ygeia_adelfos')); ?>:</b>
	<?php echo CHtml::encode($data->ygeia_adelfos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entopiotita')); ?>:</b>
	<?php echo CHtml::encode($data->entopiotita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('synyphrethsh')); ?>:</b>
	<?php echo CHtml::encode($data->synyphrethsh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spoudes')); ?>:</b>
	<?php echo CHtml::encode($data->spoudes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goneis_dhmos')); ?>:</b>
	<?php echo CHtml::encode($data->goneis_dhmos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goneis_ygeia')); ?>:</b>
	<?php echo CHtml::encode($data->goneis_ygeia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('protaireotita')); ?>:</b>
	<?php echo CHtml::encode($data->protaireotita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parathrhseis')); ?>:</b>
	<?php echo CHtml::encode($data->parathrhseis); ?>
	<br />

	*/ ?>

</div>
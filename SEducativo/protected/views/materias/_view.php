<?php
/* @var $this MateriasController */
/* @var $data Materias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Materia')); ?>:</b>
	<?php echo CHtml::encode($data->Materia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b>
	<?php echo CHtml::encode($data->Codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unidad_Credito')); ?>:</b>
	<?php echo CHtml::encode($data->Unidad_Credito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Requisito')); ?>:</b>
	<?php echo CHtml::encode($data->Requisito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pensum')); ?>:</b>
	<?php echo CHtml::encode($data->Pensum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->Semestre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Num_Materia')); ?>:</b>
	<?php echo CHtml::encode($data->Num_Materia); ?>
	<br />

	*/ ?>

</div>
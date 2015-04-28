<?php
/* @var $this AlumnosController */
/* @var $data Alumnos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre2')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido2')); ?>:</b>
	<?php echo CHtml::encode($data->Apellido2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dirreccion')); ?>:</b>
	<?php echo CHtml::encode($data->Dirreccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar_Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->Lugar_Nacimiento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Nacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->Nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Carrera')); ?>:</b>
	<?php echo CHtml::encode($data->Carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edad')); ?>:</b>
	<?php echo CHtml::encode($data->Edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->Sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Semestre')); ?>:</b>
	<?php echo CHtml::encode($data->Semestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Expediente')); ?>:</b>
	<?php echo CHtml::encode($data->Expediente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	*/ ?>

</div>
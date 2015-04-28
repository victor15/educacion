<?php
/* @var $this ProfesoresController */
/* @var $data Profesores */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('RIF')); ?>:</b>
	<?php echo CHtml::encode($data->RIF); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edad')); ?>:</b>
	<?php echo CHtml::encode($data->Edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sexo')); ?>:</b>
	<?php echo CHtml::encode($data->Sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->Nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo_Postal')); ?>:</b>
	<?php echo CHtml::encode($data->Codigo_Postal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Celular')); ?>:</b>
	<?php echo CHtml::encode($data->Celular); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Edo_Civil')); ?>:</b>
	<?php echo CHtml::encode($data->Edo_Civil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Habilidad_Motriz')); ?>:</b>
	<?php echo CHtml::encode($data->Habilidad_Motriz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SSO')); ?>:</b>
	<?php echo CHtml::encode($data->SSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nro_Cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->Nro_Cuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Banco')); ?>:</b>
	<?php echo CHtml::encode($data->Banco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Cuenta')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Cuenta); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this InscripcionController */
/* @var $data Inscripcion */
?>
<?php
$us=$data->Usuario;
$usu2=yii::app()->user->name;
?>
<?php
if ($us == $usu2) {
	?>
<div class="view">
    <prev></prev>
	<div class="row buttons">
		<a href="http://localhost/SEducativo/inscripcion/index?pdf=%22">Imprimir_PDF</a>
	</div>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Inscripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Inscripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Periodo_Academico')); ?>:</b>
	<?php echo CHtml::encode($data->Periodo_Academico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos_Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Apellidos_Nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lugar_Nac')); ?>:</b>
	<?php echo CHtml::encode($data->Lugar_Nac); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Nac')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Nac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Alumno')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Alumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N_Expediente')); ?>:</b>
	<?php echo CHtml::encode($data->N_Expediente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cedula')); ?>:</b>
	<?php echo CHtml::encode($data->Cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('N_Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->N_Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->Correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Geometria_Descriptiva')); ?>:</b>
	<?php echo CHtml::encode($data->Geometria_Descriptiva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Geometria')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Geometria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Geometria')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Geometria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Dibujo_General')); ?>:</b>
	<?php echo CHtml::encode($data->Dibujo_General); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Dibujo')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Dibujo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Dibujo')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Dibujo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ingles_Tecnico')); ?>:</b>
	<?php echo CHtml::encode($data->Ingles_Tecnico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Ingles')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Ingles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Ingles')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Ingles); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Lenguaje_y_Comunicacion')); ?>:</b>
	<?php echo CHtml::encode($data->Lenguaje_y_Comunicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Lenguaje')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Lenguaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Lenguaje')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Lenguaje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Matematica_I')); ?>:</b>
	<?php echo CHtml::encode($data->Matematica_I); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Matematica')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Matematica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Matematica')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Matematica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Met_de_la_Investigacion')); ?>:</b>
	<?php echo CHtml::encode($data->Met_de_la_Investigacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Metodologia')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Metodologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Metodologia')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Metodologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Intr_a_la_Informatica')); ?>:</b>
	<?php echo CHtml::encode($data->Intr_a_la_Informatica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Turno_Introduccion')); ?>:</b>
	<?php echo CHtml::encode($data->Turno_Introduccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Seccion_Introduccion')); ?>:</b>
	<?php echo CHtml::encode($data->Seccion_Introduccion);}?> 
	<br />

</div>

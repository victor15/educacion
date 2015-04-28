<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Usuario'); ?>
		<?php echo $form->textField($model,'Usuario',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_Inscripcion'); ?>
		<?php echo $form->textField($model,'Tipo_Inscripcion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Periodo_Academico'); ?>
		<?php echo $form->textField($model,'Periodo_Academico',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellidos_Nombres'); ?>
		<?php echo $form->textField($model,'Apellidos_Nombres',array('size'=>60,'maxlength'=>70)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lugar_Nac'); ?>
		<?php echo $form->textField($model,'Lugar_Nac',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Carrera'); ?>
		<?php echo $form->textField($model,'Carrera',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sexo'); ?>
		<?php echo $form->textField($model,'Sexo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Nac'); ?>
		<?php echo $form->textField($model,'Fecha_Nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_Alumno'); ?>
		<?php echo $form->textField($model,'Tipo_Alumno',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N_Expediente'); ?>
		<?php echo $form->textField($model,'N_Expediente',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'N_Telefono'); ?>
		<?php echo $form->textField($model,'N_Telefono',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textArea($model,'Correo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Geometria_Descriptiva'); ?>
		<?php echo $form->textField($model,'Geometria_Descriptiva',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Geometria'); ?>
		<?php echo $form->textField($model,'Turno_Geometria',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Geometria'); ?>
		<?php echo $form->textField($model,'Seccion_Geometria',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Dibujo_General'); ?>
		<?php echo $form->textField($model,'Dibujo_General',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Dibujo'); ?>
		<?php echo $form->textField($model,'Turno_Dibujo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Dibujo'); ?>
		<?php echo $form->textField($model,'Seccion_Dibujo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ingles_Tecnico'); ?>
		<?php echo $form->textField($model,'Ingles_Tecnico',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Ingles'); ?>
		<?php echo $form->textField($model,'Turno_Ingles',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Ingles'); ?>
		<?php echo $form->textField($model,'Seccion_Ingles',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lenguaje_y_Comunicacion'); ?>
		<?php echo $form->textField($model,'Lenguaje_y_Comunicacion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Lenguaje'); ?>
		<?php echo $form->textField($model,'Turno_Lenguaje',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Lenguaje'); ?>
		<?php echo $form->textField($model,'Seccion_Lenguaje',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Matematica_I'); ?>
		<?php echo $form->textField($model,'Matematica_I',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Matematica'); ?>
		<?php echo $form->textField($model,'Turno_Matematica',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Matematica'); ?>
		<?php echo $form->textField($model,'Seccion_Matematica',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Met_de_la_Investigacion'); ?>
		<?php echo $form->textField($model,'Met_de_la_Investigacion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Metodologia'); ?>
		<?php echo $form->textField($model,'Turno_Metodologia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Metodologia'); ?>
		<?php echo $form->textField($model,'Seccion_Metodologia',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Intr_a_la_Informatica'); ?>
		<?php echo $form->textField($model,'Intr_a_la_Informatica',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Turno_Introduccion'); ?>
		<?php echo $form->textField($model,'Turno_Introduccion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Seccion_Introduccion'); ?>
		<?php echo $form->textField($model,'Seccion_Introduccion',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
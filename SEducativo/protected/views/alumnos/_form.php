<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumnos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre2'); ?>
		<?php echo $form->textField($model,'Nombre2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nombre2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido2'); ?>
		<?php echo $form->textField($model,'Apellido2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Apellido2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Dirreccion'); ?>
		<?php echo $form->textArea($model,'Dirreccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Dirreccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lugar_Nacimiento'); ?>
		<?php echo $form->textArea($model,'Lugar_Nacimiento',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Lugar_Nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_Nacimiento'); ?>
		<?php echo $form->error($model,'Fecha_Nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Carrera'); ?>
		<?php echo $form->textField($model,'Carrera',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edad'); ?>
		<?php echo $form->textField($model,'Edad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php echo $form->textField($model,'Sexo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Semestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Expediente'); ?>
		<?php echo $form->textField($model,'Expediente',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Expediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
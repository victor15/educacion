<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesores-form',
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
		<?php echo $form->textField($model,'Lugar_Nacimiento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Lugar_Nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Nacimiento'); ?>
		<?php echo $form->textField($model,'Fecha_Nacimiento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Fecha_Nacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RIF'); ?>
		<?php echo $form->textField($model,'RIF',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'RIF'); ?>
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
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo_Postal'); ?>
		<?php echo $form->textField($model,'Codigo_Postal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Codigo_Postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Celular'); ?>
		<?php echo $form->textField($model,'Celular',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Celular'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'Edo_Civil'); ?>
		<?php echo $form->textField($model,'Edo_Civil',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Edo_Civil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Habilidad_Motriz'); ?>
		<?php echo $form->textField($model,'Habilidad_Motriz',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Habilidad_Motriz'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SSO'); ?>
		<?php echo $form->textField($model,'SSO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nro_Cuenta'); ?>
		<?php echo $form->textField($model,'Nro_Cuenta',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nro_Cuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Banco'); ?>
		<?php echo $form->textField($model,'Banco',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Banco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Cuenta'); ?>
		<?php echo $form->textField($model,'Tipo_Cuenta',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Tipo_Cuenta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
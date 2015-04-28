<?php
/* @var $this MateriasController */
/* @var $model Materias */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materias-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Materia'); ?>
		<?php echo $form->textField($model,'Materia',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Materia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo'); ?>
		<?php echo $form->textField($model,'Codigo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Unidad_Credito'); ?>
		<?php echo $form->textField($model,'Unidad_Credito',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Unidad_Credito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Requisito'); ?>
		<?php echo $form->textField($model,'Requisito',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Requisito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pensum'); ?>
		<?php echo $form->textField($model,'Pensum',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Pensum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre'); ?>
		<?php echo $form->textField($model,'Semestre',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Semestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Num_Materia'); ?>
		<?php echo $form->textField($model,'Num_Materia',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Num_Materia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
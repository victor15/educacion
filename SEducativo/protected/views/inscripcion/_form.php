<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inscripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php 
        $usu=yii::app()->user->name;
		echo $form->textField($model,'Usuario',array('size'=>40,'maxlength'=>40,'value'=>$usu,'readonly'=>'readonly')); ?>
		<?php echo $form->error($model,'Usuario'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Inscripcion'); ?>
		<?php $accountStatus = array('Inscripcion'=>'Inscripcion', 'Reinscripcion'=>'Reinscripcion', 'Translado'=>'Translado'); 
   echo $form->radioButtonList($model, 'Tipo_Inscripcion', $accountStatus,
   array('separator'=>' ',
   'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Tipo_Inscripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Periodo_Academico'); ?>
		<?php echo $form->textField($model,'Periodo_Academico',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Periodo_Academico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellidos_Nombres'); ?>
		<?php echo $form->textField($model,'Apellidos_Nombres',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'Apellidos_Nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textArea($model,'Direccion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lugar_Nac'); ?>
		<?php echo $form->textField($model,'Lugar_Nac',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'Lugar_Nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nacionalidad'); ?>
		<?php echo $form->textField($model,'Nacionalidad',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Carrera'); ?>
		<?php echo $form->dropDownList($model,'Carrera',array(" "=>" ", "Computacion"=>"Computacion")); ?>
		<?php echo $form->error($model,'Carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Edad'); ?>
		<?php echo $form->dropDownList($model,'Edad',array(" "=>" ", "15"=>" 15", "16"=>" 16",  "17"=>" 17", "18"=>" 18", "19"=>" 19",  "20"=>" 20", "21"=>" 21", "22"=>" 22",  "23"=>" 23", "24"=>" 24", "25"=>" 25",  "26"=>" 26", "27"=>" 27", "28"=>" 28",  "29"=>" 29", "30"=>" 30", "31"=>" 31",  "32"=>" 32", "33"=>" 33", "34"=>" 34",  "35"=>" 35", "36"=>" 36", "37"=>" 37",  "38"=>" 38", "39"=>" 39", "40"=>" 40",  "41"=>" 41", "42"=>" 42", "43"=>" 43",  "44"=>" 44", "45"=>" 45", "46"=>" 46",  "47"=>" 47", "48"=>" 48", "49"=>" 49",  "50"=>" 50")); ?>
		<?php echo $form->error($model,'Edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sexo'); ?>
		<?php $accountStatus = array('Masculino'=>'Masculino', 'Femenino'=>'Femenino'); 
   echo $form->radioButtonList($model, 'Sexo', $accountStatus,
   array('separator'=>' ',
   'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Semestre'); ?>
		<?php $accountStatus = array(' 1'=>' 1'); 
   echo $form->radioButtonList($model, 'Semestre', $accountStatus,
   array('separator'=>' ',
   'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Semestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Nac'); ?>
		<?php $this->widget("zii.widgets.jui.CJuiDatePicker",array(	
		"attribute"=>"Fecha_Nac",
		"model"=>$model,	
		"language"=>"es",
		"options"=>array(
        "dateFormat"=>"yy-mm-dd",
        'showButtonPanel'=>true,
        'changeYear'=>true,
        'changeYear'=>true,
        'yearRange'=>'-80:-10',
        'minDate'=>'-80Y',
        'maxDate'=>'-10Y',
			)

));
 
 ?>

		<?php echo $form->error($model,'Fecha_Nac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_Alumno'); ?>
		<?php $accountStatus = array('Regular'=>'Regular', 'Condicional'=>'Condicional'); 
   echo $form->radioButtonList($model, 'Tipo_Alumno', $accountStatus,
   array('separator'=>' ',
   'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Tipo_Alumno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'N_Expediente'); ?>
		<?php echo $form->textField($model,'N_Expediente',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'N_Expediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'Cedula',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'N_Telefono'); ?>
		<?php echo $form->textField($model,'N_Telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'N_Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Correo'); ?>
		<?php echo $form->textArea($model,'Correo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Correo'); ?>
	</div>
<pre></pre>
<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Inscribir Materias</FONT>
 </center>
 <pre></pre>
<p class="note">Escoja una de las Opciones para formalizar la inscripcion de las materias !!</p>

	<div class="row">

	   <h3>
		<?php echo $form->labelEx($model,'Geometria_Descriptiva'); ?></h3><pre></pre>		
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Geometria_Descriptiva', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Geometria_Descriptiva'); ?>
	</div>
	
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Geometria'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Geometria', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Geometria'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Geometria'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Geometria', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Geometria'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Dibujo_General'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Dibujo_General', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Dibujo_General'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Dibujo'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Dibujo', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Dibujo'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Dibujo'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Dibujo', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Dibujo'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Ingles_Tecnico'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Ingles_Tecnico', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Ingles_Tecnico'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Ingles'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Ingles', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Ingles'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Ingles'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Ingles', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Ingles'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Lenguaje_y_Comunicacion'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Lenguaje_y_Comunicacion', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Lenguaje_y_Comunicacion'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Lenguaje'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Lenguaje', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Lenguaje'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Lenguaje'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Lenguaje', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Lenguaje'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Matematica_I'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Matematica_I', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Matematica_I'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Matematica'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Matematica', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Matematica'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Matematica'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Matematica', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Matematica'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Met_de_la_Investigacion'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Met_de_la_Investigacion', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Met_de_la_Investigacion'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Metodologia'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Metodologia', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Metodologia'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Metodologia'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Metodologia', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Metodologia'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Intr_a_la_Informatica'); ?></h3><pre></pre>
		<?php $accountStatus = array('SI'=>'SI', 'NO'=>'NO'); 
        echo $form->radioButtonList($model, 'Intr_a_la_Informatica', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Intr_a_la_Informatica'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Turno_Introduccion'); ?></h3><pre></pre>
		<?php $accountStatus = array('Diurno'=>'Diurno', 'Nocturno'=>'Nocturno', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Turno_Introduccion', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Turno_Introduccion'); ?>
	</div>
<pre></pre>
	<div class="row">
	<h3>
		<?php echo $form->labelEx($model,'Seccion_Introduccion'); ?></h3><pre></pre>
		<?php $accountStatus = array(' A '=>' A ', 'Ninguno'=>'Ninguno'); 
        echo $form->radioButtonList($model, 'Seccion_Introduccion', $accountStatus,
        array('separator'=>' <---> ',
       'labelOptions'=>array('style'=>'display:inline'),		
));
 
 ?>
		<?php echo $form->error($model,'Seccion_Introduccion'); ?>
	</div>
	<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 -------------------------------------------------------------------------------------</FONT>
<pre></pre>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
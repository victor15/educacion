<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */

$this->breadcrumbs=array(
	'Inscripcion'=>array('index'),
	$model->Usuario,
);
/*
$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'Update Inscripcion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inscripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);*/
?>
<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Inscripcion <?php echo $model->Usuario; ?></FONT>
 </center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Usuario',
		'Tipo_Inscripcion',
		'Periodo_Academico',
		'Apellidos_Nombres',
		'Direccion',
		'Lugar_Nac',
		'Nacionalidad',
		'Carrera',
		'Edad',
		'Sexo',
		'Semestre',
		'Fecha_Nac',
		'Tipo_Alumno',
		'N_Expediente',
		'Cedula',
		'N_Telefono',
		'Correo',
		'id',
		'Geometria_Descriptiva',
		'Turno_Geometria',
		'Seccion_Geometria',
		'Dibujo_General',
		'Turno_Dibujo',
		'Seccion_Dibujo',
		'Ingles_Tecnico',
		'Turno_Ingles',
		'Seccion_Ingles',
		'Lenguaje_y_Comunicacion',
		'Turno_Lenguaje',
		'Seccion_Lenguaje',
		'Matematica_I',
		'Turno_Matematica',
		'Seccion_Matematica',
		'Met_de_la_Investigacion',
		'Turno_Metodologia',
		'Seccion_Metodologia',
		'Intr_a_la_Informatica',
		'Turno_Introduccion',
		'Seccion_Introduccion',
	),
)); ?>
<div class="row buttons">
		<a href="http://localhost/SEducativo/inscripcion/index?pdf=%22">Imprimir PDF</a>
	</div>

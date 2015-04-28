<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */

$this->breadcrumbs=array(
	'Inscripcion'=>array('index'),
	'Administrar',
);
/*
$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inscripcion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1> Administrar Inscripcion</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inscripcion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Usuario',
		'Tipo_Inscripcion',
		'Periodo_Academico',
		'Apellidos_Nombres',
		'Direccion',
		'Lugar_Nac',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

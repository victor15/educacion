<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnoses'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Update Alumnos', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>View Alumnos #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombre',
		'Nombre2',
		'Apellido',
		'Apellido2',
		'Dirreccion',
		'Lugar_Nacimiento',
		'Fecha_Nacimiento',
		'Nacionalidad',
		'Carrera',
		'Edad',
		'Sexo',
		'Semestre',
		'Expediente',
		'Cedula',
		'Telefono',
		'Correo',
		'Id',
	),
)); ?>

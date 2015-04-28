<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Create Profesores', 'url'=>array('create')),
	array('label'=>'Update Profesores', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Profesores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>View Profesores #<?php echo $model->Id; ?></h1>

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
		'RIF',
		'Edad',
		'Sexo',
		'Nacionalidad',
		'Codigo_Postal',
		'Celular',
		'Cedula',
		'Telefono',
		'Correo',
		'Edo_Civil',
		'Habilidad_Motriz',
		'SSO',
		'Nro_Cuenta',
		'Banco',
		'Tipo_Cuenta',
		'Id',
	),
)); ?>

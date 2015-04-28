<?php
/* @var $this MateriasController */
/* @var $model Materias */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->Id,
);
/*
$this->menu=array(
	array('label'=>'List Materias', 'url'=>array('index')),
	array('label'=>'Create Materias', 'url'=>array('create')),
	array('label'=>'Update Materias', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Materias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Materias', 'url'=>array('admin')),
);*/
?>

<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Materias</FONT>
 </center>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Materia',
		'Codigo',
		'Unidad_Credito',
		'Requisito',		
		'Pensum',
		'Semestre',
		'Num_Materia',
	),
)); ?>

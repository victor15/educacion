<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>Crear Profesores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
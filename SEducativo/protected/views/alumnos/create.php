<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Crear Alumnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
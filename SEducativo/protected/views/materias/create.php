<?php
/* @var $this MateriasController */
/* @var $model Materias */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'List Materias', 'url'=>array('index')),
	array('label'=>'Manage Materias', 'url'=>array('admin')),
);*/
?>

<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Crear Materias</FONT>
 </center>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>
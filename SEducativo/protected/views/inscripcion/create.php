<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */

$this->breadcrumbs=array(
	'Inscripcion'=>array('index'),
	'Crear',
);
/*
$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);*/
?>
<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Crear Inscripcion</FONT>
 </center>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
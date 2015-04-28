<?php
/* @var $this AlumnosController */
/* @var $model Alumnos */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'View Alumnos', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Alumnos <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
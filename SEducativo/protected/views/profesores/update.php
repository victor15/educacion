<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Create Profesores', 'url'=>array('create')),
	array('label'=>'View Profesores', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Profesores <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
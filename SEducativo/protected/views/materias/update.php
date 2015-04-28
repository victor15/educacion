<?php
/* @var $this MateriasController */
/* @var $model Materias */

$this->breadcrumbs=array(
	'Materias'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'List Materias', 'url'=>array('index')),
	array('label'=>'Create Materias', 'url'=>array('create')),
	array('label'=>'View Materias', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Materias', 'url'=>array('admin')),
);
?>

<h1>Actualizar Materias <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
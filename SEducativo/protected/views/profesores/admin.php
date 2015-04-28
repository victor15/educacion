<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Create Profesores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Profesores</h1>

<p>
Podras ingresar operadores de comparacion opcional (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al comienzo de cada busqueda.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Nombre',
		'Nombre2',
		'Apellido',
		'Apellido2',
		'Dirreccion',
		'Lugar_Nacimiento',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

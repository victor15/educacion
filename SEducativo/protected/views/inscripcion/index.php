<?php
/* @var $this InscripcionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inscripcion',
);
/*
$this->menu=array(
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);*/
?>
<?php
$this->widget('zii.widgets.CMenu', array(
	'items'=>array(
		array(
			'label'=>CHtml::image(Yii::app()->request->baseUrl."/Libraries\Pictures/foto1.jpg").' Agregar',
			'url'=>array('create'),
		),
	),
	'encodeLabel' => false,
));
?>
<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Inscripcion</FONT>
</center>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

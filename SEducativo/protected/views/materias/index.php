<?php
/* @var $this MateriasController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = "Materias";
$this->breadcrumbs=array(
	'Materias',
);
/*
$this->menu=array(
	array('label'=>'Create Materias', 'url'=>array('create')),
	array('label'=>'Manage Materias', 'url'=>array('admin')),
);*/
?>

<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Materias</FONT>
 </center>
 <pre>
 </pre>
<center>
<FONT FACE="impact" SIZE=6 COLOR="sky blue">
 Primer Semestre</FONT>
 </center>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

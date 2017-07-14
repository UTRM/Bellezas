<?php
/* @var $this UbicacionesController */
/* @var $model Ubicaciones */

$this->breadcrumbs=array(
	'Ubicaciones'=>array('index'),
	$model->ID_UBICACION,
);

$this->menu=array(
	array('label'=>'List Ubicaciones', 'url'=>array('index')),
	array('label'=>'Create Ubicaciones', 'url'=>array('create')),
	array('label'=>'Update Ubicaciones', 'url'=>array('update', 'id'=>$model->ID_UBICACION)),
	array('label'=>'Delete Ubicaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_UBICACION),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ubicaciones', 'url'=>array('admin')),
);
?>

<h1>View Ubicaciones #<?php echo $model->ID_UBICACION; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_UBICACION',
		'ID_LUGAR',
		'LONGITUD',
		'LATITUD',
	),
)); ?>

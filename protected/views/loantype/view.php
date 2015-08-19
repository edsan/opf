<?php
$this->breadcrumbs=array(
	'Loantypes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Loantype', 'url'=>array('index')),
	array('label'=>'Create Loantype', 'url'=>array('create')),
	array('label'=>'Update Loantype', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Loantype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Loantype', 'url'=>array('admin')),
);
?>

<h1>View Loantype #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
	),
)); ?>

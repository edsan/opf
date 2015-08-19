<?php
$this->breadcrumbs=array(
	'Loantypes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Loantype', 'url'=>array('index')),
	array('label'=>'Create Loantype', 'url'=>array('create')),
	array('label'=>'View Loantype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Loantype', 'url'=>array('admin')),
);
?>

<h1>Update Loantype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
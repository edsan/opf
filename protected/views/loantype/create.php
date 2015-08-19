<?php
$this->breadcrumbs=array(
	'Loantypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Loantype', 'url'=>array('index')),
	array('label'=>'Manage Loantype', 'url'=>array('admin')),
);
?>

<h1>Create Loantype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
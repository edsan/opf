<?php
$this->breadcrumbs=array(
	'Loantypes',
);

$this->menu=array(
	array('label'=>'Create Loantype', 'url'=>array('create')),
	array('label'=>'Manage Loantype', 'url'=>array('admin')),
);
?>

<h1>Loantypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

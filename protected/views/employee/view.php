<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->employee_id,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->employee_id)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->employee_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->employee_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'employee_id',
		'last_name',
		'first_name',
		'middle_name',
		'nickname',
		'sex',
		'birthdate',
		'age',
		'birthplace',
		'nationality',
		'religion',
		'height',
		'weight',
		'bloodtype',
		'curr_tel_no1',
		'curr_tel_no2',
		'curr_address',
		'city_code',
		'zip_code',
		'prov_address',
		'prov_tel_no1',
		'wedding_aniv',
		'civil_status',
		'philhealth_no',
		'sss_no',
		'tin_no',
		'pag_ibig',
		'bp_no',
		'emp_pic_dir',
		'emp_pic_file',
		'enroll_tag',
		'enroll_tag1',
		'active_tag',
		'name_ext',
		'emp_pos_item_no',
		'prov_zip_code',
		'email_add',
	),
)); ?>

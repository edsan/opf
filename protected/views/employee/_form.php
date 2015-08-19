<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'middle_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nickname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthplace'); ?>
		<?php echo $form->textField($model,'birthplace',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'birthplace'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bloodtype'); ?>
		<?php echo $form->textField($model,'bloodtype',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bloodtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_tel_no1'); ?>
		<?php echo $form->textField($model,'curr_tel_no1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curr_tel_no1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_tel_no2'); ?>
		<?php echo $form->textField($model,'curr_tel_no2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curr_tel_no2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curr_address'); ?>
		<?php echo $form->textField($model,'curr_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curr_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_code'); ?>
		<?php echo $form->textField($model,'city_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'city_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zip_code'); ?>
		<?php echo $form->textField($model,'zip_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_address'); ?>
		<?php echo $form->textField($model,'prov_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prov_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_tel_no1'); ?>
		<?php echo $form->textField($model,'prov_tel_no1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prov_tel_no1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wedding_aniv'); ?>
		<?php echo $form->textField($model,'wedding_aniv'); ?>
		<?php echo $form->error($model,'wedding_aniv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'civil_status'); ?>
		<?php echo $form->textField($model,'civil_status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'civil_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_no'); ?>
		<?php echo $form->textField($model,'philhealth_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'philhealth_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_no'); ?>
		<?php echo $form->textField($model,'sss_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sss_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tin_no'); ?>
		<?php echo $form->textField($model,'tin_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tin_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pag_ibig'); ?>
		<?php echo $form->textField($model,'pag_ibig',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pag_ibig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bp_no'); ?>
		<?php echo $form->textField($model,'bp_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bp_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_pic_dir'); ?>
		<?php echo $form->textField($model,'emp_pic_dir',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_pic_dir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_pic_file'); ?>
		<?php echo $form->textField($model,'emp_pic_file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_pic_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enroll_tag'); ?>
		<?php echo $form->textField($model,'enroll_tag',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'enroll_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enroll_tag1'); ?>
		<?php echo $form->textField($model,'enroll_tag1',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'enroll_tag1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active_tag'); ?>
		<?php echo $form->textField($model,'active_tag',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'active_tag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_ext'); ?>
		<?php echo $form->textField($model,'name_ext',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emp_pos_item_no'); ?>
		<?php echo $form->textField($model,'emp_pos_item_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'emp_pos_item_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prov_zip_code'); ?>
		<?php echo $form->textField($model,'prov_zip_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prov_zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_add'); ?>
		<?php echo $form->textField($model,'email_add',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_add'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typeOfLoan_id'); ?>
		<?php echo $form->textField($model,'typeOfLoan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrower_id'); ?>
		<?php echo $form->textField($model,'borrower_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanPrincipal'); ?>
		<?php echo $form->textField($model,'loanPrincipal',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanInterestAmount'); ?>
		<?php echo $form->textField($model,'loanInterestAmount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanServiceChargeAmount'); ?>
		<?php echo $form->textField($model,'loanServiceChargeAmount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanSurchargeAmount'); ?>
		<?php echo $form->textField($model,'loanSurchargeAmount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanPreviousBalance'); ?>
		<?php echo $form->textField($model,'loanPreviousBalance',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanNetAmount'); ?>
		<?php echo $form->textField($model,'loanNetAmount',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanDeductionMonthly'); ?>
		<?php echo $form->textField($model,'loanDeductionMonthly',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'loanDeductionWeekly'); ?>
		<?php echo $form->textField($model,'loanDeductionWeekly',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentStart'); ?>
		<?php echo $form->textField($model,'paymentStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentEnd'); ?>
		<?php echo $form->textField($model,'paymentEnd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'loan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'typeOfLoan_id'); ?>
		<?php //echo $form->textField($model,'typeOfLoan_id'); 
              echo $form->dropDownList($model,'typeOfLoan_id',$model->getTypeOfLoanOptions(),
                                        array('empty'=>'choose loan type'));?>
		<?php echo $form->error($model,'typeOfLoan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrower_id'); ?>
		<?php //echo $form->textField($model,'borrower_id',array('size'=>10,'maxlength'=>10)); 
              echo $form->dropDownList($model,'borrower_id',$model->getBorrower(),
                                        array('empty'=>'choose borrower'));?>
		<?php echo $form->error($model,'borrower_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanPrincipal'); ?>
		<?php echo $form->textField($model,'loanPrincipal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanPrincipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanInterestAmount'); ?>
		<?php echo $form->textField($model,'loanInterestAmount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanInterestAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanServiceChargeAmount'); ?>
		<?php echo $form->textField($model,'loanServiceChargeAmount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanServiceChargeAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanSurchargeAmount'); ?>
		<?php echo $form->textField($model,'loanSurchargeAmount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanSurchargeAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanPreviousBalance'); ?>
		<?php echo $form->textField($model,'loanPreviousBalance',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanPreviousBalance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanNetAmount'); ?>
		<?php echo $form->textField($model,'loanNetAmount',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanNetAmount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanDeductionMonthly'); ?>
		<?php echo $form->textField($model,'loanDeductionMonthly',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanDeductionMonthly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loanDeductionWeekly'); ?>
		<?php echo $form->textField($model,'loanDeductionWeekly',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'loanDeductionWeekly'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentStart'); ?>
		<?php echo $form->textField($model,'paymentStart'); ?>
		<?php echo $form->error($model,'paymentStart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paymentEnd'); ?>
		<?php echo $form->textField($model,'paymentEnd'); ?>
		<?php echo $form->error($model,'paymentEnd'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
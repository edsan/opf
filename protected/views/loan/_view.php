<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typeOfLoan_id')); ?>:</b>
	<?php echo CHtml::encode($data->typeOfLoan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrower_id')); ?>:</b>
	<?php echo CHtml::encode($data->borrower_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanPrincipal')); ?>:</b>
	<?php echo CHtml::encode($data->loanPrincipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanInterestAmount')); ?>:</b>
	<?php echo CHtml::encode($data->loanInterestAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanServiceChargeAmount')); ?>:</b>
	<?php echo CHtml::encode($data->loanServiceChargeAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanSurchargeAmount')); ?>:</b>
	<?php echo CHtml::encode($data->loanSurchargeAmount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('loanPreviousBalance')); ?>:</b>
	<?php echo CHtml::encode($data->loanPreviousBalance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanNetAmount')); ?>:</b>
	<?php echo CHtml::encode($data->loanNetAmount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanDeductionMonthly')); ?>:</b>
	<?php echo CHtml::encode($data->loanDeductionMonthly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loanDeductionWeekly')); ?>:</b>
	<?php echo CHtml::encode($data->loanDeductionWeekly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentStart')); ?>:</b>
	<?php echo CHtml::encode($data->paymentStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentEnd')); ?>:</b>
	<?php echo CHtml::encode($data->paymentEnd); ?>
	<br />

	*/ ?>

</div>
<?php

/**
 * This is the model class for table "loan".
 *
 * The followings are the available columns in table 'loan':
 * @property integer $id
 * @property integer $typeOfLoan_id
 * @property string $borrower_id
 * @property string $loanPrincipal
 * @property string $loanInterestAmount
 * @property string $loanServiceChargeAmount
 * @property string $loanSurchargeAmount
 * @property string $loanPreviousBalance
 * @property string $loanNetAmount
 * @property string $loanDeductionMonthly
 * @property string $loanDeductionWeekly
 * @property string $paymentStart
 * @property string $paymentEnd
 */
class Loan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Loan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'loan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('typeOfLoan_id', 'numerical', 'integerOnly'=>true),
			array('borrower_id, loanPrincipal, loanInterestAmount, loanServiceChargeAmount, loanSurchargeAmount, loanPreviousBalance, loanNetAmount, loanDeductionMonthly, loanDeductionWeekly', 'length', 'max'=>10),
			array('paymentStart, paymentEnd', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, typeOfLoan_id, borrower_id, loanPrincipal, loanInterestAmount, loanServiceChargeAmount, loanSurchargeAmount, loanPreviousBalance, loanNetAmount, loanDeductionMonthly, loanDeductionWeekly, paymentStart, paymentEnd', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'typeOfLoan_id' => 'Type Of Loan',
			'borrower_id' => 'Borrower',
			'loanPrincipal' => 'Principal',
			'loanInterestAmount' => 'Interest of 6%',
			'loanServiceChargeAmount' => 'Service Charge of 1%',
			'loanSurchargeAmount' => 'Surcharge of 1%',
			'loanPreviousBalance' => 'Balance of Previous Loan',
			'loanNetAmount' => 'Loan Net Amount',
			'loanDeductionMonthly' => 'Monthly Deduction',
			'loanDeductionWeekly' => 'Weekly Deduction',
			'paymentStart' => 'Payment Coverage Start',
			'paymentEnd' => 'Payment Coverage End',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('typeOfLoan_id',$this->typeOfLoan_id);
		$criteria->compare('borrower_id',$this->borrower_id,true);
		$criteria->compare('loanPrincipal',$this->loanPrincipal,true);
		$criteria->compare('loanInterestAmount',$this->loanInterestAmount,true);
		$criteria->compare('loanServiceChargeAmount',$this->loanServiceChargeAmount,true);
		$criteria->compare('loanSurchargeAmount',$this->loanSurchargeAmount,true);
		$criteria->compare('loanPreviousBalance',$this->loanPreviousBalance,true);
		$criteria->compare('loanNetAmount',$this->loanNetAmount,true);
		$criteria->compare('loanDeductionMonthly',$this->loanDeductionMonthly,true);
		$criteria->compare('loanDeductionWeekly',$this->loanDeductionWeekly,true);
		$criteria->compare('paymentStart',$this->paymentStart,true);
		$criteria->compare('paymentEnd',$this->paymentEnd,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function getTypeOfLoanOptions()
    {
        $models = Loantype::model()->findAll(
                    array("order"=>"type"));
                    
        $list = Chtml::listData($models,
                    'id','type');
                    
        return($list);
    }
    
    
    public function getBorrower()
    {
        $models = Employee::model()->findAll(
                    array("order"=>"first_name"));
                    
        $list = Chtml::listData($models,
                    'employee_id','fullname');
                    
        return($list);
    }
}
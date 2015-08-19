<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property string $employee_id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $nickname
 * @property string $sex
 * @property string $birthdate
 * @property double $age
 * @property string $birthplace
 * @property string $nationality
 * @property string $religion
 * @property string $height
 * @property string $weight
 * @property string $bloodtype
 * @property string $curr_tel_no1
 * @property string $curr_tel_no2
 * @property string $curr_address
 * @property string $city_code
 * @property string $zip_code
 * @property string $prov_address
 * @property string $prov_tel_no1
 * @property string $wedding_aniv
 * @property string $civil_status
 * @property string $philhealth_no
 * @property string $sss_no
 * @property string $tin_no
 * @property string $pag_ibig
 * @property string $bp_no
 * @property string $emp_pic_dir
 * @property string $emp_pic_file
 * @property string $enroll_tag
 * @property string $enroll_tag1
 * @property string $active_tag
 * @property string $name_ext
 * @property string $emp_pos_item_no
 * @property string $prov_zip_code
 * @property string $email_add
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
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
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employee_id', 'required'),
			array('age', 'numerical'),
			array('employee_id', 'length', 'max'=>10),
			array('last_name, first_name, middle_name, nickname, sex, birthplace, nationality, religion, height, weight, bloodtype, curr_tel_no1, curr_tel_no2, curr_address, city_code, zip_code, prov_address, prov_tel_no1, civil_status, philhealth_no, sss_no, tin_no, pag_ibig, bp_no, emp_pic_dir, emp_pic_file, enroll_tag, enroll_tag1, active_tag, name_ext, emp_pos_item_no, prov_zip_code, email_add', 'length', 'max'=>255),
			array('birthdate, wedding_aniv', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('employee_id, last_name, first_name, middle_name, nickname, sex, birthdate, age, birthplace, nationality, religion, height, weight, bloodtype, curr_tel_no1, curr_tel_no2, curr_address, city_code, zip_code, prov_address, prov_tel_no1, wedding_aniv, civil_status, philhealth_no, sss_no, tin_no, pag_ibig, bp_no, emp_pic_dir, emp_pic_file, enroll_tag, enroll_tag1, active_tag, name_ext, emp_pos_item_no, prov_zip_code, email_add', 'safe', 'on'=>'search'),
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
			'employee_id' => 'Employee',
			'last_name' => 'Last Name',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'nickname' => 'Nickname',
			'sex' => 'Sex',
			'birthdate' => 'Birthdate',
			'age' => 'Age',
			'birthplace' => 'Birthplace',
			'nationality' => 'Nationality',
			'religion' => 'Religion',
			'height' => 'Height',
			'weight' => 'Weight',
			'bloodtype' => 'Bloodtype',
			'curr_tel_no1' => 'Curr Tel No1',
			'curr_tel_no2' => 'Curr Tel No2',
			'curr_address' => 'Curr Address',
			'city_code' => 'City Code',
			'zip_code' => 'Zip Code',
			'prov_address' => 'Prov Address',
			'prov_tel_no1' => 'Prov Tel No1',
			'wedding_aniv' => 'Wedding Aniv',
			'civil_status' => 'Civil Status',
			'philhealth_no' => 'Philhealth No',
			'sss_no' => 'Sss No',
			'tin_no' => 'Tin No',
			'pag_ibig' => 'Pag Ibig',
			'bp_no' => 'Bp No',
			'emp_pic_dir' => 'Emp Pic Dir',
			'emp_pic_file' => 'Emp Pic File',
			'enroll_tag' => 'Enroll Tag',
			'enroll_tag1' => 'Enroll Tag1',
			'active_tag' => 'Active Tag',
			'name_ext' => 'Name Ext',
			'emp_pos_item_no' => 'Emp Pos Item No',
			'prov_zip_code' => 'Prov Zip Code',
			'email_add' => 'Email Add',
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

		$criteria->compare('employee_id',$this->employee_id,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('nickname',$this->nickname,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('age',$this->age);
		$criteria->compare('birthplace',$this->birthplace,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('bloodtype',$this->bloodtype,true);
		$criteria->compare('curr_tel_no1',$this->curr_tel_no1,true);
		$criteria->compare('curr_tel_no2',$this->curr_tel_no2,true);
		$criteria->compare('curr_address',$this->curr_address,true);
		$criteria->compare('city_code',$this->city_code,true);
		$criteria->compare('zip_code',$this->zip_code,true);
		$criteria->compare('prov_address',$this->prov_address,true);
		$criteria->compare('prov_tel_no1',$this->prov_tel_no1,true);
		$criteria->compare('wedding_aniv',$this->wedding_aniv,true);
		$criteria->compare('civil_status',$this->civil_status,true);
		$criteria->compare('philhealth_no',$this->philhealth_no,true);
		$criteria->compare('sss_no',$this->sss_no,true);
		$criteria->compare('tin_no',$this->tin_no,true);
		$criteria->compare('pag_ibig',$this->pag_ibig,true);
		$criteria->compare('bp_no',$this->bp_no,true);
		$criteria->compare('emp_pic_dir',$this->emp_pic_dir,true);
		$criteria->compare('emp_pic_file',$this->emp_pic_file,true);
		$criteria->compare('enroll_tag',$this->enroll_tag,true);
		$criteria->compare('enroll_tag1',$this->enroll_tag1,true);
		$criteria->compare('active_tag',$this->active_tag,true);
		$criteria->compare('name_ext',$this->name_ext,true);
		$criteria->compare('emp_pos_item_no',$this->emp_pos_item_no,true);
		$criteria->compare('prov_zip_code',$this->prov_zip_code,true);
		$criteria->compare('email_add',$this->email_add,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    public function getFullname()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
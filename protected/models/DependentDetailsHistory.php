<?php

/**
 * This is the model class for table "DependentDetailsHistory".
 *
 * The followings are the available columns in table 'DependentDetailsHistory':
 * @property integer $id
 * @property integer $officerId
 * @property integer $dependentId
 * @property string $type
 * @property string $NIC
 * @property string $fullName
 * @property string $otherName
 * @property string $initials
 * @property string $DOB
 * @property string $gender
 * @property string $nationality
 * @property string $religion
 * @property string $currentAddress
 * @property string $currentAddPoliceDivision
 * @property string $isSchooling
 * @property string $school
 * @property string $grade
 * @property string $isWorking
 * @property string $designation
 * @property string $workplaceAddress
 * @property string $healthCondition
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Dependentdetails $dependent
 * @property Officer $officer
 */
class DependentDetailsHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DependentDetailsHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, dependentId, type, NIC, fullName, otherName, initials, DOB, gender, nationality, religion, currentAddress, currentAddPoliceDivision, isSchooling, school, grade, isWorking, designation, workplaceAddress, healthCondition', 'required'),
			array('officerId, dependentId', 'numerical', 'integerOnly'=>true),
			array('type, gender, nationality, religion, isSchooling, isWorking', 'length', 'max'=>1),
			array('NIC', 'length', 'max'=>128),
			array('createdAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, dependentId, type, NIC, fullName, otherName, initials, DOB, gender, nationality, religion, currentAddress, currentAddPoliceDivision, isSchooling, school, grade, isWorking, designation, workplaceAddress, healthCondition, createdAt', 'safe', 'on'=>'search'),
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
			'dependent' => array(self::BELONGS_TO, 'Dependentdetails', 'dependentId'),
			'officer' => array(self::BELONGS_TO, 'Officer', 'officerId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
return array(
    'id' => Yii::t('site', 'ID'),
    'officerId' => Yii::t('site', 'Officer'),
    'dependentId' => Yii::t('site', 'Dependent'),
    'type' => Yii::t('site', 'Type'),
    'NIC' => Yii::t('site', 'Nic'),
    'fullName' => Yii::t('site', 'Full Name'),
    'otherName' => Yii::t('site', 'Other Name'),
    'initials' => Yii::t('site', 'Initials'),
    'DOB' => Yii::t('site', 'Dob'),
    'gender' => Yii::t('site', 'Gender'),
    'nationality' => Yii::t('site', 'Nationality'),
    'religion' => Yii::t('site', 'Religion'),
    'currentAddress' => Yii::t('site', 'Current Address'),
    'currentAddPoliceDivision' => Yii::t('site', 'Current Add Police Division'),
    'isSchooling' => Yii::t('site', 'Is Schooling'),
    'school' => Yii::t('site', 'School'),
    'grade' => Yii::t('site', 'Grade'),
    'isWorking' => Yii::t('site', 'Is Working'),
    'designation' => Yii::t('site', 'Designation'),
    'workplaceAddress' => Yii::t('site', 'Workplace Address'),
    'healthCondition' => Yii::t('site', 'Health Condition'),
    'createdAt' => Yii::t('site', 'Created At'),
);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('officerId',$this->officerId);
		$criteria->compare('dependentId',$this->dependentId);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('NIC',$this->NIC,true);
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('otherName',$this->otherName,true);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('currentAddress',$this->currentAddress,true);
		$criteria->compare('currentAddPoliceDivision',$this->currentAddPoliceDivision,true);
		$criteria->compare('isSchooling',$this->isSchooling,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('isWorking',$this->isWorking,true);
		$criteria->compare('designation',$this->designation,true);
		$criteria->compare('workplaceAddress',$this->workplaceAddress,true);
		$criteria->compare('healthCondition',$this->healthCondition,true);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DependentDetailsHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

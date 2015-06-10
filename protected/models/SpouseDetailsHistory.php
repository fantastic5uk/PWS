<?php

/**
 * This is the model class for table "SpouseDetailsHistory".
 *
 * The followings are the available columns in table 'SpouseDetailsHistory':
 * @property integer $id
 * @property integer $officerId
 * @property integer $spouseId
 * @property string $type
 * @property string $NIC
 * @property string $fullName
 * @property string $otherName
 * @property string $initials
 * @property string $relationship
 * @property integer $DOB
 * @property string $nationality
 * @property string $religion
 * @property string $gender
 * @property string $currentAddress
 * @property string $currentAddPoliceDivision
 * @property string $currentTelNo
 * @property string $JPdivison
 * @property string $divisionalSecOffice
 * @property string $operationalDistrtict
 * @property string $permanantAddress
 * @property string $permanantTelNo
 * @property string $permanantAddPoliceDivision
 * @property string $isMarriedAgain
 * @property string $marriedDate
 * @property string $isReceivingPension50
 * @property string $isWorking
 * @property string $designation
 * @property string $workplaceAddress
 * @property string $healthCondition
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Spousedetails $spouse
 * @property Officer $officer
 */
class SpouseDetailsHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SpouseDetailsHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, spouseId, type, NIC, fullName, otherName, initials, relationship, DOB, nationality, religion, gender, currentAddress, currentAddPoliceDivision, currentTelNo, JPdivison, divisionalSecOffice, operationalDistrtict, permanantAddress, permanantTelNo, permanantAddPoliceDivision, isMarriedAgain, marriedDate, isReceivingPension50, isWorking, designation, workplaceAddress, healthCondition', 'required'),
			array('officerId, spouseId, DOB', 'numerical', 'integerOnly'=>true),
			array('type, nationality, religion, gender, isMarriedAgain, isReceivingPension50, isWorking', 'length', 'max'=>1),
			array('NIC', 'length', 'max'=>128),
			array('createdAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, spouseId, type, NIC, fullName, otherName, initials, relationship, DOB, nationality, religion, gender, currentAddress, currentAddPoliceDivision, currentTelNo, JPdivison, divisionalSecOffice, operationalDistrtict, permanantAddress, permanantTelNo, permanantAddPoliceDivision, isMarriedAgain, marriedDate, isReceivingPension50, isWorking, designation, workplaceAddress, healthCondition, createdAt', 'safe', 'on'=>'search'),
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
			'spouse' => array(self::BELONGS_TO, 'Spousedetails', 'spouseId'),
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
    'spouseId' => Yii::t('site', 'Spouse'),
    'type' => Yii::t('site', 'Type'),
    'NIC' => Yii::t('site', 'Nic'),
    'fullName' => Yii::t('site', 'Full Name'),
    'otherName' => Yii::t('site', 'Other Name'),
    'initials' => Yii::t('site', 'Initials'),
    'relationship' => Yii::t('site', 'Relationship'),
    'DOB' => Yii::t('site', 'Dob'),
    'nationality' => Yii::t('site', 'Nationality'),
    'religion' => Yii::t('site', 'Religion'),
    'gender' => Yii::t('site', 'Gender'),
    'currentAddress' => Yii::t('site', 'Current Address'),
    'currentAddPoliceDivision' => Yii::t('site', 'Current Add Police Division'),
    'currentTelNo' => Yii::t('site', 'Current Tel No'),
    'JPdivison' => Yii::t('site', 'Jpdivison'),
    'divisionalSecOffice' => Yii::t('site', 'Divisional Sec Office'),
    'operationalDistrtict' => Yii::t('site', 'Operational Distrtict'),
    'permanantAddress' => Yii::t('site', 'Permanant Address'),
    'permanantTelNo' => Yii::t('site', 'Permanant Tel No'),
    'permanantAddPoliceDivision' => Yii::t('site', 'Permanant Add Police Division'),
    'isMarriedAgain' => Yii::t('site', 'Is Married Again'),
    'marriedDate' => Yii::t('site', 'Married Date'),
    'isReceivingPension50' => Yii::t('site', 'Is Receiving Pension50'),
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
		$criteria->compare('spouseId',$this->spouseId);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('NIC',$this->NIC,true);
		$criteria->compare('fullName',$this->fullName,true);
		$criteria->compare('otherName',$this->otherName,true);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('relationship',$this->relationship,true);
		$criteria->compare('DOB',$this->DOB);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('currentAddress',$this->currentAddress,true);
		$criteria->compare('currentAddPoliceDivision',$this->currentAddPoliceDivision,true);
		$criteria->compare('currentTelNo',$this->currentTelNo,true);
		$criteria->compare('JPdivison',$this->JPdivison,true);
		$criteria->compare('divisionalSecOffice',$this->divisionalSecOffice,true);
		$criteria->compare('operationalDistrtict',$this->operationalDistrtict,true);
		$criteria->compare('permanantAddress',$this->permanantAddress,true);
		$criteria->compare('permanantTelNo',$this->permanantTelNo,true);
		$criteria->compare('permanantAddPoliceDivision',$this->permanantAddPoliceDivision,true);
		$criteria->compare('isMarriedAgain',$this->isMarriedAgain,true);
		$criteria->compare('marriedDate',$this->marriedDate,true);
		$criteria->compare('isReceivingPension50',$this->isReceivingPension50,true);
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
	 * @return SpouseDetailsHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

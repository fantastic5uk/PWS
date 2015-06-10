<?php

/**
 * This is the model class for table "Officer".
 *
 * The followings are the available columns in table 'Officer':
 * @property integer $id
 * @property string $type
 * @property string $incidentType
 * @property string $description
 * @property string $incidentDate
 * @property string $incidentPlace
 * @property string $policeDivision
 * @property string $policeDistrict
 * @property string $lastName
 * @property string $otherName
 * @property string $initials
 * @property string $incidentTimeDesignation
 * @property string $incidentTimeRegistrationNo
 * @property integer $NIC
 * @property integer $registrationNo
 * @property string $DOB
 * @property string $maritalStatus
 * @property string $joinedDate
 * @property string $nationality
 * @property string $religion
 * @property string $gender
 * @property string $incidentAtWork
 * @property string $currentAddress
 * @property string $currentTelNo
 * @property string $currentMobileNo
 * @property string $email
 * @property string $currentAddPoliceDivision
 * @property string $currentAddPolicDistrict
 * @property string $permanantAddress
 * @property string $permanantTelNo
 * @property string $permanantAddPoliceDivision
 * @property string $permanantAddPoliceDistrict
 * @property string $JPdivison
 * @property string $divisionalSecOffice
 * @property string $operationalDistrtict
 * @property string $residenceType
 * @property string $hasLand
 * @property string $landAddress
 * @property string $incidentResult
 * @property string $createdAt
 * @property string $updatedAt
 *
 * The followings are the available model relations:
 * @property ChildDetails[] $childDetails
 * @property ChildDetailsHistory[] $childDetailsHistories
 * @property DependentDetails[] $dependentDetails
 * @property DependentDetailsHistory[] $dependentDetailsHistories
 * @property DiedOfficerDetailsHistory[] $diedOfficerDetailsHistories
 * @property DisabledOfficerDetails[] $disabledOfficerDetails
 * @property DisabledOfficerDetailsHistory[] $disabledOfficerDetailsHistories
 * @property OfficerHistory[] $officerHistories
 * @property SalaryDetails[] $salaryDetails
 * @property SalaryDetailsHistory[] $salaryDetailsHistories
 * @property SpouseDetails[] $spouseDetails
 * @property SpouseDetailsHistory[] $spouseDetailsHistories
 */
class Officer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Officer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, incidentType, description, incidentDate, incidentPlace, policeDivision, policeDistrict, lastName, otherName, initials, incidentTimeDesignation, incidentTimeRegistrationNo, NIC, registrationNo, DOB, maritalStatus, joinedDate, nationality, religion, gender, incidentAtWork, currentAddress, currentTelNo, currentMobileNo, email, currentAddPoliceDivision, currentAddPolicDistrict, permanantAddress, permanantTelNo, permanantAddPoliceDivision, permanantAddPoliceDistrict, JPdivison, divisionalSecOffice, operationalDistrtict, residenceType, incidentResult', 'required'),
			//array('type, incidentType, description, incidentDate, incidentPlace, policeDivision', 'required'),
			array('NIC, registrationNo', 'numerical', 'integerOnly'=>true),
			array('type, incidentType, maritalStatus, nationality, religion, gender, incidentAtWork, residenceType, hasLand, incidentResult', 'length', 'max'=>1),
			array('email', 'length', 'max'=>128),
			array('createdAt, updatedAt, type, landAddress, type, incidentType, description, incidentDate, incidentPlace, policeDivision, policeDistrict, lastName, otherName, initials, incidentTimeDesignation, incidentTimeRegistrationNo, NIC, registrationNo, DOB, maritalStatus, joinedDate, nationality, religion, gender, incidentAtWork, currentAddress, currentTelNo, currentMobileNo, email, currentAddPoliceDivision, currentAddPolicDistrict, permanantAddress, permanantTelNo, permanantAddPoliceDivision, permanantAddPoliceDistrict, JPdivison, divisionalSecOffice, operationalDistrtict, residenceType, incidentResult', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, incidentType, description, incidentDate, incidentPlace, policeDivision, policeDistrict, lastName, otherName, initials, incidentTimeDesignation, incidentTimeRegistrationNo, NIC, registrationNo, DOB, maritalStatus, joinedDate, nationality, religion, gender, incidentAtWork, currentAddress, currentTelNo, currentMobileNo, email, currentAddPoliceDivision, currentAddPolicDistrict, permanantAddress, permanantTelNo, permanantAddPoliceDivision, permanantAddPoliceDistrict, JPdivison, divisionalSecOffice, operationalDistrtict, residenceType, hasLand, landAddress, incidentResult, createdAt, updatedAt', 'safe', 'on'=>'search'),
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
			'childDetails' => array(self::HAS_MANY, 'ChildDetails', 'officerId'),
			'childDetailsHistories' => array(self::HAS_MANY, 'ChildDetailsHistory', 'officerId'),
			'dependentDetails' => array(self::HAS_MANY, 'DependentDetails', 'officerId'),
			'dependentDetailsHistories' => array(self::HAS_MANY, 'DependentDetailsHistory', 'officerId'),
            'diedOfficerDetails' => array(self::HAS_MANY, 'DiedOfficerDetails', 'officerId'),
			'diedOfficerDetailsHistories' => array(self::HAS_MANY, 'DiedOfficerDetailsHistory', 'officerId'),
			'disabledOfficerDetails' => array(self::HAS_MANY, 'DisabledOfficerDetails', 'officerId'),
			'disabledOfficerDetailsHistories' => array(self::HAS_MANY, 'DisabledOfficerDetailsHistory', 'officerId'),
			'officerHistories' => array(self::HAS_MANY, 'OfficerHistory', 'officerId'),
			'salaryDetails' => array(self::HAS_MANY, 'SalaryDetails', 'officerId'),
			'salaryDetailsHistories' => array(self::HAS_MANY, 'SalaryDetailsHistory', 'officerId'),
			'spouseDetails' => array(self::HAS_MANY, 'SpouseDetails', 'officerId'),
			'spouseDetailsHistories' => array(self::HAS_MANY, 'SpouseDetailsHistory', 'officerId'),
		);
	}

//    public function beforeSave()
//{
//
//    if ($this->isNewRecord) {
//        $this->createdAt = date(MDate::DB_DATETIME_FORMAT);
//    } else {
//        $this->updatedAt = date(MDate::DB_DATETIME_FORMAT);
//    }
//    parent::beforeSave();
//}

    public function afterSave()
    {
        //On update, save a version of the body with email id.
        $History = new OfficerHistory();
        $History->officerId = $this->id;
        $History->attributes= $this->getAttributes();
		//print_r($History->getAttributes()); 
		//exit;
        $History->save(false);
        parent::afterSave();
    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('site', 'ID'),
			'type' => Yii::t('site', 'Type'),
			'incidentType' => Yii::t('site', 'Incident Type'),
			'description' => Yii::t('site', 'Description'),
			'incidentDate' => Yii::t('site', 'Incident Date'),
			'incidentPlace' => Yii::t('site', 'Incident Place'),
			'policeDivision' => Yii::t('site', 'Police Division'),
			'policeDistrict' => Yii::t('site', 'Police District'),
			'lastName' => Yii::t('site', 'Last Name'),
			'otherName' => Yii::t('site', 'Other Name'),
			'initials' => Yii::t('site', 'Initials'),
			'incidentTimeDesignation' => Yii::t('site', 'Incident Time Designation'),
			'incidentTimeRegistrationNo' => Yii::t('site', 'Incident Time Registration No'),
			'NIC' => Yii::t('site', 'Nic'),
			'registrationNo' => Yii::t('site', 'Registration No'),
			'DOB' => Yii::t('site', 'Dob'),
			'maritalStatus' => Yii::t('site', 'Marital Status'),
			'joinedDate' => Yii::t('site', 'Joined Date'),
			'nationality' => Yii::t('site', 'Nationality'),
			'religion' => Yii::t('site', 'Religion'),
			'gender' => Yii::t('site', 'Gender'),
			'incidentAtWork' => Yii::t('site', 'Incident At Work'),
			'currentAddress' => Yii::t('site', 'Current Address'),
			'currentTelNo' => Yii::t('site', 'Current Tel No'),
			'currentMobileNo' => Yii::t('site', 'Current Mobile No'),
			'email' => Yii::t('site', 'Email'),
			'currentAddPoliceDivision' => Yii::t('site', 'Current Add Police Division'),
			'currentAddPolicDistrict' => Yii::t('site', 'Current Add Polic District'),
			'permanantAddress' => Yii::t('site', 'Permanant Address'),
			'permanantTelNo' => Yii::t('site', 'Permanant Tel No'),
			'permanantAddPoliceDivision' => Yii::t('site', 'Permanant Add Police Division'),
			'permanantAddPoliceDistrict' => Yii::t('site', 'Permanant Add Police District'),
			'JPdivison' => Yii::t('site', 'Jpdivison'),
			'divisionalSecOffice' => Yii::t('site', 'Divisional Sec Office'),
			'operationalDistrtict' => Yii::t('site', 'Operational Distrtict'),
			'residenceType' => Yii::t('site', 'Residence Type'),
			'hasLand' => Yii::t('site', 'Has Land'),
			'landAddress' => Yii::t('site', 'Land Address'),
			'incidentResult' => Yii::t('site', 'Incident Result'),
			'createdAt' => Yii::t('site', 'Created At'),
			'updatedAt' => Yii::t('site', 'Updated At'),
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('incidentType',$this->incidentType,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('incidentDate',$this->incidentDate,true);
		$criteria->compare('incidentPlace',$this->incidentPlace,true);
		$criteria->compare('policeDivision',$this->policeDivision,true);
		$criteria->compare('policeDistrict',$this->policeDistrict,true);
		$criteria->compare('lastName',$this->lastName,true);
		$criteria->compare('otherName',$this->otherName,true);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('incidentTimeDesignation',$this->incidentTimeDesignation,true);
		$criteria->compare('incidentTimeRegistrationNo',$this->incidentTimeRegistrationNo,true);
		$criteria->compare('NIC',$this->NIC);
		$criteria->compare('registrationNo',$this->registrationNo);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('maritalStatus',$this->maritalStatus,true);
		$criteria->compare('joinedDate',$this->joinedDate,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('incidentAtWork',$this->incidentAtWork,true);
		$criteria->compare('currentAddress',$this->currentAddress,true);
		$criteria->compare('currentTelNo',$this->currentTelNo,true);
		$criteria->compare('currentMobileNo',$this->currentMobileNo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('currentAddPoliceDivision',$this->currentAddPoliceDivision,true);
		$criteria->compare('currentAddPolicDistrict',$this->currentAddPolicDistrict,true);
		$criteria->compare('permanantAddress',$this->permanantAddress,true);
		$criteria->compare('permanantTelNo',$this->permanantTelNo,true);
		$criteria->compare('permanantAddPoliceDivision',$this->permanantAddPoliceDivision,true);
		$criteria->compare('permanantAddPoliceDistrict',$this->permanantAddPoliceDistrict,true);
		$criteria->compare('JPdivison',$this->JPdivison,true);
		$criteria->compare('divisionalSecOffice',$this->divisionalSecOffice,true);
		$criteria->compare('operationalDistrtict',$this->operationalDistrtict,true);
		$criteria->compare('residenceType',$this->residenceType,true);
		$criteria->compare('hasLand',$this->hasLand,true);
		$criteria->compare('landAddress',$this->landAddress,true);
		$criteria->compare('incidentResult',$this->incidentResult,true);
		$criteria->compare('createdAt',$this->createdAt,true);
		$criteria->compare('updatedAt',$this->updatedAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Officer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
    public function getTypes(){
        return array('1'=>Yii::t('site', 'Died'), '2'=>Yii::t('site', 'Disabled'));
    }
    public function getType($id){
        $temp = $this->getTypes();
        return $temp[$id];
    }
    public function getIncidentTypes(){
        return array('1'=>Yii::t('site', 'LLTE'), '2'=>Yii::t('site', '71-89 Issue'), '3'=>Yii::t('site', 'Emergency when at work'), '4'=>Yii::t('site', 'Special Cause'), '5'=>Yii::t('site', 'Natural Death'));
    }
    public function getIncidentType($id){
        $temp = $this->getIncidentTypes();
        return $temp[$id];
    }
    public function getResidenceTypes(){
        return array('1'=>Yii::t('site', 'Unofficial'), '2'=>Yii::t('site', 'Official'), '3'=>Yii::t('site', 'Rent'), '4'=>Yii::t('site', 'Other'));
    }
    public function getResidenceType($id){
        $temp = $this->getResidenceTypes();
        return $temp[$id];
    }
    public function getMarriedStatus(){
        return array('1'=>Yii::t('site', 'Married'), '2'=>Yii::t('site', 'Divorced'), '3'=>Yii::t('site', 'Unmarried'), '4'=>Yii::t('site', 'widow'));
    }
    public function getMarriedStat($id){
        $temp = $this->getMarriedStatus();
        return $temp[$id];
    }
    public function getNationality(){
        return array('1'=>Yii::t('site', 'Sinhala'), '2'=>Yii::t('site', 'Tamil'), '3'=>Yii::t('site', 'Muslim'), '4'=>Yii::t('site', 'malay'), '5'=>Yii::t('site', 'other'));
    }
    public function getNational($id){
        $temp = $this->getNationality();
        return $temp[$id];
    }
    public function getRelegion(){
        return array('1'=>Yii::t('site', 'Buddist'), '2'=>Yii::t('site', 'Christian'), '3'=>Yii::t('site', 'Hindu'), '4'=>Yii::t('site', 'Islam'), '5'=>Yii::t('site', 'Other'));
    }
    public function getReleg($id){
        $temp = $this->getRelegion();
        return $temp[$id];
    }
    public function getGender(){
        return array('1'=>Yii::t('site', 'Male'), '2'=>Yii::t('site', 'Female'));
    }
    public function getBool(){
        return array('1'=>Yii::t('site', 'Yes'), '0'=>Yii::t('site', 'No'));
    }
    public function getIncidentResult(){
        return array('1'=>Yii::t('site', 'Died'), '2'=>Yii::t('site', 'Injured'), '3'=>Yii::t('site', 'Disabled'));
    }
}

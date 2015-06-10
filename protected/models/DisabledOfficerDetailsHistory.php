<?php

/**
 * This is the model class for table "DisabledOfficerDetailsHistory".
 *
 * The followings are the available columns in table 'DisabledOfficerDetailsHistory':
 * @property integer $id
 * @property integer $officerId
 * @property integer $disabledDetailsId
 * @property string $retiredDesignation
 * @property string $RegistrationNo
 * @property integer $serviceType
 * @property string $retiredDate
 * @property string $lastWorkedPlace
 * @property string $lastWorkedDivision
 * @property string $earningPercentageAffect
 * @property string $hospitalBoardNo
 * @property string $hospitalDecisionDate
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Disabledofficerdetails $disabledDetails
 * @property Officer $officer
 */
class DisabledOfficerDetailsHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DisabledOfficerDetailsHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, disabledDetailsId, retiredDesignation, RegistrationNo, serviceType, retiredDate, lastWorkedPlace, lastWorkedDivision, earningPercentageAffect, hospitalBoardNo, hospitalDecisionDate', 'required'),
			array('officerId, disabledDetailsId, serviceType', 'numerical', 'integerOnly'=>true),
			array('createdAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, disabledDetailsId, retiredDesignation, RegistrationNo, serviceType, retiredDate, lastWorkedPlace, lastWorkedDivision, earningPercentageAffect, hospitalBoardNo, hospitalDecisionDate, createdAt', 'safe', 'on'=>'search'),
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
			'disabledDetails' => array(self::BELONGS_TO, 'Disabledofficerdetails', 'disabledDetailsId'),
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
    'disabledDetailsId' => Yii::t('site', 'Disabled Details'),
    'retiredDesignation' => Yii::t('site', 'Retired Designation'),
    'RegistrationNo' => Yii::t('site', 'Registration No'),
    'serviceType' => Yii::t('site', 'Service Type'),
    'retiredDate' => Yii::t('site', 'Retired Date'),
    'lastWorkedPlace' => Yii::t('site', 'Last Worked Place'),
    'lastWorkedDivision' => Yii::t('site', 'Last Worked Division'),
    'earningPercentageAffect' => Yii::t('site', 'Earning Percentage Affect'),
    'hospitalBoardNo' => Yii::t('site', 'Hospital Board No'),
    'hospitalDecisionDate' => Yii::t('site', 'Hospital Decision Date'),
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
		$criteria->compare('disabledDetailsId',$this->disabledDetailsId);
		$criteria->compare('retiredDesignation',$this->retiredDesignation,true);
		$criteria->compare('RegistrationNo',$this->RegistrationNo,true);
		$criteria->compare('serviceType',$this->serviceType);
		$criteria->compare('retiredDate',$this->retiredDate,true);
		$criteria->compare('lastWorkedPlace',$this->lastWorkedPlace,true);
		$criteria->compare('lastWorkedDivision',$this->lastWorkedDivision,true);
		$criteria->compare('earningPercentageAffect',$this->earningPercentageAffect,true);
		$criteria->compare('hospitalBoardNo',$this->hospitalBoardNo,true);
		$criteria->compare('hospitalDecisionDate',$this->hospitalDecisionDate,true);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DisabledOfficerDetailsHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

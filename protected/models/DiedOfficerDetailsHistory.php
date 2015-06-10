<?php

/**
 * This is the model class for table "DiedOfficerDetailsHistory".
 *
 * The followings are the available columns in table 'DiedOfficerDetailsHistory':
 * @property integer $id
 * @property integer $officerId
 * @property integer $diedDetailsId
 * @property string $diedDate
 * @property string $designationWhenDied
 * @property string $RegistrationNo
 * @property string $isPromoted
 * @property string $promotedDesignation
 * @property string $promotedDate
 * @property string $lastWorkedPlace
 * @property string $lastWorkedDivision
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Diedofficerdetails $diedDetails
 * @property Officer $officer
 */
class DiedOfficerDetailsHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DiedOfficerDetailsHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, diedDetailsId, diedDate, designationWhenDied, RegistrationNo, isPromoted, promotedDesignation, promotedDate, lastWorkedPlace, lastWorkedDivision', 'required'),
			array('officerId, diedDetailsId', 'numerical', 'integerOnly'=>true),
			array('isPromoted', 'length', 'max'=>1),
			array('createdAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, diedDetailsId, diedDate, designationWhenDied, RegistrationNo, isPromoted, promotedDesignation, promotedDate, lastWorkedPlace, lastWorkedDivision, createdAt', 'safe', 'on'=>'search'),
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
			'diedDetails' => array(self::BELONGS_TO, 'Diedofficerdetails', 'diedDetailsId'),
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
    'diedDetailsId' => Yii::t('site', 'Died Details'),
    'diedDate' => Yii::t('site', 'Died Date'),
    'designationWhenDied' => Yii::t('site', 'Designation When Died'),
    'RegistrationNo' => Yii::t('site', 'Registration No'),
    'isPromoted' => Yii::t('site', 'Is Promoted'),
    'promotedDesignation' => Yii::t('site', 'Promoted Designation'),
    'promotedDate' => Yii::t('site', 'Promoted Date'),
    'lastWorkedPlace' => Yii::t('site', 'Last Worked Place'),
    'lastWorkedDivision' => Yii::t('site', 'Last Worked Division'),
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
		$criteria->compare('diedDetailsId',$this->diedDetailsId);
		$criteria->compare('diedDate',$this->diedDate,true);
		$criteria->compare('designationWhenDied',$this->designationWhenDied,true);
		$criteria->compare('RegistrationNo',$this->RegistrationNo,true);
		$criteria->compare('isPromoted',$this->isPromoted,true);
		$criteria->compare('promotedDesignation',$this->promotedDesignation,true);
		$criteria->compare('promotedDate',$this->promotedDate,true);
		$criteria->compare('lastWorkedPlace',$this->lastWorkedPlace,true);
		$criteria->compare('lastWorkedDivision',$this->lastWorkedDivision,true);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiedOfficerDetailsHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

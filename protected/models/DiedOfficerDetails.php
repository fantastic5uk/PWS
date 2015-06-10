<?php

/**
 * This is the model class for table "DiedOfficerDetails".
 *
 * The followings are the available columns in table 'DiedOfficerDetails':
 * @property integer $id
 * @property integer $officerId
 * @property string $diedDate
 * @property string $designationWhenDied
 * @property string $RegistrationNo
 * @property string $isPromoted
 * @property string $promotedDesignation
 * @property string $promotedDate
 * @property string $lastWorkedPlace
 * @property string $lastWorkedDivision
 * @property string $createdAt
 * @property string $updatedAt
 */
class DiedOfficerDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DiedOfficerDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, diedDate, designationWhenDied, RegistrationNo, isPromoted, promotedDesignation, promotedDate, lastWorkedPlace, lastWorkedDivision', 'required'),
			array('officerId', 'numerical', 'integerOnly'=>true),
			array('isPromoted', 'length', 'max'=>1),
			array('createdAt, updatedAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, diedDate, designationWhenDied, RegistrationNo, isPromoted, promotedDesignation, promotedDate, lastWorkedPlace, lastWorkedDivision, createdAt, updatedAt', 'safe', 'on'=>'search'),
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
    //
    //public function beforeSave()
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
        $History = new DiedOfficerDetailsHistory();
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
    'officerId' => Yii::t('site', 'Officer'),
    'diedDate' => Yii::t('site', 'Died Date'),
    'designationWhenDied' => Yii::t('site', 'Designation When Died'),
    'RegistrationNo' => Yii::t('site', 'Registration No'),
    'isPromoted' => Yii::t('site', 'Is Promoted'),
    'promotedDesignation' => Yii::t('site', 'Promoted Designation'),
    'promotedDate' => Yii::t('site', 'Promoted Date'),
    'lastWorkedPlace' => Yii::t('site', 'Last Worked Place'),
    'lastWorkedDivision' => Yii::t('site', 'Last Worked Division'),
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
		$criteria->compare('officerId',$this->officerId);
		$criteria->compare('diedDate',$this->diedDate,true);
		$criteria->compare('designationWhenDied',$this->designationWhenDied,true);
		$criteria->compare('RegistrationNo',$this->RegistrationNo,true);
		$criteria->compare('isPromoted',$this->isPromoted,true);
		$criteria->compare('promotedDesignation',$this->promotedDesignation,true);
		$criteria->compare('promotedDate',$this->promotedDate,true);
		$criteria->compare('lastWorkedPlace',$this->lastWorkedPlace,true);
		$criteria->compare('lastWorkedDivision',$this->lastWorkedDivision,true);
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
	 * @return DiedOfficerDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getBool(){
        return array('1'=>Yii::t('site', 'Yes'), '0'=>Yii::t('site', 'No'));
    }
}

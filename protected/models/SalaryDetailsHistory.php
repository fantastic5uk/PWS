<?php

/**
 * This is the model class for table "SalaryDetailsHistory".
 *
 * The followings are the available columns in table 'SalaryDetailsHistory':
 * @property integer $id
 * @property integer $officerId
 * @property integer $salaryDetailsId
 * @property string $type
 * @property string $isRecevingSalary
 * @property string $salaryRecevingPlace
 * @property string $salaryStartDate
 * @property string $salaryEndDate
 * @property string $basic
 * @property string $bonus
 * @property string $totalSalary
 * @property string $salaryReceivingBy
 * @property string $isRecevingPension
 * @property string $pensionNo
 * @property string $pensionRecevingPlace
 * @property string $pensionAmount
 * @property integer $pensionReceivingBy
 * @property string $pensionStartDate
 * @property string $isRecevingDisabledPension
 * @property string $disabledPensionStartDate
 * @property string $totalDisabledPensionAmount
 * @property string $disabledPensionReceivingPlace
 * @property string $disabledPensionEndDate
 * @property string $isRecevingBonus
 * @property string $bonusStartDate
 * @property string $bonusEndDate
 * @property string $bonusTotalAmount
 * @property string $bonusRecevingPlace
 * @property string $createdAt
 *
 * The followings are the available model relations:
 * @property Salarydetails $salaryDetails
 * @property Officer $officer
 */
class SalaryDetailsHistory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SalaryDetailsHistory';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('officerId, salaryDetailsId, type, isRecevingSalary, salaryRecevingPlace, salaryStartDate, salaryEndDate, basic, bonus, totalSalary, salaryReceivingBy, isRecevingPension, pensionNo, pensionRecevingPlace, pensionAmount, pensionReceivingBy, pensionStartDate, isRecevingDisabledPension, disabledPensionStartDate, totalDisabledPensionAmount, disabledPensionReceivingPlace, disabledPensionEndDate, isRecevingBonus, bonusStartDate, bonusEndDate, bonusTotalAmount, bonusRecevingPlace', 'required'),
			array('officerId, salaryDetailsId, pensionReceivingBy', 'numerical', 'integerOnly'=>true),
			array('type, isRecevingSalary, isRecevingPension, isRecevingDisabledPension, isRecevingBonus', 'length', 'max'=>1),
			array('createdAt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, officerId, salaryDetailsId, type, isRecevingSalary, salaryRecevingPlace, salaryStartDate, salaryEndDate, basic, bonus, totalSalary, salaryReceivingBy, isRecevingPension, pensionNo, pensionRecevingPlace, pensionAmount, pensionReceivingBy, pensionStartDate, isRecevingDisabledPension, disabledPensionStartDate, totalDisabledPensionAmount, disabledPensionReceivingPlace, disabledPensionEndDate, isRecevingBonus, bonusStartDate, bonusEndDate, bonusTotalAmount, bonusRecevingPlace, createdAt', 'safe', 'on'=>'search'),
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
			'salaryDetails' => array(self::BELONGS_TO, 'Salarydetails', 'salaryDetailsId'),
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
    'salaryDetailsId' => Yii::t('site', 'Salary Details'),
    'type' => Yii::t('site', 'Type'),
    'isRecevingSalary' => Yii::t('site', 'Is Receving Salary'),
    'salaryRecevingPlace' => Yii::t('site', 'Salary Receving Place'),
    'salaryStartDate' => Yii::t('site', 'Salary Start Date'),
    'salaryEndDate' => Yii::t('site', 'Salary End Date'),
    'basic' => Yii::t('site', 'Basic'),
    'bonus' => Yii::t('site', 'Bonus'),
    'totalSalary' => Yii::t('site', 'Total Salary'),
    'salaryReceivingBy' => Yii::t('site', 'Salary Receiving By'),
    'isRecevingPension' => Yii::t('site', 'Is Receving Pension'),
    'pensionNo' => Yii::t('site', 'Pension No'),
    'pensionRecevingPlace' => Yii::t('site', 'Pension Receving Place'),
    'pensionAmount' => Yii::t('site', 'Pension Amount'),
    'pensionReceivingBy' => Yii::t('site', 'Pension Receiving By'),
    'pensionStartDate' => Yii::t('site', 'Pension Start Date'),
    'isRecevingDisabledPension' => Yii::t('site', 'Is Receving Disabled Pension'),
    'disabledPensionStartDate' => Yii::t('site', 'Disabled Pension Start Date'),
    'totalDisabledPensionAmount' => Yii::t('site', 'Total Disabled Pension Amount'),
    'disabledPensionReceivingPlace' => Yii::t('site', 'Disabled Pension Receiving Place'),
    'disabledPensionEndDate' => Yii::t('site', 'Disabled Pension End Date'),
    'isRecevingBonus' => Yii::t('site', 'Is Receving Bonus'),
    'bonusStartDate' => Yii::t('site', 'Bonus Start Date'),
    'bonusEndDate' => Yii::t('site', 'Bonus End Date'),
    'bonusTotalAmount' => Yii::t('site', 'Bonus Total Amount'),
    'bonusRecevingPlace' => Yii::t('site', 'Bonus Receving Place'),
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
		$criteria->compare('salaryDetailsId',$this->salaryDetailsId);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('isRecevingSalary',$this->isRecevingSalary,true);
		$criteria->compare('salaryRecevingPlace',$this->salaryRecevingPlace,true);
		$criteria->compare('salaryStartDate',$this->salaryStartDate,true);
		$criteria->compare('salaryEndDate',$this->salaryEndDate,true);
		$criteria->compare('basic',$this->basic,true);
		$criteria->compare('bonus',$this->bonus,true);
		$criteria->compare('totalSalary',$this->totalSalary,true);
		$criteria->compare('salaryReceivingBy',$this->salaryReceivingBy,true);
		$criteria->compare('isRecevingPension',$this->isRecevingPension,true);
		$criteria->compare('pensionNo',$this->pensionNo,true);
		$criteria->compare('pensionRecevingPlace',$this->pensionRecevingPlace,true);
		$criteria->compare('pensionAmount',$this->pensionAmount,true);
		$criteria->compare('pensionReceivingBy',$this->pensionReceivingBy);
		$criteria->compare('pensionStartDate',$this->pensionStartDate,true);
		$criteria->compare('isRecevingDisabledPension',$this->isRecevingDisabledPension,true);
		$criteria->compare('disabledPensionStartDate',$this->disabledPensionStartDate,true);
		$criteria->compare('totalDisabledPensionAmount',$this->totalDisabledPensionAmount,true);
		$criteria->compare('disabledPensionReceivingPlace',$this->disabledPensionReceivingPlace,true);
		$criteria->compare('disabledPensionEndDate',$this->disabledPensionEndDate,true);
		$criteria->compare('isRecevingBonus',$this->isRecevingBonus,true);
		$criteria->compare('bonusStartDate',$this->bonusStartDate,true);
		$criteria->compare('bonusEndDate',$this->bonusEndDate,true);
		$criteria->compare('bonusTotalAmount',$this->bonusTotalAmount,true);
		$criteria->compare('bonusRecevingPlace',$this->bonusRecevingPlace,true);
		$criteria->compare('createdAt',$this->createdAt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SalaryDetailsHistory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

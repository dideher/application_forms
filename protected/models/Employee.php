<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $am
 * @property string $name
 * @property string $surname
 * @property string $afm
 * @property integer $school_id
 * @property string $father_name
 * @property string $specialization
 * @property string $school_name
 *
 * The followings are the available model relations:
 * @property Secondment[] $secondments
 */
class Employee extends CActiveRecord
{
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
			array('am, name, surname, specialization', 'required'),
			array('am, school_id', 'numerical', 'integerOnly'=>true),
			array('name, father_name, specialization', 'length', 'max'=>30),
			array('surname', 'length', 'max'=>60),
			array('afm', 'length', 'max'=>10),
			array('school_name', 'length', 'max'=>40),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('am, name, surname, afm, school_id, father_name, specialization, school_name', 'safe', 'on'=>'search'),
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
			'secondments' => array(self::HAS_MANY, 'Secondment', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'am' => 'Am',
			'name' => 'Name',
			'surname' => 'Surname',
			'afm' => 'Afm',
			'school_id' => 'School',
			'father_name' => 'Father Name',
			'specialization' => 'Specialization',
			'school_name' => 'School Name',
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

		$criteria->compare('am',$this->am);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('afm',$this->afm,true);
		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('father_name',$this->father_name,true);
		$criteria->compare('specialization',$this->specialization,true);
		$criteria->compare('school_name',$this->school_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

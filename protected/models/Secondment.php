<?php

/**
 * This is the model class for table "secondment".
 *
 * The followings are the available columns in table 'secondment':
 * @property integer $id
 * @property string $oik_katastasi
 * @property integer $paidia
 * @property integer $eksosomatiki
 * @property string $ygeia_idios
 * @property string $ygeia_syzigos
 * @property string $ygeia_paidi
 * @property string $ygeia_adelfos
 * @property string $entopiotita
 * @property string $synyphrethsh
 * @property string $spoudes
 * @property string $goneis_dhmos
 * @property string $goneis_ygeia
 * @property string $protaireotita
 * @property string $parathrhseis
 * @property integer $employee_id
 *
 * The followings are the available model relations:
 * @property Employee $employee
 */
class Secondment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'secondment';
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
			array('paidia, eksosomatiki, employee_id', 'numerical', 'integerOnly'=>true),
			array('oik_katastasi', 'length', 'max'=>60),
			array('ygeia_idios, ygeia_syzigos, ygeia_paidi, ygeia_adelfos, entopiotita, synyphrethsh, spoudes, goneis_dhmos, goneis_ygeia', 'length', 'max'=>15),
			array('protaireotita', 'length', 'max'=>30),
			array('parathrhseis', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, oik_katastasi, paidia, eksosomatiki, ygeia_idios, ygeia_syzigos, ygeia_paidi, ygeia_adelfos, entopiotita, synyphrethsh, spoudes, goneis_dhmos, goneis_ygeia, protaireotita, parathrhseis, employee_id', 'safe', 'on'=>'search'),
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
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'oik_katastasi' => 'Oik Katastasi',
			'paidia' => 'Paidia',
			'eksosomatiki' => 'Eksosomatiki',
			'ygeia_idios' => 'Ygeia Idios',
			'ygeia_syzigos' => 'Ygeia Syzigos',
			'ygeia_paidi' => 'Ygeia Paidi',
			'ygeia_adelfos' => 'Ygeia Adelfos',
			'entopiotita' => 'Entopiotita',
			'synyphrethsh' => 'Synyphrethsh',
			'spoudes' => 'Spoudes',
			'goneis_dhmos' => 'Goneis Dhmos',
			'goneis_ygeia' => 'Goneis Ygeia',
			'protaireotita' => 'Protaireotita',
			'parathrhseis' => 'Parathrhseis',
			'employee_id' => 'Employee',
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
		$criteria->compare('oik_katastasi',$this->oik_katastasi,true);
		$criteria->compare('paidia',$this->paidia);
		$criteria->compare('eksosomatiki',$this->eksosomatiki);
		$criteria->compare('ygeia_idios',$this->ygeia_idios,true);
		$criteria->compare('ygeia_syzigos',$this->ygeia_syzigos,true);
		$criteria->compare('ygeia_paidi',$this->ygeia_paidi,true);
		$criteria->compare('ygeia_adelfos',$this->ygeia_adelfos,true);
		$criteria->compare('entopiotita',$this->entopiotita,true);
		$criteria->compare('synyphrethsh',$this->synyphrethsh,true);
		$criteria->compare('spoudes',$this->spoudes,true);
		$criteria->compare('goneis_dhmos',$this->goneis_dhmos,true);
		$criteria->compare('goneis_ygeia',$this->goneis_ygeia,true);
		$criteria->compare('protaireotita',$this->protaireotita,true);
		$criteria->compare('parathrhseis',$this->parathrhseis,true);
		$criteria->compare('employee_id',$this->employee_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Secondment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

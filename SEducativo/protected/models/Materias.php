<?php

/**
 * This is the model class for table "materias".
 *
 * The followings are the available columns in table 'materias':
 * @property string $Materia
 * @property string $Codigo
 * @property string $Unidad_Credito
 * @property string $Requisito
 * @property integer $Id
 * @property string $Pensum
 * @property string $Semestre
 * @property string $Num_Materia
 */
class Materias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'materias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Materia, Codigo, Unidad_Credito, Requisito, Pensum, Semestre, Num_Materia', 'required'),
			array('Materia, Codigo, Unidad_Credito, Requisito', 'length', 'max'=>50),
			array('Pensum, Num_Materia', 'length', 'max'=>20),
			array('Semestre', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Materia, Codigo, Unidad_Credito, Requisito, Id, Pensum, Semestre, Num_Materia', 'safe', 'on'=>'search'),
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
			'Materia' => 'Materia',
			'Codigo' => 'Codigo',
			'Unidad_Credito' => 'Unidad Credito',
			'Requisito' => 'Requisito',
			'Id' => 'ID',
			'Pensum' => 'Pensum',
			'Semestre' => 'Semestre',
			'Num_Materia' => 'Num Materia',
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

		$criteria->compare('Materia',$this->Materia,true);
		$criteria->compare('Codigo',$this->Codigo,true);
		$criteria->compare('Unidad_Credito',$this->Unidad_Credito,true);
		$criteria->compare('Requisito',$this->Requisito,true);
		$criteria->compare('Id',$this->Id);
		$criteria->compare('Pensum',$this->Pensum,true);
		$criteria->compare('Semestre',$this->Semestre,true);
		$criteria->compare('Num_Materia',$this->Num_Materia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Materias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

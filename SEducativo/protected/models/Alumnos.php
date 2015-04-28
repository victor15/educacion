<?php

/**
 * This is the model class for table "alumnos".
 *
 * The followings are the available columns in table 'alumnos':
 * @property string $Nombre
 * @property string $Nombre2
 * @property string $Apellido
 * @property string $Apellido2
 * @property string $Dirreccion
 * @property string $Lugar_Nacimiento
 * @property string $Fecha_Nacimiento
 * @property string $Nacionalidad
 * @property string $Carrera
 * @property string $Edad
 * @property string $Sexo
 * @property string $Semestre
 * @property string $Expediente
 * @property string $Cedula
 * @property string $Telefono
 * @property string $Correo
 * @property integer $Id
 */
class Alumnos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumnos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Nombre2, Apellido, Apellido2, Dirreccion, Lugar_Nacimiento, Fecha_Nacimiento, Nacionalidad, Carrera, Edad, Sexo, Semestre, Expediente, Cedula, Telefono, Correo', 'required'),
			array('Nombre, Nombre2, Apellido, Apellido2, Nacionalidad, Carrera, Edad, Sexo, Semestre, Expediente, Cedula, Telefono', 'length', 'max'=>50),
			array('Correo', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nombre, Nombre2, Apellido, Apellido2, Dirreccion, Lugar_Nacimiento, Fecha_Nacimiento, Nacionalidad, Carrera, Edad, Sexo, Semestre, Expediente, Cedula, Telefono, Correo, Id', 'safe', 'on'=>'search'),
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
			'Nombre' => 'Nombre',
			'Nombre2' => 'Nombre2',
			'Apellido' => 'Apellido',
			'Apellido2' => 'Apellido2',
			'Dirreccion' => 'Dirreccion',
			'Lugar_Nacimiento' => 'Lugar Nacimiento',
			'Fecha_Nacimiento' => 'Fecha Nacimiento',
			'Nacionalidad' => 'Nacionalidad',
			'Carrera' => 'Carrera',
			'Edad' => 'Edad',
			'Sexo' => 'Sexo',
			'Semestre' => 'Semestre',
			'Expediente' => 'Expediente',
			'Cedula' => 'Cedula',
			'Telefono' => 'Telefono',
			'Correo' => 'Correo',
			'Id' => 'ID',
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

		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Nombre2',$this->Nombre2,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Apellido2',$this->Apellido2,true);
		$criteria->compare('Dirreccion',$this->Dirreccion,true);
		$criteria->compare('Lugar_Nacimiento',$this->Lugar_Nacimiento,true);
		$criteria->compare('Fecha_Nacimiento',$this->Fecha_Nacimiento,true);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('Carrera',$this->Carrera,true);
		$criteria->compare('Edad',$this->Edad,true);
		$criteria->compare('Sexo',$this->Sexo,true);
		$criteria->compare('Semestre',$this->Semestre,true);
		$criteria->compare('Expediente',$this->Expediente,true);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Id',$this->Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumnos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "profesores".
 *
 * The followings are the available columns in table 'profesores':
 * @property string $Nombre * @property string $Nombre2
 * @property string $Apellido
 * @property string $Apellido2
 * @property string $Dirreccion
 * @property string $Lugar_Nacimiento
 * @property string $Fecha_Nacimiento
 * @property string $RIF
 * @property string $Edad
 * @property string $Sexo
 * @property string $Nacionalidad
 * @property string $Codigo_Postal
 * @property string $Celular
 * @property string $Cedula
 * @property string $Telefono
 * @property string $Correo
 * @property string $Edo_Civil
 * @property string $Habilidad_Motriz
 * @property string $SSO
 * @property string $Nro_Cuenta
 * @property string $Banco
 * @property string $Tipo_Cuenta
 * @property integer $Id
 */
class Profesores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Nombre2, Apellido, Apellido2, Dirreccion, Lugar_Nacimiento, Fecha_Nacimiento, RIF, Edad, Sexo, Nacionalidad, Codigo_Postal, Celular, Cedula, Telefono, Correo, Edo_Civil, Habilidad_Motriz, SSO, Nro_Cuenta, Banco, Tipo_Cuenta', 'required'),
			array('Nombre, Nombre2, Apellido, Apellido2, Lugar_Nacimiento, Fecha_Nacimiento, RIF, Edad, Sexo, Nacionalidad, Codigo_Postal, Celular, Cedula, Telefono, Edo_Civil, Habilidad_Motriz, SSO, Nro_Cuenta, Banco, Tipo_Cuenta', 'length', 'max'=>50),
			array('Correo', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nombre, Nombre2, Apellido, Apellido2, Dirreccion, Lugar_Nacimiento, Fecha_Nacimiento, RIF, Edad, Sexo, Nacionalidad, Codigo_Postal, Celular, Cedula, Telefono, Correo, Edo_Civil, Habilidad_Motriz, SSO, Nro_Cuenta, Banco, Tipo_Cuenta, Id', 'safe', 'on'=>'search'),
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
			'RIF' => 'Rif',
			'Edad' => 'Edad',
			'Sexo' => 'Sexo',
			'Nacionalidad' => 'Nacionalidad',
			'Codigo_Postal' => 'Codigo Postal',
			'Celular' => 'Celular',
			'Cedula' => 'Cedula',
			'Telefono' => 'Telefono',
			'Correo' => 'Correo',
			'Edo_Civil' => 'Edo Civil',
			'Habilidad_Motriz' => 'Habilidad Motriz',
			'SSO' => 'Sso',
			'Nro_Cuenta' => 'Nro Cuenta',
			'Banco' => 'Banco',
			'Tipo_Cuenta' => 'Tipo Cuenta',
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
		$criteria->compare('RIF',$this->RIF,true);
		$criteria->compare('Edad',$this->Edad,true);
		$criteria->compare('Sexo',$this->Sexo,true);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('Codigo_Postal',$this->Codigo_Postal,true);
		$criteria->compare('Celular',$this->Celular,true);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('Edo_Civil',$this->Edo_Civil,true);
		$criteria->compare('Habilidad_Motriz',$this->Habilidad_Motriz,true);
		$criteria->compare('SSO',$this->SSO,true);
		$criteria->compare('Nro_Cuenta',$this->Nro_Cuenta,true);
		$criteria->compare('Banco',$this->Banco,true);
		$criteria->compare('Tipo_Cuenta',$this->Tipo_Cuenta,true);
		$criteria->compare('Id',$this->Id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

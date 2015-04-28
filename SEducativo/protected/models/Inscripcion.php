<?php

/**
 * This is the model class for table "inscripcion".
 *
 * The followings are the available columns in table 'inscripcion':
 * @property string $Usuario
 * @property string $Tipo_Inscripcion
 * @property string $Periodo_Academico
 * @property string $Apellidos_Nombres
 * @property string $Direccion
 * @property string $Lugar_Nac
 * @property string $Nacionalidad
 * @property string $Carrera
 * @property string $Edad
 * @property string $Sexo
 * @property string $Semestre
 * @property string $Fecha_Nac
 * @property string $Tipo_Alumno
 * @property string $N_Expediente
 * @property string $Cedula
 * @property string $N_Telefono
 * @property string $Correo
 * @property integer $id
 * @property string $Geometria_Descriptiva
 * @property string $Turno_Geometria
 * @property string $Seccion_Geometria
 * @property string $Dibujo_General
 * @property string $Turno_Dibujo
 * @property string $Seccion_Dibujo
 * @property string $Ingles_Tecnico
 * @property string $Turno_Ingles
 * @property string $Seccion_Ingles
 * @property string $Lenguaje_y_Comunicacion
 * @property string $Turno_Lenguaje
 * @property string $Seccion_Lenguaje
 * @property string $Matematica_I
 * @property string $Turno_Matematica
 * @property string $Seccion_Matematica
 * @property string $Met_de_la_Investigacion
 * @property string $Turno_Metodologia
 * @property string $Seccion_Metodologia
 * @property string $Intr_a_la_Informatica
 * @property string $Turno_Introduccion
 * @property string $Seccion_Introduccion
 */
class Inscripcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario, Tipo_Inscripcion, Periodo_Academico, Apellidos_Nombres, Direccion, Lugar_Nac, Nacionalidad, Carrera, Edad, Sexo, Semestre, Fecha_Nac, Tipo_Alumno, N_Expediente, Cedula, N_Telefono, Correo, Geometria_Descriptiva, Dibujo_General, Ingles_Tecnico, Lenguaje_y_Comunicacion, Matematica_I, Met_de_la_Investigacion, Intr_a_la_Informatica', 'required'),
			array('Usuario', 'length', 'max'=>40),
			array('Tipo_Inscripcion, Nacionalidad, Carrera, Edad, Geometria_Descriptiva, Dibujo_General, Ingles_Tecnico, Lenguaje_y_Comunicacion, Matematica_I, Met_de_la_Investigacion, Intr_a_la_Informatica', 'length', 'max'=>50),
			array('Periodo_Academico, Apellidos_Nombres', 'length', 'max'=>70),
			array('Lugar_Nac', 'length', 'max'=>60),
			array('Sexo', 'length', 'max'=>100),
			array('Semestre, Tipo_Alumno, Cedula, Turno_Geometria, Seccion_Geometria, Turno_Dibujo, Seccion_Dibujo, Turno_Ingles, Seccion_Ingles, Turno_Lenguaje, Seccion_Lenguaje, Turno_Matematica, Seccion_Matematica, Turno_Metodologia, Seccion_Metodologia, Turno_Introduccion, Seccion_Introduccion', 'length', 'max'=>20),
			array('N_Expediente', 'length', 'max'=>10),
			array('N_Telefono', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Usuario, Tipo_Inscripcion, Periodo_Academico, Apellidos_Nombres, Direccion, Lugar_Nac, Nacionalidad, Carrera, Edad, Sexo, Semestre, Fecha_Nac, Tipo_Alumno, N_Expediente, Cedula, N_Telefono, Correo, id, Geometria_Descriptiva, Turno_Geometria, Seccion_Geometria, Dibujo_General, Turno_Dibujo, Seccion_Dibujo, Ingles_Tecnico, Turno_Ingles, Seccion_Ingles, Lenguaje_y_Comunicacion, Turno_Lenguaje, Seccion_Lenguaje, Matematica_I, Turno_Matematica, Seccion_Matematica, Met_de_la_Investigacion, Turno_Metodologia, Seccion_Metodologia, Intr_a_la_Informatica, Turno_Introduccion, Seccion_Introduccion', 'safe', 'on'=>'search'),
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
			'Usuario' => 'Usuario',
			'Tipo_Inscripcion' => 'Tipo Inscripcion',
			'Periodo_Academico' => 'Periodo Academico',
			'Apellidos_Nombres' => 'Apellidos Nombres',
			'Direccion' => 'Direccion',
			'Lugar_Nac' => 'Lugar Nac',
			'Nacionalidad' => 'Nacionalidad',
			'Carrera' => 'Carrera',
			'Edad' => 'Edad',
			'Sexo' => 'Sexo',
			'Semestre' => 'Semestre',
			'Fecha_Nac' => 'Fecha Nac',
			'Tipo_Alumno' => 'Tipo Alumno',
			'N_Expediente' => 'N Expediente',
			'Cedula' => 'Cedula',
			'N_Telefono' => 'N Telefono',
			'Correo' => 'Correo',
			'id' => 'ID',
			'Geometria_Descriptiva' => 'Geometria Descriptiva',
			'Turno_Geometria' => 'Turno Geometria',
			'Seccion_Geometria' => 'Seccion Geometria',
			'Dibujo_General' => 'Dibujo General',
			'Turno_Dibujo' => 'Turno Dibujo',
			'Seccion_Dibujo' => 'Seccion Dibujo',
			'Ingles_Tecnico' => 'Ingles Tecnico',
			'Turno_Ingles' => 'Turno Ingles',
			'Seccion_Ingles' => 'Seccion Ingles',
			'Lenguaje_y_Comunicacion' => 'Lenguaje Y Comunicacion',
			'Turno_Lenguaje' => 'Turno Lenguaje',
			'Seccion_Lenguaje' => 'Seccion Lenguaje',
			'Matematica_I' => 'Matematica I',
			'Turno_Matematica' => 'Turno Matematica',
			'Seccion_Matematica' => 'Seccion Matematica',
			'Met_de_la_Investigacion' => 'Met De La Investigacion',
			'Turno_Metodologia' => 'Turno Metodologia',
			'Seccion_Metodologia' => 'Seccion Metodologia',
			'Intr_a_la_Informatica' => 'Intr A La Informatica',
			'Turno_Introduccion' => 'Turno Introduccion',
			'Seccion_Introduccion' => 'Seccion Introduccion',
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

		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Tipo_Inscripcion',$this->Tipo_Inscripcion,true);
		$criteria->compare('Periodo_Academico',$this->Periodo_Academico,true);
		$criteria->compare('Apellidos_Nombres',$this->Apellidos_Nombres,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Lugar_Nac',$this->Lugar_Nac,true);
		$criteria->compare('Nacionalidad',$this->Nacionalidad,true);
		$criteria->compare('Carrera',$this->Carrera,true);
		$criteria->compare('Edad',$this->Edad,true);
		$criteria->compare('Sexo',$this->Sexo,true);
		$criteria->compare('Semestre',$this->Semestre,true);
		$criteria->compare('Fecha_Nac',$this->Fecha_Nac,true);
		$criteria->compare('Tipo_Alumno',$this->Tipo_Alumno,true);
		$criteria->compare('N_Expediente',$this->N_Expediente,true);
		$criteria->compare('Cedula',$this->Cedula,true);
		$criteria->compare('N_Telefono',$this->N_Telefono,true);
		$criteria->compare('Correo',$this->Correo,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('Geometria_Descriptiva',$this->Geometria_Descriptiva,true);
		$criteria->compare('Turno_Geometria',$this->Turno_Geometria,true);
		$criteria->compare('Seccion_Geometria',$this->Seccion_Geometria,true);
		$criteria->compare('Dibujo_General',$this->Dibujo_General,true);
		$criteria->compare('Turno_Dibujo',$this->Turno_Dibujo,true);
		$criteria->compare('Seccion_Dibujo',$this->Seccion_Dibujo,true);
		$criteria->compare('Ingles_Tecnico',$this->Ingles_Tecnico,true);
		$criteria->compare('Turno_Ingles',$this->Turno_Ingles,true);
		$criteria->compare('Seccion_Ingles',$this->Seccion_Ingles,true);
		$criteria->compare('Lenguaje_y_Comunicacion',$this->Lenguaje_y_Comunicacion,true);
		$criteria->compare('Turno_Lenguaje',$this->Turno_Lenguaje,true);
		$criteria->compare('Seccion_Lenguaje',$this->Seccion_Lenguaje,true);
		$criteria->compare('Matematica_I',$this->Matematica_I,true);
		$criteria->compare('Turno_Matematica',$this->Turno_Matematica,true);
		$criteria->compare('Seccion_Matematica',$this->Seccion_Matematica,true);
		$criteria->compare('Met_de_la_Investigacion',$this->Met_de_la_Investigacion,true);
		$criteria->compare('Turno_Metodologia',$this->Turno_Metodologia,true);
		$criteria->compare('Seccion_Metodologia',$this->Seccion_Metodologia,true);
		$criteria->compare('Intr_a_la_Informatica',$this->Intr_a_la_Informatica,true);
		$criteria->compare('Turno_Introduccion',$this->Turno_Introduccion,true);
		$criteria->compare('Seccion_Introduccion',$this->Seccion_Introduccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $afm;
	public $am;
	public $namePrefix;
	public $surnamePrefix;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('afm, am, namePrefix, surnamePrefix', 'required'),
		);

	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
			'am'=>'AM',
			'afm'=>'ΑΦΜ',
			'namePrefix'=>'Όνομα',
			'surnamePrefix'=>'Επώνυμο',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity();
			$this->_identity->am = $this->am;
			$this->_identity->afm = $this->afm;
			$this->_identity->namePrefix = $this->namePrefix;
			$this->_identity->surnamePrefix = $this->surnamePrefix;

			if(!$this->_identity->authenticate())
				$this->addError('password','Incorrect username or password.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity();
			$this->_identity->am = $this->am;
			$this->_identity->afm = $this->afm;
			$this->_identity->namePrefix = $this->namePrefix;
			$this->_identity->surnamePrefix = $this->surnamePrefix;
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			//$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			$duration = 0;
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}

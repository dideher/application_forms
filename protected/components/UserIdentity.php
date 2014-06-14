<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CBaseUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;

	public $am;

	public $afm;

	public $namePrefix;

	public $surnamePrefix;

	public function authenticate() {
		$record=Employee::model()->findByAttributes(
		array(
			'afm'=>$this->afm,
			'am'=>$this->am,
			));

		if ($record === null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		} else {
			$this->_id=$record['am'];
			$this->setState('title', $record['name']);
      $this->errorCode=self::ERROR_NONE;
		}

		return !$this->errorCode;

		// if(!isset($users[$this->username]))
		// 	$this->errorCode=self::ERROR_USERNAME_INVALID;
		// elseif($users[$this->username]!==$this->password)
		// 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		// else
		// 	$this->errorCode=self::ERROR_NONE;
		// return !$this->errorCode;
	}

	public function getId(){
		return $this->_id;
  }
}

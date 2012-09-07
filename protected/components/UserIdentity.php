<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    const ERROR_EMAIL_INVALID=1;

    public $email;
    public $password;
    private $_id;

    public function __construct($email,$password)
    {
        $this->email = $email;
        $this->password = $password;
    }
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $model = Users::model()->find('email=?',array($this->email));

		if($model === null)
			$this->errorCode=self::ERROR_EMAIL_INVALID;
		else if(!$model->validatePassword($this->password, $model->created))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
            $this->_id = $model->id;
            $this->errorCode=self::ERROR_NONE;
        }
		return !$this->errorCode;
	}
}
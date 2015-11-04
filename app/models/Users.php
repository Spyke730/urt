<?php

namespace EstadatSAS\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Validator\Uniqueness;
use Phalcon\Mvc\Model\Validator\Email as Email;

/**
 * EstadatSAS\Models\Users
 * All the users registered in the application
 */
class Users extends Model
{

	/**
	 *
	 * @var integer
	 */
	public $id;

	/**
	 *
	 * @var string
	 */
	public $email;

	/**
	 *
	 * @var string
	 */
	public $registro;

	/**
	 *
	 * @var string
	 */
	public $registro_el;

	/**
	 *
	 * @var string
	 */
	public $recordo_el;

	/**
	 *
	 * @var integer
	 */
	public $vecesRecordo;

	/**
	 *
	 * @var string
	 */
	public $mustChangePassword;

	/**
	 *
	 * @var integer
	 */
	public $profilesId;

	/**
	 *
	 * @var string
	 */
	public $banned;

	/**
	 *
	 * @var string
	 */
	public $suspended;

	/**
	 *
	 * @var string
	 */
	public $active;

	/**
	 *
	 * @var string
	 */
	public $creado_el;

	/**
	 * Validations and business logic
	 */
	public function validation()
	{

		$this->validate(
			new Email(
				array(
					'field'    => 'email',
					'required' => true,
				)
			)
		);
		if ($this->validationHasFailed() == true) {
			return false;
		}
	}

	/**
	 * Validate that emails are unique across users
	 
	public function validation()
	{
		$this->validate(new Uniqueness(array(
			"field" => "email",
			"message" => "El correo electrónico ya se encuentra registrado"
		)));

		return $this->validationHasFailed() != true;
	}
	*/

	/**
	 * Independent Column Mapping.
	 
	public function columnMap()
	{
		return array(
			'id' => 'id', 
			'email' => 'email', 
			'registro' => 'registro', 
			'registro_el' => 'registro_el', 
			'recordo_el' => 'recordo_el', 
			'vecesRecordo' => 'vecesRecordo', 
			'mustChangePassword' => 'mustChangePassword', 
			'profilesId' => 'profilesId', 
			'banned' => 'banned', 
			'suspended' => 'suspended', 
			'active' => 'active', 
			'creado_el' => 'creado_el'
		);
	}
	*/

	/**
	 * Before create the user assign a password
	 */

	public function beforeValidationOnCreate()
	{
		if (empty($this->password)) {

			// Generate a plain temporary password
			$tempPassword = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(openssl_random_pseudo_bytes(12)));

			// The user must change its password in first login
			$this->mustChangePassword = 'Y';

			// Use this password as default
			$this->password = $this->getDI()
				->getSecurity()
				->hash($tempPassword);
		} else {
			// The user must not change its password in first login
			$this->mustChangePassword = 'N';
		}

		// The account must be confirmed via e-mail
		$this->active = 'N';

		// The account is not suspended by default
		$this->suspended = 'N';

		// The account is not banned by default
		$this->banned = 'N';
	}

	/**
	 * Send a confirmation e-mail to the user if the account is not active
	 */
	public function afterSave()
	{
		if ($this->active == 'N') {

			$emailConfirmation = new EmailConfirmations();

			$emailConfirmation->usersId = $this->id;

			if ($emailConfirmation->save()) {
				$this->getDI()
					->getFlash()
					->notice('Un correo de confirmación ha sido enviado a:  ' . $this->email);
			}
		}
	}

	public function initialize()
	{
		$this->skipAttributesOnCreate(array('id', 'creado_el'));

		$this->belongsTo('profilesId', 'EstadatSAS\Models\Profiles', 'id', array(
			'alias' => 'profile',
			'reusable' => true
		));

		$this->hasMany('id', 'EstadatSAS\Models\SuccessLogins', 'usersId', array(
			'alias' => 'successLogins',
			'foreignKey' => array(
				'message' => 'El usuario no puede ser eliminado porque tiene actividad en el dashboard'
			)
		));

		$this->hasMany('id', 'EstadatSAS\Models\PasswordChanges', 'usersId', array(
			'alias' => 'passwordChanges',
			'foreignKey' => array(
				'message' => 'El usuario no puede ser eliminado porque tiene actividad en el dashboard'
			)
		));

		$this->hasMany('id', 'EstadatSAS\Models\ResetPasswords', 'usersId', array(
			'alias' => 'resetPasswords',
			'foreignKey' => array(
				'message' => 'El usuario no puede ser eliminado porque tiene actividad en el dashboard'
			)
		));
	}

}

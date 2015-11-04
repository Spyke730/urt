<?php
namespace EstadatSAS\Controllers;

use EstadatSAS\Models\EmailConfirmations;
use EstadatSAS\Models\ResetPasswords;

/**
 * UserControlController
 * Provides help to users to confirm their passwords or reset them
 */
class UserControlController extends ControllerBase
{

	public function initialize()
	{
		if ($this->session->has('auth-identity')) {
			$this->view->setTemplateBefore('private');
		}
	}

	public function indexAction()
	{

	}

	/**
	 * Confirms an e-mail, if the user must change thier password then changes it
	 */
	public function confirmEmailAction()
	{
		$code = $this->dispatcher->getParam('code');

		$confirmation = EmailConfirmations::findFirstByCode($code);

		if (!$confirmation) {
			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		if ($confirmation->confirmed != 'N') {
			return $this->dispatcher->forward(array(
				'controller' => 'session',
				'action' => 'login'
			));
		}

		$confirmation->confirmed = 'Y';

		$confirmation->user->active = 'Y';

		/**
		 * Change the confirmation to 'confirmed' and update the user to 'active'
		 */
		if (!$confirmation->save()) {

			foreach ($confirmation->getMessages() as $message) {
				$this->flash->error($message);
			}

			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		/**
		 * Identify the user in the application
		 */
		$this->auth->authUserById($confirmation->user->id);

		/**
		 * Check if the user must change his/her password
		 */
		if ($confirmation->user->mustChangePassword == 'Y') {

			$this->flash->success('El correo fué confirmado. Ahora usted debe cambiar su contraseña');

			return $this->dispatcher->forward(array(
				'controller' => 'users',
				'action' => 'changePassword'
			));
		}

		$this->flash->success('El correo fué confirmado exitosamente');

		return $this->dispatcher->forward(array(
			'controller' => 'users',
			'action' => 'index'
		));
	}

	public function resetPasswordAction()
	{
		$code = $this->dispatcher->getParam('code');

		$resetPassword = ResetPasswords::findFirstByCode($code);

		if (!$resetPassword) {
			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		if ($resetPassword->reset != 'N') {
			return $this->dispatcher->forward(array(
				'controller' => 'session',
				'action' => 'login'
			));
		}

		$resetPassword->reset = 'Y';

		/**
		 * Change the confirmation to 'reset'
		 */
		if (!$resetPassword->save()) {

			foreach ($resetPassword->getMessages() as $message) {
				$this->flash->error($message);
			}

			return $this->dispatcher->forward(array(
				'controller' => 'index',
				'action' => 'index'
			));
		}

		/**
		 * Identify the user in the application
		 */
		$this->auth->authUserById($resetPassword->usersId);

		$this->flash->success('Favor restablezca su contraseña');

		return $this->dispatcher->forward(array(
			'controller' => 'users',
			'action' => 'changePassword'
		));
	}
}

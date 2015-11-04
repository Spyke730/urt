<?php
namespace EstadatSAS\Controllers;

use EstadatSAS\Forms\LoginForm;
use EstadatSAS\Auth\Exception as AuthException;
use EstadatSAS\Models\Users;

/**
 * Controller used handle non-authenticated session actions like login/logout, user signup, and forgotten passwords
 */
class SessionController extends ControllerBase
{

	/**
	 * Default action. Set the public layout (layouts/public.volt)
	 */
	public function initialize()
	{
		$this->view->setTemplateBefore('public');
	}

	public function indexAction()
	{

	}

	/**
	 * Starts a session in the admin backend
	 */
	public function loginAction()
	{
		$form = new LoginForm();

		try {

			if (!$this->request->isPost()) {

				if ($this->auth->hasRememberMe()) {
					return $this->auth->loginWithRememberMe();
				}
			} else {

				if ($form->isValid($this->request->getPost()) == false) {
					foreach ($form->getMessages() as $message) {
						$this->flash->error($message);
					}
				} else {

					$this->auth->check(array(
						'email' => $this->request->getPost('email')
					));

					return $this->response->redirect('encuesta/landingpage');
				}
			}
		} catch (AuthException $e) {
			$this->flash->error($e->getMessage());
		}

		$this->view->form = $form;
	}

	/**
	 * Closes the session
	 */
	public function logoutAction()
	{
		$this->auth->remove();

		return $this->response->redirect('index');
	}
}

<?php
namespace EstadatSAS\Controllers;

use EstadatSAS\Forms\LoginForm;
use EstadatSAS\Auth\Exception as AuthException;
use EstadatSAS\Models\Users;


/**
 * Display the default index page.
 */
class IndexController extends ControllerBase
{

	/**
	 * Default action. Set the public layout (layouts/public.volt)
	 */
	public function indexAction()
	{
		$this->assets
			//->addCss('css/bootstrap.min.css')
			->addCss('css/grayscale.css')
			->addCss('font-awesome/css/font-awesome.min.css');

		$this->view->setTemplateBefore('public');
		$this->tag->prependTitle("Proyectamos Colombia SAS");

		$usr = $this->dispatcher->getParam("us");

		if ( $usr == "session" ){
			$usr = "";
		}
		$this->view->us = $usr;

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

		$this->assets
			//->addJs('js/jquery.js')
			//->addJs('js/bootstrap.min.js')
			//->addJs('js/jquery.easing.min.js')
			->addJs('js/grayscale.js');
		
	}
	
}

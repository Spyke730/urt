<?php

namespace EstadatSAS\Controllers;

use Phalcon\Tag;
use EstadatSAS\Models\Urt;
use EstadatSAS\Models\Users;

class DashboardController extends ControllerBase
{
  public function initialize()
  {
		$this->view->setTemplateBefore('private');
		$cntUrt     = count( Users::find("registro = 'Y'") );

		$this->view->urtTotal  = 1667;
		$this->view->cntUrt       = $cntUrt;

		$this->assets
			 ->addCss('css/AdminLTE.css')
			 ->addCss('css/style.css')
			 ->addCss('css/gsdk-base.css')
			 ->addCss('css/formValidation/formValidation.min.css')
			 ->addCss('bower_components/icheck/skins/minimal/minimal.css')
			 ->addCss('bower_components/bootstrap-select/dist/css/bootstrap-select.css');

		$auth = $this->session->get('auth-identity');

		$proyectonom  = 'Encuesta de satisfacción';
		$this->tag->prependTitle($proyectonom);   

		$this->view->setTemplateBefore('private');

		$this->assets
			 ->addJs('js/plugins/formValidation/formValidation.min.js')
			 ->addJs('js/plugins/formValidation/framework/bootstrap.min.js')
			 ->addJs('bower_components/icheck/icheck.min.js')
			 ->addJs('js/plugins/iCheck/icheck.min.js')        
			 ->addJs('bower_components/bootstrap-select/dist/js/bootstrap-select.js')
			 ->addJs('js/jquery.bootstrap.wizard.js')
			 ->addJs('js/encuesta.js');

  }

  public function indexAction()
  {
		$cntUrt     = count( Users::find("registro = 'Y'") );

		$this->view->urtTotal  = 1667;
		$this->view->cntUrt       = $cntUrt;
  }

}

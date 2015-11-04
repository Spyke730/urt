<?php
namespace EstadatSAS\Controllers;

use Phalcon\Tag;
use Phalcon\Mvc\Model;
use EstadatSAS\Models\Urt;
use EstadatSAS\Models\Users;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

/**
 * EstadatSAS\Controllers\ProyectosController
 * CRUD to manage proyectos
 */
class InformeController extends ControllerBase
{

  /**
   * Default action. Set the private (authenticated) layout (layouts/private.volt)
   */
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

  /**
   * Default action, shows the search form
   */
  public function indexAction()
  {
    $cntUrt     = count( Users::find("registro = 'Y'") );

    $this->view->urtTotal  = 1667;
    $this->view->cntUrt       = $cntUrt;
  }

  /**
   * Searches for Registros
   */
  public function searchAction()
  {
    $numberPage = 1;
    if ($this->request->isPost()) {
      $query = Criteria::fromInput($this->di, 'EstadatSAS\Models\Users', $this->request->getPost());
      $this->persistent->searchParams = $query->getParams();
    } else {
      $numberPage = $this->request->getQuery("page", "int");
    }

    $parameters = array();
    if ($this->persistent->searchParams) {
      $parameters = $this->persistent->searchParams;
    }

    $registros = Users::find($parameters);

    if (count($registros) == 0) {

      $this->flash->notice("La búsqueda no econtró ninguna información del Perfil seleccionado");

      return $this->dispatcher->forward(array(
        "action" => "index"
      ));
    }

    $paginator = new Paginator(array(
      "data" => $registros,
      "limit" => 100,
      "page" => $numberPage
    ));

    $this->view->prycnd = count($registros);

    $this->view->page = $paginator->getPaginate();
  }

  public function recordarAction($email, $pagina)
  {
    $recordatorio = Users::findFirstByEmail($email);
    $veces = $recordatorio->vecesRecordo;
    $veces++;

    //$jacomail = "ejacoboyaya@gmail.com";
    $nombrecorreo = $recordatorio->name;

    $this->getDI()
        ->getMail()
        ->send(array(
        //$jacomail => $nombrecorreo
        $email => $nombrecorreo
        //'ejacoboyaya@gmail.com', 'evaleriayaya@gmail.com', 'luiscarlosyaya@gmail.com'
    ), "Encuesta de Percepcióń frente a la Unidad de Restitución de Tierras", 'confirmation', array(
        'usuario' => $email,
        'password' => $nombrecorreo
    ));
    
    $recordatorio->vecesRecordo = $veces;

    date_default_timezone_set('America/Bogota');
    
    $recordatorio->recordo_el = date("Y-m-d H:i:s");

    if (!$recordatorio->save()) {
        $this->flash->error($recordatorio->getMessages());
    } else {
        $this->flash->success("El aviso se envió exitosamente");
    }
    
    //return $this->response->redirect('informe/search');
    return $this->response->redirect('informe/search?page='.$pagina);
  }
}

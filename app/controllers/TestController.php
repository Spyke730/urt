<?php
namespace EstadatSAS\Controllers;

use Phalcon\Tag;
use EstadatSAS\Models\Registros;
use EstadatSAS\Models\Onuhabitat;

/**
 * EstadatSAS\Controllers\ProyectosController
 * CRUD to manage proyectos
 */
class TestController extends ControllerBase
{

    /**
     * Default action. Set the private (authenticated) layout (layouts/private.volt)
     */
    public function initialize()
    {
        $this->view->setTemplateBefore('private');
    }

    /**
     * Default action, shows the search form
     */
    public function indexAction()
    {
        $this->assets
            ->addCss('bower_components/bootstrap/dist/css/bootstrap.min.css')
            ->addCss('bower_components/font-awesome/css/font-awesome.min.css')
            ->addCss('bower_components/ionicons/css/ionicons.min.css')
            ->addCss('css/AdminLTE.css')
            ->addCss('css/style.css')
            ->addCss('css/bootstrap.vertical-tabs.css');

        $this->assets
            ->addJs('bower_components/jquery/dist/jquery.min.js')
            ->addJs('bower_components/jquery-ui/jquery-ui.min.js')
            ->addJs('bower_components/bootstrap/dist/js/bootstrap.min.js')
            ->addJs('js/AdminLTE/app.js')
            ->addJs('js/AdminLTE/demo.js')
            ->addJs('js/jquery.bootstrap.wizard.js')
            ->addJs('js/wizard.js')
             ->addJs('js/jquery/valTest.js');
        
    }
}

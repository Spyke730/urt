<?php
namespace EstadatSAS\Controllers;

use Phalcon\Tag;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use EstadatSAS\Models\Urt;
use EstadatSAS\Models\Users;

/**
 * EstadatSAS\Controllers\EncuestaController
 * CRUD to manage Encuesta
 */
class EncuestaController extends ControllerBase
{
  public function initialize()
  {
    $cntUrt     = count( Users::find("registro = 'Y'") );

    $this->view->urtTotal  = 1400;
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

    $this->view->urtTotal  = 1400;
    $this->view->cntUrt       = $cntUrt;

    $auth = $this->session->get('auth-identity');
    
    if ($auth) {
    $id_user_cpy = $auth['id'];
    $user_cpy = $auth['name']; }

    $registro = Users::findFirstById($id_user_cpy);
    
    if ($registro->registro == 'Y'){
      return $this->response->redirect('/encuesta/gopage');
    }
    
  }

  public function gopageAction(){
    
  }

  public function landingpageAction(){
    
  }

  public function nuevoAction()
  {
    if ($this->request->isPost())
    {
      $id_user = 0;
      $user = "";
      $p1 = 0;
      $p2_anios = 0;
      $p2_meses = 0;
      $p3_anios = 0;
      $p3_meses = 0;
      $p4 = 0;
      $p5 = 0;
      $p6 = 0;
      $p7 = 0;
      $p8_1 = 0;
      $p8_2 = 0;
      $p8_3 = 0;
      $p8_4 = 0;
      $p8_5 = 0;
      $p8_6 = 0;
      $p8_7 = 0;
      $p8_8 = 0;
      $p8_9 = 0;
      $p8_10 = 0;
      $p8_11 = 0;
      $p9 = 0;
      $p10 = 0;
      $p11 = 0;
      $p12 = 0;
      $p13_1 = 0;
      $p13_2 = 0;
      $p13_3 = 0;
      $p13_4 = 0;
      $p13_5 = 0;
      $p13_6 = 0;
      $p13_7 = 0;
      $p13_8 = 0;
      $p13_otrocual = "";
      $p14 = 0;
      $p15_1 = 0;
      $p15_2 = 0;
      $p15_3 = 0;
      $p15_4 = 0;
      $p15_5 = 0;
      $p15_6 = 0;
      $p15_7 = 0;
      $p15_8 = 0;
      $p15_otrocual = "";
      $p16 = 0;
      $p17 = 0;
      $p18 = 0;
      $p19_a = 0;
      $p19_b = 0;
      $p19_c = 0;
      $p20_a = 0;
      $p20_b = 0;
      $p20_c = 0;
      $p20_d = 0;
      $p20_e = 0;
      $p21_a = 0;
      $p21_b = 0;
      $p21_c = 0;
      $p21_d = 0;
      $p21_e = 0;
      $p21_f = 0;
      $p22 = 0;
      $p23 = 0;
      $p24_1 = 0;
      $p24_2 = 0;
      $p24_3 = 0;
      $p24_4 = 0;
      $p24_5 = 0;
      $p24_6 = 0;
      $p24_7 = 0;
      $p24_8 = 0;
      $p24_9 = 0;
      $p24_10 = 0;
      $p24_11 = 0;
      $p24_12 = 0;
      $p24_13 = 0;
      $p24_otrocual = "";
      $p25_a = 0;
      $p25_b = 0;
      $p26_a = 0;
      $p26_b = 0;
      $p27 = 0;
      $p28 = 0;
      $p29 = 0;
      $p30 = 0;
      $p31 = 0;
      $p32_1 = 0;
      $p32_2 = 0;
      $p32_3 = 0;
      $p32_4 = 0;
      $p32_5 = 0;
      $p32_6 = 0;
      $p32_7 = 0;
      $p32_8 = 0;
      $p32_9 = 0;
      $p32_otrocual = "";
      $p33_1 = 0;
      $p33_2 = 0;
      $p33_3 = 0;
      $p33_4 = 0;
      $p33_5 = 0;
      $p33_6 = 0;
      $p33_7 = 0;
      $p33_8 = 0;
      $p33_9 = 0;
      $p33_otrocual = "";
      $p34_a = 0;
      $p34_b = 0;
      $p34_c = 0;
      $p34_d = 0;
      $p34_e = 0;
      $p34_1_1 = 0;
      $p34_1_2 = 0;
      $p34_1_3 = 0;
      $p34_1_4 = 0;
      $p34_1_5 = 0;
      $p34_2_1 = 0;
      $p34_2_2 = 0;
      $p34_2_3 = 0;
      $p34_2_4 = 0;
      $p34_2_5 = 0;
      $p34_2_6 = 0;
      $p35 = 0;
      $p35_otrocual = "";
      $p36_a = 0;
      $p36_b = 0;
      $p36_c = 0;
      $p36_d = 0;
      $p36_e = 0;
      $p37_nivel = 0;
      $p37_estructura = 0;
      $p37_sede = 0;
      $p38 = 0;
      $p39 = 0;

      $p34_1 = 0;
      $p34_2 = 0;
      $p40 = 0;
      $p41 = 0;

      $auth = $this->session->get('auth-identity');
      
      if ($auth) {
      $id_user_cpy = $auth['id'];
      $user_cpy = $auth['name']; }


      $urt = Urt::findFirstById_user($id_user_cpy);
      if ($urt) {
          $this->flash->error("El usuario ya registró la encuesta");
          return $this->dispatcher->forward(array(
                'controller' => 'dashboard',
                'action' => 'index'
          ));
      }

      $p1_cpy = $this->request->getpost('p1', array('striptags','int'));
      $p2_anios_cpy = $this->request->getpost('p2_anios', array('striptags','int'));
      $p2_meses_cpy = $this->request->getpost('p2_meses', array('striptags','int'));
      $p3_anios_cpy = $this->request->getpost('p3_anios', array('striptags','int'));
      $p3_meses_cpy = $this->request->getpost('p3_meses', array('striptags','int'));
      $p4_cpy = $this->request->getpost('p4', array('striptags','int'));
      $p5_cpy = $this->request->getpost('p5', array('striptags','int'));
      $p6_cpy = $this->request->getpost('p6', array('striptags','int'));
      $p7_cpy = $this->request->getpost('p7', array('striptags','int'));
      $p8_cpy = $this->request->getpost('p8');
      $p9_cpy = $this->request->getpost('p9', array('striptags','int'));
      $p10_cpy = $this->request->getpost('p10', array('striptags','int'));
      $p11_cpy = $this->request->getpost('p11', array('striptags','int'));
      $p12_cpy = $this->request->getpost('p12', array('striptags','int'));
      $p13_cpy = $this->request->getpost('p13');
      $p13_otrocual_cpy = $this->request->getpost('p13_otrocual', array('striptags','trim', 'upper'));
      $p14_cpy = $this->request->getpost('p14', array('striptags','int'));
      $p15_cpy = $this->request->getpost('p15');
      $p15_otrocual_cpy = $this->request->getpost('p15_otrocual', array('striptags','trim', 'upper'));
      $p16_cpy = $this->request->getpost('p16', array('striptags','int'));
      $p17_cpy = $this->request->getpost('p17', array('striptags','int'));
      $p18_cpy = $this->request->getpost('p18', array('striptags','int'));
      $p19_a_cpy = $this->request->getpost('p19_a', array('striptags','int'));
      $p19_b_cpy = $this->request->getpost('p19_b', array('striptags','int'));
      $p19_c_cpy = $this->request->getpost('p19_c', array('striptags','int'));
      $p20_a_cpy = $this->request->getpost('p20_a', array('striptags','int'));
      $p20_b_cpy = $this->request->getpost('p20_b', array('striptags','int'));
      $p20_c_cpy = $this->request->getpost('p20_c', array('striptags','int'));
      $p20_d_cpy = $this->request->getpost('p20_d', array('striptags','int'));
      $p20_e_cpy = $this->request->getpost('p20_e', array('striptags','int'));
      $p21_a_cpy = $this->request->getpost('p21_a', array('striptags','int'));
      $p21_b_cpy = $this->request->getpost('p21_b', array('striptags','int'));
      $p21_c_cpy = $this->request->getpost('p21_c', array('striptags','int'));
      $p21_d_cpy = $this->request->getpost('p21_d', array('striptags','int'));
      $p21_e_cpy = $this->request->getpost('p21_e', array('striptags','int'));
      $p21_f_cpy = $this->request->getpost('p21_f', array('striptags','int'));
      $p22_cpy = $this->request->getpost('p22', array('striptags','int'));
      $p23_cpy = $this->request->getpost('p23', array('striptags','int'));
      $p24_cpy = $this->request->getpost('p24');
      $p24_otrocual_cpy = $this->request->getpost('p24_otrocual', array('striptags','trim', 'upper'));
      $p25_a_cpy = $this->request->getpost('p25_a', array('striptags','int'));
      $p25_b_cpy = $this->request->getpost('p25_b', array('striptags','int'));
      $p26_a_cpy = $this->request->getpost('p26_a', array('striptags','int'));
      $p26_b_cpy = $this->request->getpost('p26_b', array('striptags','int'));
      $p27_cpy = $this->request->getpost('p27', array('striptags','int'));
      $p28_cpy = $this->request->getpost('p28', array('striptags','int'));
      $p29_cpy = $this->request->getpost('p29', array('striptags','int'));
      $p30_cpy = $this->request->getpost('p30', array('striptags','int'));
      $p31_cpy = $this->request->getpost('p31', array('striptags','int'));
      $p32_cpy = $this->request->getpost('p32');
      $p32_otrocual_cpy = $this->request->getpost('p32_otrocual', array('striptags','trim', 'upper'));
      $p33_cpy = $this->request->getpost('p33');
      $p33_otrocual_cpy = $this->request->getpost('p33_otrocual', array('striptags','trim', 'upper'));
      $p34_a_cpy = $this->request->getpost('p34_a', array('striptags','int'));
      $p34_b_cpy = $this->request->getpost('p34_b', array('striptags','int'));
      $p34_c_cpy = $this->request->getpost('p34_c', array('striptags','int'));
      $p34_d_cpy = $this->request->getpost('p34_d', array('striptags','int'));
      $p34_e_cpy = $this->request->getpost('p34_e', array('striptags','int'));
      $p34_1_cpy = $this->request->getpost('p34_1');
      $p34_2_cpy = $this->request->getpost('p34_2');
      $p35_cpy = $this->request->getpost('p35', array('striptags','int'));
      $p35_otrocual_cpy = $this->request->getpost('p35_otrocual', array('striptags','trim', 'upper'));
      $p36_a_cpy = $this->request->getpost('p36_a', array('striptags','int'));
      $p36_b_cpy = $this->request->getpost('p36_b', array('striptags','int'));
      $p36_c_cpy = $this->request->getpost('p36_c', array('striptags','int'));
      $p36_d_cpy = $this->request->getpost('p36_d', array('striptags','int'));
      $p36_e_cpy = $this->request->getpost('p36_e', array('striptags','int'));
      $p37_nivel_cpy = $this->request->getpost('p37_nivel', array('striptags','int'));
      $p37_estructura_cpy = $this->request->getpost('p37_estructura', array('striptags','int'));
      $p37_sede_cpy = $this->request->getpost('p37_sede', array('striptags'));
      $p38_cpy = $this->request->getpost('p38', array('striptags','int'));
      $p39_cpy = $this->request->getpost('p39', array('striptags','int'));
      $p40_cpy = $this->request->getpost('p40', array('striptags','int'));
      $p41_cpy = $this->request->getpost('p41', array('striptags','int'));

      foreach ($p8_cpy as $names)
      {
             if ($names == "1"){ $p8_1_cpy = $names; }
        else if ($names == "2"){ $p8_2_cpy = $names; }
        else if ($names == "3"){ $p8_3_cpy = $names; }
        else if ($names == "4"){ $p8_4_cpy = $names; }
        else if ($names == "5"){ $p8_5_cpy = $names; }
        else if ($names == "6"){ $p8_6_cpy = $names; }
        else if ($names == "7"){ $p8_7_cpy = $names; }
        else if ($names == "8"){ $p8_8_cpy = $names; }
        else if ($names == "9"){ $p8_9_cpy = $names; }
        else if ($names == "10"){ $p8_10_cpy = $names; }
        else if ($names == "11"){ $p8_11_cpy = $names; }
      }

      foreach ($p13_cpy as $names)
      {
             if ($names == "1"){ $p13_1_cpy = $names; }
        else if ($names == "2"){ $p13_2_cpy = $names; }
        else if ($names == "3"){ $p13_3_cpy = $names; }
        else if ($names == "4"){ $p13_4_cpy = $names; }
        else if ($names == "5"){ $p13_5_cpy = $names; }
        else if ($names == "6"){ $p13_6_cpy = $names; }
        else if ($names == "7"){ $p13_7_cpy = $names; }
        else if ($names == "8"){ $p13_8_cpy = $names; }
      }

      foreach ($p15_cpy as $names)
      {
             if ($names == "1"){ $p15_1_cpy = $names; }
        else if ($names == "2"){ $p15_2_cpy = $names; }
        else if ($names == "3"){ $p15_3_cpy = $names; }
        else if ($names == "4"){ $p15_4_cpy = $names; }
        else if ($names == "5"){ $p15_5_cpy = $names; }
        else if ($names == "6"){ $p15_6_cpy = $names; }
        else if ($names == "7"){ $p15_7_cpy = $names; }
        else if ($names == "8"){ $p15_8_cpy = $names; }
      }

      foreach ($p24_cpy as $names)
      {
             if ($names == "1"){ $p24_1_cpy = $names; }
        else if ($names == "2"){ $p24_2_cpy = $names; }
        else if ($names == "3"){ $p24_3_cpy = $names; }
        else if ($names == "4"){ $p24_4_cpy = $names; }
        else if ($names == "5"){ $p24_5_cpy = $names; }
        else if ($names == "6"){ $p24_6_cpy = $names; }
        else if ($names == "7"){ $p24_7_cpy = $names; }
        else if ($names == "8"){ $p24_8_cpy = $names; }
        else if ($names == "9"){ $p24_9_cpy = $names; }
        else if ($names == "10"){ $p24_10_cpy = $names; }
        else if ($names == "11"){ $p24_11_cpy = $names; }
        else if ($names == "12"){ $p24_12_cpy = $names; }
        else if ($names == "13"){ $p24_13_cpy = $names; }
      }

      foreach ($p32_cpy as $names)
      {
             if ($names == "1"){ $p32_1_cpy = $names; }
        else if ($names == "2"){ $p32_2_cpy = $names; }
        else if ($names == "3"){ $p32_3_cpy = $names; }
        else if ($names == "4"){ $p32_4_cpy = $names; }
        else if ($names == "5"){ $p32_5_cpy = $names; }
        else if ($names == "6"){ $p32_6_cpy = $names; }
        else if ($names == "7"){ $p32_7_cpy = $names; }
        else if ($names == "8"){ $p32_8_cpy = $names; }
        else if ($names == "9"){ $p32_9_cpy = $names; }
      }

      foreach ($p33_cpy as $names)
      {
             if ($names == "1"){ $p33_1_cpy = $names; }
        else if ($names == "2"){ $p33_2_cpy = $names; }
        else if ($names == "3"){ $p33_3_cpy = $names; }
        else if ($names == "4"){ $p33_4_cpy = $names; }
        else if ($names == "5"){ $p33_5_cpy = $names; }
        else if ($names == "6"){ $p33_6_cpy = $names; }
        else if ($names == "7"){ $p33_7_cpy = $names; }
        else if ($names == "8"){ $p33_8_cpy = $names; }
        else if ($names == "9"){ $p33_9_cpy = $names; }
      }

      foreach ($p34_1_cpy as $names)
      {
             if ($names == "1"){ $p34_1_1_cpy = $names; }
        else if ($names == "2"){ $p34_1_2_cpy = $names; }
        else if ($names == "3"){ $p34_1_3_cpy = $names; }
        else if ($names == "4"){ $p34_1_4_cpy = $names; }
        else if ($names == "5"){ $p34_1_5_cpy = $names; }
      }

      foreach ($p34_2_cpy as $names)
      {
             if ($names == "1"){ $p34_2_1_cpy = $names; }
        else if ($names == "2"){ $p34_2_2_cpy = $names; }
        else if ($names == "3"){ $p34_2_3_cpy = $names; }
        else if ($names == "4"){ $p34_2_4_cpy = $names; }
        else if ($names == "5"){ $p34_2_5_cpy = $names; }
        else if ($names == "6"){ $p34_2_6_cpy = $names; }
      }

      $urt = new Urt();

      $urt->id_user = $id_user_cpy;
      $urt->user = $user_cpy;
      $urt->p1 = $p1_cpy;
      $urt->p2_anios = $p2_anios_cpy;
      $urt->p2_meses = $p2_meses_cpy;
      $urt->p3_anios = $p3_anios_cpy;
      $urt->p3_meses = $p3_meses_cpy;
      $urt->p4 = $p4_cpy;
      $urt->p5 = $p5_cpy;
      $urt->p6 = $p6_cpy;
      $urt->p7 = $p7_cpy;
      $urt->p8_1 = $p8_1_cpy;
      $urt->p8_2 = $p8_2_cpy;
      $urt->p8_3 = $p8_3_cpy;
      $urt->p8_4 = $p8_4_cpy;
      $urt->p8_5 = $p8_5_cpy;
      $urt->p8_6 = $p8_6_cpy;
      $urt->p8_7 = $p8_7_cpy;
      $urt->p8_8 = $p8_8_cpy;
      $urt->p8_9 = $p8_9_cpy;
      $urt->p8_10 = $p8_10_cpy;
      $urt->p8_11 = $p8_11_cpy;
      $urt->p9 = $p9_cpy;
      $urt->p10 = $p10_cpy;
      $urt->p11 = $p11_cpy;
      $urt->p12 = $p12_cpy;
      $urt->p13_1 = $p13_1_cpy;
      $urt->p13_2 = $p13_2_cpy;
      $urt->p13_3 = $p13_3_cpy;
      $urt->p13_4 = $p13_4_cpy;
      $urt->p13_5 = $p13_5_cpy;
      $urt->p13_6 = $p13_6_cpy;
      $urt->p13_7 = $p13_7_cpy;
      $urt->p13_8 = $p13_8_cpy;
      $urt->p13_otrocual = $p13_otrocual_cpy;
      $urt->p14 = $p14_cpy;
      $urt->p15_1 = $p15_1_cpy;
      $urt->p15_2 = $p15_2_cpy;
      $urt->p15_3 = $p15_3_cpy;
      $urt->p15_4 = $p15_4_cpy;
      $urt->p15_5 = $p15_5_cpy;
      $urt->p15_6 = $p15_6_cpy;
      $urt->p15_7 = $p15_7_cpy;
      $urt->p15_8 = $p15_8_cpy;
      $urt->p15_otrocual = $p15_otrocual_cpy;
      $urt->p16 = $p16_cpy;
      $urt->p17 = $p17_cpy;
      $urt->p18 = $p18_cpy;
      $urt->p19_a = $p19_a_cpy;
      $urt->p19_b = $p19_b_cpy;
      $urt->p19_c = $p19_c_cpy;
      $urt->p20_a = $p20_a_cpy;
      $urt->p20_b = $p20_b_cpy;
      $urt->p20_c = $p20_c_cpy;
      $urt->p20_d = $p20_d_cpy;
      $urt->p20_e = $p20_e_cpy;
      $urt->p21_a = $p21_a_cpy;
      $urt->p21_b = $p21_b_cpy;
      $urt->p21_c = $p21_c_cpy;
      $urt->p21_d = $p21_d_cpy;
      $urt->p21_e = $p21_e_cpy;
      $urt->p21_f = $p21_f_cpy;
      $urt->p22 = $p22_cpy;
      $urt->p23 = $p23_cpy;
      $urt->p24_1 = $p24_1_cpy;
      $urt->p24_2 = $p24_2_cpy;
      $urt->p24_3 = $p24_3_cpy;
      $urt->p24_4 = $p24_4_cpy;
      $urt->p24_5 = $p24_5_cpy;
      $urt->p24_6 = $p24_6_cpy;
      $urt->p24_7 = $p24_7_cpy;
      $urt->p24_8 = $p24_8_cpy;
      $urt->p24_9 = $p24_9_cpy;
      $urt->p24_10 = $p24_10_cpy;
      $urt->p24_11 = $p24_11_cpy;
      $urt->p24_12 = $p24_12_cpy;
      $urt->p24_13 = $p24_13_cpy;
      $urt->p24_otrocual = $p24_otrocual_cpy;
      $urt->p25_a = $p25_a_cpy;
      $urt->p25_b = $p25_b_cpy;
      $urt->p26_a = $p26_a_cpy;
      $urt->p26_b = $p26_b_cpy;
      $urt->p27 = $p27_cpy;
      $urt->p28 = $p28_cpy;
      $urt->p29 = $p29_cpy;
      $urt->p30 = $p30_cpy;
      $urt->p31 = $p31_cpy;
      $urt->p32_1 = $p32_1_cpy;
      $urt->p32_2 = $p32_2_cpy;
      $urt->p32_3 = $p32_3_cpy;
      $urt->p32_4 = $p32_4_cpy;
      $urt->p32_5 = $p32_5_cpy;
      $urt->p32_6 = $p32_6_cpy;
      $urt->p32_7 = $p32_7_cpy;
      $urt->p32_8 = $p32_8_cpy;
      $urt->p32_9 = $p32_9_cpy;
      $urt->p32_otrocual = $p32_otrocual_cpy;
      $urt->p33_1 = $p33_1_cpy;
      $urt->p33_2 = $p33_2_cpy;
      $urt->p33_3 = $p33_3_cpy;
      $urt->p33_4 = $p33_4_cpy;
      $urt->p33_5 = $p33_5_cpy;
      $urt->p33_6 = $p33_6_cpy;
      $urt->p33_7 = $p33_7_cpy;
      $urt->p33_8 = $p33_8_cpy;
      $urt->p33_9 = $p33_9_cpy;
      $urt->p33_otrocual = $p33_otrocual_cpy;
      $urt->p34_a = $p34_a_cpy;
      $urt->p34_b = $p34_b_cpy;
      $urt->p34_c = $p34_c_cpy;
      $urt->p34_d = $p34_d_cpy;
      $urt->p34_e = $p34_e_cpy;
      $urt->p34_1_1 = $p34_1_1_cpy;
      $urt->p34_1_2 = $p34_1_2_cpy;
      $urt->p34_1_3 = $p34_1_3_cpy;
      $urt->p34_1_4 = $p34_1_4_cpy;
      $urt->p34_1_5 = $p34_1_5_cpy;
      $urt->p34_2_1 = $p34_2_1_cpy;
      $urt->p34_2_2 = $p34_2_2_cpy;
      $urt->p34_2_3 = $p34_2_3_cpy;
      $urt->p34_2_4 = $p34_2_4_cpy;
      $urt->p34_2_5 = $p34_2_5_cpy;
      $urt->p34_2_6 = $p34_2_6_cpy;
      $urt->p35 = $p35_cpy;
      $urt->p35_otrocual = $p35_otrocual_cpy;
      $urt->p36_a = $p36_a_cpy;
      $urt->p36_b = $p36_b_cpy;
      $urt->p36_c = $p36_c_cpy;
      $urt->p36_d = $p36_d_cpy;
      $urt->p36_e = $p36_e_cpy;
      $urt->p37_nivel = $p37_nivel_cpy;
      $urt->p37_estructura = $p37_estructura_cpy;
      $urt->p37_sede = $p37_sede_cpy;
      $urt->p38 = $p38_cpy;
      $urt->p39 = $p39_cpy;
      $urt->p40 = $p40_cpy;
      $urt->p41 = $p41_cpy;

      if (!$urt->save()) {
        $this->flash->error($urt->getMessages());
      }else {
        $registro = Users::findFirstById($id_user_cpy);
        $registro->registro   = 'Y';

        if (!$registro->save()) {
          $this->flash->error($registro->getMessages());
        }else{
          $this->flash->success("El formulario se ingresó con éxito");
          return $this->response->redirect('/encuesta/gopage/');
        }
      }

    }
/*
    return $this->dispatcher->forward(array(
                'controller' => 'encuesta',
                'action' => 'gopage'
          ));*/
  }

  public function isSesionAction(){
    //deshabilitamos la vista para peticiones ajax
    $this->view->disable();

    //si es una petición get
    if($this->request->isGet() == true) 
    {
      //si es una petición ajax
      if($this->request->isAjax() == true) 
      {
        //$auth = $this->session->get('auth-identity');
        if ( !$this->session->has('auth') ){
          alert ("El aplicativo ha superado el tiempo de inactividad, favor ingresar de nuevo !!!");
          $this->response->setJsonContent(array(
            "sesion" => 'no'
          ));
          return $this->response->redirect('/session/logout/');
          //$dispatcher->forward(array('controller' => 'session', 'action' => 'logout'));
          return false;
        }else{
          $this->response->setJsonContent(array(
            "sesion" => 'yes'
          ));
        }

        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      };
    }else{
      $this->response->setStatusCode(404, "Not Found");
    };
  }

  /**
  * @desc ajax con peticiones get
  */
  public function ajaxAction()
  {
    //deshabilitamos la vista para peticiones ajax
    $this->view->disable();

      //si es una petición get
    if($this->request->isGet() == true) 
    {
      //si es una petición ajax
      if($this->request->isAjax() == true) 
      {
        $this->response->setJsonContent(array('res' => array("1","2","3")));
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }
    else
    {
      $this->response->setStatusCode(404, "Not Found");
    }
  }
}

<?php echo $this->getContent(); ?>

<div class="row">
  <div class="col-md-10 col-md-offset-1" align="right">
    <hr>
      <h2 class="intro-text text-center">Informe <strong>Clima Organizacional</strong>
      </h2>
    <hr>
  </div>

  <div class="col-md-6 col-md-offset-3" class="page-header">


    <div class="callout callout-warning">
        <p><h3>Cantidad de Encuestas registradas</h3></p>
        </br>
    </div>

    <?php echo $this->tag->form(array('informe/search', 'method' => 'post', 'autocomplete' => 'off')); ?>
      <div class="panel panel-success">
        <div class="panel-body">
          <table class="table table-hover" >
            <tr>
              <td align="right"><label>Perfil :</label></td>
              <td >
                <?php echo Phalcon\Tag::selectStatic(array(
                  'profilesId',
                  'useEmpty' => true,
                  'emptyText' => 'Seleccione un perfil...',
                  'emptyValue' => '',
                  'class'=>'form-control', array(
                  "1" => "Administrador",
                  "2" => "Invitado",
                  "3" => "Contratista URT",
                  "4" => "Funcionario URT"
                  ))); ?>
              </td>
            </tr>
            <hr>
            <tr>
              <td align="right"><label>Encuestas :</label></td>
              <td >
                <?php echo Phalcon\Tag::selectStatic(array(
                  'registro', // identificador en la base de usuarios 1 -> Si ya hizo el registro 2 -> No ha realizado el registro
                  'useEmpty' => true,
                  'emptyText' => '...',
                  'emptyValue' => '',
                  'required' => true,
                  'class'=>'form-control', array(
                  "Y" => "Registradas",
                  "N" => "No Registradas"
                ))) ;?>
              </td>
            </tr>
          </table>
          <div align="right">
            <?php echo $this->tag->submitButton(array('Buscar', 'class' => 'btn btn-primary')); ?>
          </div>
        </div>
      </div>
    </form>


  </div>

</div>

<?php $this->assets->outputCss() ?>

<?php echo $this->getContent(); ?>


<style type="text/css">
  #wizard-card .tab-content {
    margin-top: 20px;
  }

  /* Adjust feedback icon position */
  #encuestaURT .form-control-feedback {
    right: 15px;
  }

  #encuestaURT .radio label, #encuestaURT .checkbox label {
      padding-left: 0;
  }
</style>


<div class="container">
  <div class="row">
    <div class="col-sm-9 col-sm-offset-1">
      <!--      Wizard container        -->   
      <div class="wizard-container">
        <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
          <?php echo $this->tag->form(array('id' => 'encuestaURT', 'name' => 'encuestaURT', 'encuesta/nuevo', 'method' => 'post', 'autocomplete' => 'off')); ?>
            <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
            <div class="wizard-header">
              <h3>
                <b>Formulario</b> para colaboradores de la URT <br>
                <small>Encuesta WEB</small>
              </h3>
            </div>
            <ul>                              
              <li><a href="#capituloI" data-toggle="tab">I</a></li>
              <li><a href="#capituloII" data-toggle="tab">II</a></li>
              <li><a href="#capituloIII" data-toggle="tab">III</a></li>
              <li><a href="#capituloIV" data-toggle="tab">IV</a></li>
              <li><a href="#capituloV" data-toggle="tab">V</a></li>
              <li><a href="#capituloVI" data-toggle="tab">VI</a></li>
              <li><a href="#capituloVII" data-toggle="tab">VII</a></li>
              <li><a href="#capituloVIII" data-toggle="tab">VIII</a></li>
              <li><a href="#capituloIX" data-toggle="tab">IX</a></li>
              <li><a href="#capituloPW" data-toggle="tab">PW</a></li>
              <li><a href="#contractual" data-toggle="tab">Cntl</a></li>
              <li><a href="#atencion" data-toggle="tab">A.C.</a></li>
              <li><a href="#capituloX" data-toggle="tab">X</a></li>
            </ul>
            <div class="tab-content" id="scroll1">
              <div class="tab-pane" id="capituloI">
                <div class="row">
                  <h4 class="info-text">Capítulo I. Identificador del colaborador</h4>

                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black"> 1. ¿Qué tipo de vinculación tiene con la URT? </small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p1" value="1" /> Funcionario
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p1" value="2" data-toggle="#pregunta25"/> Contratista
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">2. ¿Hace cuanto tiempo trabaja en la URT? </small><sub><small><b style="color:green">Digite el número de años y meses que lleva trabajando en la URT</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-6">
                              <label class="control-label">Años</label>
                              <input type="text" class="form-control p2_tiempo" name="p2_anios" />
                            </div>
                            <div class="col-xs-6">
                              <label class="control-label">Meses</label>
                              <input type="text" class="form-control p2_tiempo" name="p2_meses" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">3. ¿Cuanto tiempo de experiencia laboral tiene en su cargo actual?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-6">
                              <label class="control-label">Años</label>
                              <input type="text" class="form-control p3_tiempo" name="p3_anios" />
                            </div>
                            <div class="col-xs-6">
                              <label class="control-label">Meses</label>
                              <input type="text" class="form-control p3_tiempo" name="p3_meses" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">4. A la fecha, ¿cuántos años cumplidos tiene?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-6">
                              <label class="control-label">Años</label>
                              <input type="text" class="form-control" name="p4" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">5. Género</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p5" value="1" /> Masculino
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p5" value="2" /> Femenino
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">6. ¿De acuerdo a su cultura, pueblo o rasgos físicos usted es o se reconoce como…?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p6">
                                <option value="">Seleccione ...</option>
                                <option value="1">Indígena</option>
                                <option value="2">Afrodescendiente</option>
                                <option value="3">Gitano/ROM</option>
                                <option value="4">Raizal</option>
                                <option value="5">Palenquero</option>
                                <option value="6">Mestizo</option>
                                <option value="7">Blanco</option>
                                <option value="8">Ninguna de las anteriores</option>
                                <option value="9">No sabe</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">7. ¿Es usted cabeza de familia?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p7" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p7" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">8. Presenta usted alguna de las siguientes limitaciones físicas o cognitivas:</small> <sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="1" /> Moverse o caminar
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="2" /> Usar sus brazos o manos
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="3" /> No ver, a pesar de usar lentes o gafas
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="4" /> No oír, aun con aparatos especiales
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="5" /> Hablar
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="6" /> Entender o aprender
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="7" /> Relacionarse con los demás
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="8" /> Problemas mentales, emocionales o físicos a causa del conflicto armado
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="9" /> Bañarse, vestirse, alimentarse por sí mismo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="10" /> Ninguna
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p8[]" value="11" /> No Sabe
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">9. ¿Cuál es su grado de escolaridad más alto alcanzado?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p9">
                              <option value="">Seleccione ...</option>
                              <option value="1">Analfabeta</option>
                              <option value="2">No ha estudiado, pero sabe leer y escribir</option>
                              <option value="3">Primaria incompleta</option>
                              <option value="4">Primaria completa</option>
                              <option value="5">Secundaria incompleta</option>
                              <option value="6">Secundaria completa</option>
                              <option value="7">Técnica/Tecnológica incompleta</option>
                              <option value="8">Técnica/Tecnológica completa</option>
                              <option value="9">Universidad incompleta</option>
                              <option value="10">Universidad completa</option>
                              <option value="11">Posgrado incompleto (Especialización, Maestría, Doctorado, Post-Doctorado)</option>
                              <option value="12">Posgrado completo (Especialización, Maestría, Doctorado, Post-Doctorado)</option>
                              <option value="13">No sabe / no informa</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloII">
                <div class="row">
                  <h4 class="info-text">Capítulo II. Satisfacción y experiencia en general</h4>


                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">10. En una escala de 1 a 10, donde 1 es totalmente insatisfecho y 10 es totalmente satisfecho.  ¿Cuál es su grado de satisfacción con la URT como <b>lugar de trabajo</b>, comparado con <b>otros sitios donde ha trabajado antes</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p10" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">11. En una escala de 1 a 10, donde 1 es totalmente insatisfecho y 10 es totalmente satisfecho. ¿Cómo califica <b>la labor de la URT</b> en el proceso de Restitución de Tierras?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p11" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">12. En términos generales, ¿Cómo ha sido su experiencia con la URT? Favor escoja una de las siguientes opciones:</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p12">
                              <option value="">Seleccione ...</option>
                              <option value="1">Excelente</option>
                              <option value="2">Buena</option>
                              <option value="3">Regular</option>
                              <option value="4">Mala</option>
                              <option value="97">Ns/Nr</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloIII">
                <div class="row">
                  <h4 class="info-text">Capítulo III. Percepción General</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">13. Para elevar su satisfacción con la entidad, ¿Cuáles son los aspectos que debe cambiar la URT?</small><sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="1" /> Ambiente de Trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="2" /> Condiciones de infraestructura
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="3" /> Mayor reconocimiento por su trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="4" /> Horario
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="5" /> Ingresos
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="6" /> Todos
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="7" /> Ninguno de los anteriores
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p13[]" value="8" /> Otro
                              </label>
                            </div>
                          </div>
                          <div style="display:none" id="p13_sh">
                            <label class="control-label">Cuál (es)?</label>
                            <input type="text" class="form-control" name="p13_otrocual" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">14. ¿Se <b>proyecta</b> o no trabajando en la unidad de restitución <b>el siguiente año</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p14" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p14" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">15. ¿Cuáles son <b>las razones</b> de su <b>respuesta anterior</b>?</small>  <sub><small><b style="color:green">Puede marcar varios</b></small></sub> </label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="1" /> Por la misión de la URT
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="2" /> Por el ambiente laboral
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="3" /> Por la remuneración
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="4" /> Por los horarios laborales
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="5" /> Condiciones de seguridad
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="6" /> Por el reconocimiento que recibe por su trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="7" /> Por el sistema de contratación de la URT
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p15[]" value="8" /> Otras razones
                              </label>
                            </div>
                          </div>
                          <div style="display:none" id="p15_sh">
                            <label class="control-label">Cuáles?</label>
                            <input type="text" class="form-control" name="p15_otrocual" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">16. ¿Siente que <b>hay una correspondencia entre sus tareas y la remuneración económica</b> que recibe por ellas?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p16" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p16" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">17. ¿Su trabajo en la URT le <b>ha aportado a su crecimiento profesional</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p17" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p17" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">18. ¿Cree usted que la URT <b>ofrece estabilidad laboral</b>? - Razones diferentes a limite de creacion por 10 años.</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p18" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p18" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloIV">
                <div class="row">
                  <h4 class="info-text">Capítulo IV. Infraestructura y condiciones para el trabajo</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">19. En una escala de 1 a 10, donde 1 es muy malo y 10 es muy bueno. Califique los siguientes aspectos de <b>su lugar de trabajo</b>.</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. Las condiciones físicas generales (ergonomía, iluminación)</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_a" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. Los recursos físicos para el desempeño de sus funciones</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_b" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">c. Acceso para personas con discapacidad</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p19_c" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">20. En una escala de 1 a 10, donde 1 es muy malo y 10 es muy bueno. Califique los siguientes <b>aspectos tecnológicos</b> de su lugar de trabajo.</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. Los recursos de software utilizados en la URT</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_a" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. La velocidad de conexión de la red</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_b" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">c. La estabilidad de la conexión de la red</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_c" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">d. El aplicativo para el registro de solicitudes</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_d" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">e. El aplicativo para la identificación de predios</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p20_e" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">21. En una escala de 1 a 10, donde 1 es Totalmente ineficiente y 10 Muy eficiente, ¿qué tan eficientes considera que son <b>las relaciones de la URT con cada una de las siguientes entidades</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. IGAC</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_a" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. CATASTROS DESCENTRALIZADOS</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_b" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">c. SUPERINTENDENCIA DE NOTARIADO Y REGISTRO</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_c" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">d. INCODER</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_d" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">e. PROCURADURÍA</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_e" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">f. JUECES DE RESTITUCIÓN</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="97" /><p>Ns/Nr</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p21_f" value="98" /><p>N/A</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">22. ¿Considera que <b>las directrices</b> que se toman a niveles superiores <b>dificultan el desarrollo propio de sus funciones</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p22" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p22" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">23. ¿Considera usted que la URT cuenta con los protocolos necesarios para garantizar la seguridad de la información de los solicitantes?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p23" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p23" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">24. ¿Teniendo en cuenta su actual situación de trabajo, cuáles de los siguientes aspectos ponen en riesgo el cumplimiento de sus funciones?</small><sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="1" /> Metas ambiciosas
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="2" /> Micro focalización
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="3" /> Cambios frecuentes en el modelo de gestión
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="4" /> Condiciones de seguridad
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="5" /> Problemas de comunicación con los jefes y/o compañeros de trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="6" /> Falta de apoyo de jefes y/o compañeros de trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="7" /> Falta de capacitación para la realización de sus tareas.
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="8" /> Delimitación clara de objetivos
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="9" /> Falta de evaluaciones y retroalimentaciones
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="10" /> Elementos físicos necesarios para el desarrollo del trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="11" /> Asignación de actividades fuera del horario de trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="12" /> Ninguna
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p24[]" value="13" /> Otros.
                              </label>
                            </div>
                          </div>
                          <div style="display:none" id="p24_sh">
                            <label class="control-label">Cuál (es)?</label>
                            <input type="text" class="form-control" name="p24_otrocual" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">25. En una escala de 1 a 10, donde 1 es muy malo y 10 es muy bueno. Califique los siguientes aspectos acerca del <b>proceso de pago</b> por parte de la URT. (salario/honorarios)</small></label>
                      </div>
                      <div class="box-body">
                        <div  id="pregunta25" style="display: none">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. Trámites para el pago</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_a" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. Oportunidad en el pago</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p25_b" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloV">
                <div class="row">
                  <h4 class="info-text">Capítulo V. Ambiente Laboral</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">26. En una escala de 1 a 10, donde 1 es muy malo y 10 es muy bueno. Califique <b>la relación</b> con:</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. Su jefe directo</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_a" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. Sus compañeros de trabajo</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p26_b" value="97" /><p>Ns/Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">27. ¿Ha tenido <b>problemas de seguridad</b> por causa de su trabajo en la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p27" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p27" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">28. ¿Cree usted (o ha sabido )  que dentro de la URT se presentan <b>casos de corrupción de sus funcionarios</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p28" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p28" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloVI">
                <div class="row">
                  <h4 class="info-text">Capítulo VI. Relación Trabajo - Familia</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">29. ¿Con qué <b>frecuencia</b> ha tenido usted que dedicar <b>tiempo fuera de su horario laboral</b> para la realización de sus <b>tareas laborales</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p29">
                              <option value="">Seleccione ...</option>
                              <option value="1">Muy frecuente</option>
                              <option value="2">Frecuente</option>
                              <option value="3">De vez en cuando</option>
                              <option value="4">Nunca</option>
                              <option value="97">No Informa/ No Sabe/  No aplica</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloVII">
                <div class="row">
                  <h4 class="info-text">Capítulo VII. Crecimiento y desarrollo personal y profesional</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">30. ¿Ha recibido <b>formación complementaria</b> por parte de la URT para el <b>desarrollo de su trabajo</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p30" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p30" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">31. ¿Ha participado en los <b>programas de bienestar</b> promovidos por la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p31" value="1" /> Si
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p31" value="2" /> No
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloVIII">
                <div class="row">
                  <h4 class="info-text">Capítulo VIII. Fortalezas y debilidades de la URT</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">32. Por favor indíqueme los <b>aspectos positivos</b> que usted resalte de la URT como lugar de trabajo.</small><sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="1" /> Ambiente laboral
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="2" /> Remuneración
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="3" /> Horario de trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="4" /> Oportunidades de crecimiento profesional
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="5" /> Recursos físicos para el desempeño de sus actividades
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="6" /> Software para el desempeño de sus actividades
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="7" /> Imagen de la URT
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="8" /> Ninguna de las anteriores
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p32[]" value="9" /> Otro.
                              </label>
                            </div>
                          </div>
                          <div style="display:none" id="p32_sh">
                            <label class="control-label">Cuál?</label>
                            <input type="text" class="form-control" name="p32_otrocual" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">33. Por favor indíqueme los <b>aspectos negativos</b> que usted haya observado de la URT como lugar de trabajo.</small><sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="1" /> Ambiente laboral
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="2" /> Remuneración
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="3" /> Horario de trabajo
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="4" /> Oportunidades de crecimiento profesional
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="5" /> Recursos físicos para el desempeño de sus actividades
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="6" /> Software para el desempeño de sus actividades
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="7" /> Imagen de la URT
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="8" /> Ninguna de las anteriores
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p33[]" value="9" /> Otro.
                              </label>
                            </div>
                          <div style="display:none" id="p33_sh">
                            <label class="control-label">Cuál?</label>
                            <input type="text" class="form-control" name="p33_otrocual" />
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="capituloIX">
                <div class="row">
                  <h4 class="info-text">Capítulo IX. Comunicaciones</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">34. En una escala de 1 a 10, donde 1 es totalmente insatisfecho y 10 totalmente satisfecho, ¿Qué tan satisfecho se encuentra usted con los siguientes aspectos <b>de la comunicación que tiene su jefe directo con usted</b>?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. La comunicación en general que tiene su jefe directo con usted</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_a" value="96" /><p>Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. La cantidad de información suministrada por su jefe directo</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_b" value="96" /><p>Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">c. Claridad en las comunicaciones de su jefe directo</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_c" value="96" /><p>Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">d. Puntualidad en la entrega de las respuestas de su jefe directo a sus consultas</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_d" value="96" /><p>Nr</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">e. Rapidez en la respuesta</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p34_e" value="96" /><p>Nr</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">35. De los siguientes canales de comunicación <b>externa</b> cuáles considera usted son los más utilizados por los ciudadanos para saber de la URT?</small> <sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_1[]" value="1" /> Televisión
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_1[]" value="2" /> Radio
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_1[]" value="3" /> Prensa
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_1[]" value="4" /> Página Web
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_1[]" value="5" /> Redes Sociales
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">36. De los siguientes canales de comunicación <b>interna</b> cuáles considera usted son los más idóneos para estar actualizado con las actividades propias de la entidad?</small> <sub><small><b style="color:green">Puede marcar varios</b></small></sub></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="1" /> Cartelera Digital
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="2" /> Página Web
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="3" /> Boletines informativos
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="4" /> Correo electrónico
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="5" /> Intranet
                              </label>
                            </div>
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="p34_2[]" value="6" /> Redes Sociales
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="tab-pane" id="capituloPW">
                <div class="row">
                  <h4 class="info-text">Página Web</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">37. ¿Con qué frecuencia consulta la <b>página web</b> de la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p35">
                              <option value="">Seleccione ...</option>
                              <option value="1">Más de una vez al día</option>
                              <option value="2">Una vez al día</option>
                              <option value="3">Una vez a la semana</option>
                              <option value="4">Una vez al mes</option>
                              <option value="5">De vez en cuando</option>
                              <option value="6">Solo cuando necesito información</option>
                              <option value="7">Nunca</option>
                              <option value="8">Otra frecuencia</option>
                              </select>
                            </div>
                          </div>
                          </br>
                          <div style="display:none" id="p35_sh">
                            <label class="control-label">Cuál?</label>
                            <input type="text" class="form-control" name="p35_otrocual" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12"  id="pregunta36" style="display: none">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">38. En una escala de 1 a 10, donde 1 es muy malo y 10 muy bueno. Califique los siguientes aspectos acerca de la página web de la URT.</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">a. La velocidad de navegación</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_a" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">b. Diseño</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_b" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">c. Contenidos publicados</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_c" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">d. Actualización</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_d" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">e. Efectiva para sus consultas</label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p36_e" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane"  id="contractual">
                <div class="row">
                  <h4 class="info-text">Contractual</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">39. En una escala de 1 a 10, donde 1 es muy ineficiente y 10 es muy eficiente, ¿Qué tan <b>eficientes</b> considera usted los <b>procedimientos</b> de contratación llevados por la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p39" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">40. En qué <b>porcentaje</b> usted conoce los <b>procedimientos de contratación</b> de la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="1" /><p>10<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="2" /><p>20<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="3" /><p>30<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="4" /><p>40<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="5" /><p>50<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="6" /><p>60<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="7" /><p>70<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="8" /><p>80<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="9" /><p>90<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="10" /><p>100<small style="color:green">%</small></p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p40" value="11" /><p>No los conoce</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="tab-pane" id="atencion">
                <div class="row">
                  <h4 class="info-text">Atención al ciudadano</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">41. En una escala de 1 a 10, donde 1 es muy mala y 10 es muy buena, como considera la <b>gestión</b> de la <b>atención al ciudadano</b> en la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="radio">
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="1" /><p>1</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="2" /><p>2</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="3" /><p>3</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="4" /><p>4</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="5" /><p>5</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="6" /><p>6</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="7" /><p>7</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="8" /><p>8</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="9" /><p>9</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="10" /><p>10</p>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="p41" value="97" /><p>Ns/No Inf</p>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="tab-pane" id="capituloX">
                <div class="row">
                  <h4 class="info-text">Capítulo X. Cargo y ubicación del colaborador</h4>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">42. ¿A cuál territorial de la URT se encuentra usted vinculado actualmente?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div>
                            <label class="control-label">Dirección Territorial URT : </label>
                          </div>
                        </div>
                        <div cla
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p37_nivel">
                                <option value="">Seleccione ...</option>
                                <option value="1">Nivel Territorial</option>
                                <option value="2">Nivel Central</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div>
                            <label class="control-label">Estructura : </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p37_estructura">
                                <option value="">Seleccione ...</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group" style="display:none" id="p37_1_sh">
                          <div>
                            <label class="control-label">Sede : </label>
                          </div>
                        </div>
                        <div class="form-group" style="display:none" id="p37_2_sh">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p37_sede">
                                <option value="">Seleccione ...</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">
                        <label class="box-title"><small style="color:black">43. ¿Cuál es su cargo en la URT?</small></label>
                      </div>
                      <div class="box-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-xs-4">
                              <select class="form-control" name="p38">
                              <option value="">Seleccione ...</option>
                              <option value="1">Labores de apoyo</option>
                              <option value="2">Asistente</option>
                              <option value="3">Asesor</option>
                              <option value="4">Profesional</option>
                              <option value="5">Profesional especializado</option>
                              <option value="6">Secretaria</option>
                              <option value="7">Cargo directivo</option>
                              <option value="10">No informa</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="wizard-footer">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Siguiente' />
                <!--<input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Salir' /> -->
                <button type="submit" name="submitButton" class="btn btn-finish btn-fill btn-warning btn-wd btn-sm">Finalizar</button>
              </div>
              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
              </div>
              <div class="clearfix"></div>
            </div>
          </form>
        </div> <!-- card wizard-card -->
      </div> <!-- wizard container -->
    </div>
  </div>
</div>

<div class="modal" id="modalCapV" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Almacenando información...</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-danger">
              <div class="box-body">
                <div class="callout callout-warning">
                  <p style="text-align:justify">Se almacenará información previa al Capítulo V. Al hacer click para cambiar de Capítulo, favor esperar 10 segundos aprox.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="onclickBtn" class="btn btn-default" data-dismiss="modal">Gracias !!!</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalRev" tabindex="-1" role="dialog" aria-labelledby="modalCrudPhalconLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Aluna pregunta quedó sin contestar...</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="box box-danger">
              <div class="box-body">
                <div class="callout callout-warning">
                  <p style="text-align:justify">Verificar:</p>
                  <ul>
                    <li>Si alguna pregunta se encuentra escrita en <b style="color:red">rojo</b></li>
                    <li>Evaluar la sugerencia que está escrita debajo de la pregunta</li>
                    <li>Volver a hacer click en el botón de navegación que desee</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" id="onclickBtn" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<?php $this->assets->outputJs() ?>
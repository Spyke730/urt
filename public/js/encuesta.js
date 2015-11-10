searchVisible = 0;
transparent = true;
var timer;

$(document).ready(function(){
	/*  Activate the tooltips      */
	$('[rel="tooltip"]').tooltip();
	  
	$('#encuestaURT')
  .find('input[name="p1"], input[name="p5"], input[name="p7"], input[name="p10"], input[name="p11"], input[name="p14"], input[name="p16"], input[name="p17"], input[name="p18"], input[name="p19_a"], input[name="p19_b"], input[name="p19_c"], input[name="p20_a"], input[name="p20_b"], input[name="p20_c"], input[name="p20_d"], input[name="p20_e"], input[name="p21_a"], input[name="p21_b"], input[name="p21_c"], input[name="p21_d"], input[name="p21_e"], input[name="p21_f"], input[name="p22"], input[name="p23"], input[name="p25_a"], input[name="p25_b"], input[name="p26_a"], input[name="p26_b"], input[name="p27"], input[name="p28"], input[name="p30"], input[name="p31"], input[name="p34_a"], input[name="p34_b"], input[name="p34_c"], input[name="p34_d"], input[name="p34_e"], input[name="p36_a"], input[name="p36_b"], input[name="p36_c"], input[name="p36_d"], input[name="p36_e"], input[name="p39"], input[name="p40"], input[name="p41"], input[name="p8[]"], input[name="p13[]"], input[name="p15[]"], input[name="p24[]"], input[name="p32[]"], input[name="p33[]"], input[name="p34_1[]"], input[name="p34_2[]"]')
    // Init icheck elements
    .icheck({
        // The tap option is only available in v2.0
        tap: true,
        checkboxClass: 'icheckbox_minimal',
        radioClass: 'iradio_minimal'
    })
    // Called when the radios/checkboxes are changed
    .unbind('ifChanged').on('ifChanged', function(e) {
        // Get the field name
        var field = $(this).attr('name');

        var $target = $($(this).attr('data-toggle'));
        $target.toggle();

        $('#encuestaURT').formValidation('revalidateField', field);

        /*if($(this).is(':checked')){
	        var values = [];
	        $.each($('input:checked'),function(index,input){
	            values.push(input.value);
	        });
	        alert(values.join(','));	        
    		}*/
    		/*
    			if ($(this).val() === '8'){
    				if($(this).is(':checked')){
    					$('#encuestaURT').formValidation('revalidateField', 'p13_otrocual');
    				}
    				else{
    					$('#encuestaURT').formValidation('revalidateField', 'p13_otrocual');
    				}
    			}
    		*/

        /*if (field === "p25_b"){
          $("#modalCapV").modal("show");
        }*/
    		
    		if (field === 'p13[]'){
          if ($(this).val() === '8'){
            if($(this).is(':checked')){
              $("#p13_sh").show();
              $('#encuestaURT').formValidation('revalidateField', 'p13_otrocual');
            }
            else{
              $("#p13_sh").hide();
            }
          }
    			//$('#encuestaURT').formValidation('revalidateField', 'p13_otrocual');
    			$('#encuestaURT').formValidation('revalidateField', field);
	  		}else if (field === 'p15[]'){
          if ($(this).val() === '8'){
            if($(this).is(':checked')){
              $("#p15_sh").show();
              $('#encuestaURT').formValidation('revalidateField', 'p15_otrocual');
            }
            else{
              $("#p15_sh").hide();
            }
          }
          //$('#encuestaURT').formValidation('revalidateField', 'p15_otrocual');
    			$('#encuestaURT').formValidation('revalidateField', field);
    		}else if (field === 'p24[]'){
          if ($(this).val() === '13'){
            if($(this).is(':checked')){
              $("#p24_sh").show();
              $('#encuestaURT').formValidation('revalidateField', 'p24_otrocual');
            }
            else{
              $("#p24_sh").hide();
            }
          }
					//$('#encuestaURT').formValidation('revalidateField', 'p24_otrocual');
    			$('#encuestaURT').formValidation('revalidateField', field);
    		}else if (field === 'p32[]'){
          if ($(this).val() === '9'){
            if($(this).is(':checked')){
              $("#p32_sh").show();
              $('#encuestaURT').formValidation('revalidateField', 'p32_otrocual');
            }
            else{
              $("#p32_sh").hide();
            }
          }
					//$('#encuestaURT').formValidation('revalidateField', 'p32_otrocual');
    			$('#encuestaURT').formValidation('revalidateField', field);
    		}else if (field === 'p33[]'){
          if ($(this).val() === '9'){
            if($(this).is(':checked')){
              $("#p33_sh").show();
              $('#encuestaURT').formValidation('revalidateField', 'p33_otrocual');
            }
            else{
              $("#p33_sh").hide();
            }
          }
					//$('#encuestaURT').formValidation('revalidateField', 'p33_otrocual');
    			$('#encuestaURT').formValidation('revalidateField', field);
    		}
    })
    .end()
  .find('select[name="p35"]')
  	.unbind('change')
   	.change(function(){
   		var field = $(this).attr('name');
      if ($(this).val() === '8'){
        $("#p35_sh").show();
        $('#encuestaURT').formValidation('revalidateField', 'p35_otrocual');
      }else{
        $("#p35_sh").hide();
      }
 			//$('#encuestaURT').formValidation('revalidateField', 'p35_otrocual');
			$('#encuestaURT').formValidation('revalidateField', field);

   		if($(this).val() === '7'){
   			$('#pregunta36').hide();
   		}else if ($(this).val() !== '7' && $(this).val() !== ''){
   			$('#pregunta36').show();
   		}
   	})
   	.end()
  .find('select[name="p37_nivel"]')
    .unbind('change')
    .change(function(){
      var field = $(this).attr('name');
      var estructura = '<option value="">Seleccione ...</option>';
      if($(this).val() === '1'){
        estructura += '<option value="1">ANTIOQUIA</option>';
        estructura += '<option value="2">ATLÁNTICO</option>';
        estructura += '<option value="3">BOGOTA, D.C.</option>';
        estructura += '<option value="4">BOLÍVAR</option>';
        estructura += '<option value="5">CAUCA</option>';
        estructura += '<option value="6">LA GUAJIRA</option>';
        estructura += '<option value="7">CHOCÓ</option>';
        estructura += '<option value="8">CORDOBA</option>';
        estructura += '<option value="9">MAGDALENA</option>';
        estructura += '<option value="10">META</option>';
        estructura += '<option value="11">NARIÑO</option>';
        estructura += '<option value="12">NORTE DE SANTANDER</option>';
        estructura += '<option value="13">PUTUMAYO</option>';
        estructura += '<option value="14">MAGDALENA MEDIO</option>';
        estructura += '<option value="15">SUCRE</option>';
        estructura += '<option value="16">TOLIMA</option>';
        estructura += '<option value="17">VALLE DEL CAUCA</option>';
        $('#encuestaURT').find('select[name="p37_estructura"]').html(estructura);
        $('#p37_1_sh').show();
        $('#p37_2_sh').show();
      }else if ($(this).val() === '2'){
        estructura += '<option value="1">DIRECCIÓN DE ASUNTOS ÉTNICOS E INDIGENAS </option>';
        estructura += '<option value="2">DIRECCIÓN JURÍDICA DE RESTITUCIÓN </option>';
        estructura += '<option value="3">DIRECCIÓN SOCIAL </option>';
        estructura += '<option value="4">DIRECCIÓN TÉCNICA CATASTRAL ANÁLISIS TERRITORIAL </option>';
        estructura += '<option value="5">GRUPO DE CONTRATACIÓN E INTELIGENCIA DE MERCADO (CONTRACTUAL)</option>';
        estructura += '<option value="6">GRUPO DE GESTIÓN ADMINISTRATIVA </option>';
        estructura += '<option value="7">GRUPO DE GESTIÓN DOCUMENTAL</option>';
        estructura += '<option value="8">GRUPO DE GESTIÓN ECONÓMICA Y FINANCIERA</option>';
        estructura += '<option value="9">GRUPO DE GESTIÓN EN PREVENCIÓN PROTECCIÓN Y SEGURIDAD </option>';
        estructura += '<option value="10">GRUPO DE TALENTO HUMANO </option>';
        estructura += '<option value="11">OFICINA ASESORA DE COMUNICACIONES</option>';
        estructura += '<option value="12">OFICINA ASESORA DE PLANEACIÓN</option>';
        estructura += '<option value="19">OFICINA DE CONTROL INTERNO </option>';
        estructura += '<option value="13">OFICINA DE CONTROL INTERNO DISCIPLINARIO </option>';
        estructura += '<option value="14">OFICINA DE TECNOLOGÍAS DE LA INFORMACIÓN </option>';
        estructura += '<option value="15">SECRETARIA GENERAL</option>';
        estructura += '<option value="16">SUBDIRECCIÓN GENERAL -  GRUPO SNARIV (VIVIENDA)</option>';
        estructura += '<option value="17">SUBDIRECCIÓN GENERAL – PROYECTOS PRODUCTIVOS</option>';
        estructura += '<option value="18">SUBDIRECCIÓN GENERAL FONDO </option>';
        estructura += '<option value="20">OTRA </option>';
        $('#encuestaURT').find('select[name="p37_estructura"]').html(estructura);
        $('#p37_1_sh').hide();
        $('#p37_2_sh').hide();
      }
    })
    .end()
  .find('select[name="p37_estructura"]')
    .unbind('change')
    .change(function(){
      var mnpios = '<option value="">Seleccione ...</option>';
      if ( $(this).val() === '1' ){
        mnpios += '<option value="APARTADO">APARTADO</option>';
        mnpios += '<option value="CAUCASIA">CAUCASIA</option>';
        mnpios += '<option value="MEDELLIN">MEDELLIN</option>';
      }
      if ( $(this).val() === '2' ){
        mnpios += '<option value="BARRANQUILLA">BARRANQUILLA</option>';
      }else
      if ( $(this).val() === '3' ){
        mnpios += '<option value="BOGOTA, D.C.">BOGOTA, D.C.</option>';
      }else
      if ( $(this).val() === '4' ){
        mnpios += '<option value="CARMEN DE BOLIVAR">CARMEN DE BOLIVAR</option>';
        mnpios += '<option value="CARTAGENA DE INDIAS">CARTAGENA DE INDIAS</option>';
      }else
      if ( $(this).val() === '5' ){
        mnpios += '<option value="POPAYAN">POPAYAN</option>';
      }else
      if ( $(this).val() === '6' ){
        mnpios += '<option value="VALLEDUPAR">VALLEDUPAR</option>';
      }else
      if ( $(this).val() === '7' ){
        mnpios += '<option value="QUIBDO">QUIBDO</option>';
      }else
      if ( $(this).val() === '8' ){
        mnpios += '<option value="MONTERIA">MONTERIA</option>';
      }else
      if ( $(this).val() === '9' ){
        mnpios += '<option value="PLATO">PLATO</option>';
        mnpios += '<option value="SANTA MARTA">SANTA MARTA</option>';
      }else
      if ( $(this).val() === '10' ){
        mnpios += '<option value="VILLAVICENCIO">VILLAVICENCIO</option>';
      }else
      if ( $(this).val() === '11' ){
        mnpios += '<option value="PASTO">PASTO</option>';
        mnpios += '<option value="TUMACO">TUMACO</option>';
      }else
      if ( $(this).val() === '12' ){
        mnpios += '<option value="CUCUTA">CUCUTA</option>';
      }else
      if ( $(this).val() === '13' ){
        mnpios += '<option value="MOCOA">MOCOA</option>';
        
      }else
      if ( $(this).val() === '14' ){
        mnpios += '<option value="AGUACHICA">AGUACHICA</option>';
        mnpios += '<option value="BARRANCABERMEJA">BARRANCABERMEJA</option>';
        mnpios += '<option value="BUCARAMANGA">BUCARAMANGA</option>';
      }else
      if ( $(this).val() === '15' ){
        mnpios += '<option value="SAN MARCOS">SAN MARCOS</option>';
        mnpios += '<option value="SINCELEJO">SINCELEJO</option>';
      }else
      if ( $(this).val() === '16' ){
        mnpios += '<option value="IBAGUE">IBAGUE</option>';
      }else
      if ( $(this).val() === '17' ){
        mnpios += '<option value="PEREIRA">PEREIRA</option>';
      }

      $('#encuestaURT').formValidation('revalidateField', 'p37_estructura');

      $('#encuestaURT').find('select[name="p37_sede"]').html(mnpios);
    })
    .end()
	.formValidation({
	  framework: 'bootstrap',
	  /*icon: {
	      valid: 'glyphicon glyphicon-ok',
	      invalid: 'glyphicon glyphicon-remove',
	      validating: 'glyphicon glyphicon-refresh'
	  },*/
	  // This option will not ignore invisible fields which belong to inactive panels
	  //excluded: ':disabled',
	  fields: {
	  	
      p1: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 1'
          }
        }
      },
      p2: {
      	selector: '.p2_tiempo',
      	validators: {
	        callback: {
            message: 'Debe ingresar el número de años o el número de meses o años y meses, que lleva trabajando en la URT',
            callback: function(value, validator, $field) {
                var isEmpty = true,
                    // Get the list of fields
                    $fields = validator.getFieldElements('p2');
                for (var i = 0; i < $fields.length; i++) {
                    if ($fields.eq(i).val() !== '') {
                        isEmpty = false;
                        break;
                    }
                }
                if (!isEmpty) {
                    // Update the status of callback validator for all fields
                    validator.updateStatus('p2', validator.STATUS_VALID, 'callback');
                    return true;
                }

                return false;
            }
	        },
	        numeric: {
            message: 'El valor debe ser un número'
	        },
	        integer: {
	        	message: 'El valor debe ser un número entero'
	        },
	        between: {
	        	min: 1,
	        	max: 11, 
	        	message: 'El valor debe ser entre 1 y 11'
	        }
      	}
      },
      p3: {
      	selector: '.p3_tiempo',
      	validators: {
	        callback: {
            message: 'Debe ingresar el número de años o el número de meses o años y meses, que tiene de experiencia',
            callback: function(value, validator, $field) {
                var isEmpty = true,
                    // Get the list of fields
                    $fields = validator.getFieldElements('p3');
                for (var i = 0; i < $fields.length; i++) {
                    if ($fields.eq(i).val() !== '') {
                        isEmpty = false;
                        break;
                    }
                }
                if (!isEmpty) {
                    // Update the status of callback validator for all fields
                    validator.updateStatus('p3', validator.STATUS_VALID, 'callback');
                    return true;
                }

                return false;
            }
	        },
	        numeric: {
            message: 'El valor no es un número'
	        },
	        integer: {
	        	message: 'El valor debe ser un número entero'
	        },
	        between: {
	        	min: 1,
	        	max: 11, 
	        	message: 'El valor debe ser entre 1 y 11'
	        }
      	}
      },
      p4: {
      	validators:{
      		notEmpty: {
            message: 'Debe ingresar un valor'
          },
	        numeric: {
            message: 'El valor no es un número'
	        },
	        integer: {
	        	message: 'El valor debe ser un número entero'
	        },
	        between: {
	        	min: 18,
	        	max: 99, 
	        	message: 'El valor debe ser entre 18 y 99'
	        }
      	}
      },
      p5: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 5'
          }
        }
      },
      p6: {
	      row: '.col-xs-4',
	      validators: {
          notEmpty: {
            message: 'En la Pregunta No. 6 debe seleccionar una opción'
          }
	      }
      },
      p7: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 7'
          }
        }
      },
      'p8[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 8'
				  }
				}
      },
      p9: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'En la Pregunta No. 9 debe seleccionar una opción'
      		}
      	}
      },
      p10: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 10'
          }
        }
      },
      p11: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 11'
          }
        }
      },
      p12: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'En la Pregunta No. 12 debe seleccionar una opción'
      		}
      	}
      },
      'p13[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 13'
				  }
				}
      },
      p14: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 14'
          }
        }
      },
      'p15[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 15'
				  }
				}
      },
      p16: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 16'
          }
        }
      },
      p17: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 17'
          }
        }
      },
      p18: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 18'
          }
        }
      },
      p19_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 19, ítem a.'
          }
        }
      },
      p19_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 19, ítem b.'
          }
        }
      },
      p19_c: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 19, ítem c.'
          }
        }
      },
      p20_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 20, ítem a.'
          }
        }
      },
      p20_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 20, ítem b.'
          }
        }
      },
      p20_c: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 20, ítem c.'
          }
        }
      },
      p20_d: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 20, ítem d.'
          }
        }
      },
      p20_e: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 20, ítem e.'
          }
        }
      },
      p21_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem a.'
          }
        }
      },
      p21_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem b.'
          }
        }
      },
      p21_c: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem c.'
          }
        }
      },
      p21_d: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem d.'
          }
        }
      },
      p21_e: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem e.'
          }
        }
      },
      p21_f: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 21, ítem f.'
          }
        }
      },
      p22: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 22'
          }
        }
      },
      p23: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 23'
          }
        }
      },
      'p24[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 24'
				  }
				}
      },
      p25_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 25, ítem a.'
          }
        }
      },
      p25_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 25, ítem b.'
          }
        }
      },
      p26_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 26, ítem a.'
          }
        }
      },
      p26_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 26, ítem b.'
          }
        }
      },
      p27: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 27'
          }
        }
      },
      p28: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 28'
          }
        }
      },
      p29: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'En la Pregunta No. 29 debe seleccionar una opción'
      		}
      	}
      },
      p30: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 30'
          }
        }
      },
      p31: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 31'
          }
        }
      },
      'p32[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 32'
				  }
				}
      },
      'p33[]': {
				validators: {
				  choice: {
				    min: 1,
				    message: 'Debe seleccionar una o varias opciones en la Pregunta No. 33'
				  }
				}
      },
      p34_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 34, ítem a.'
          }
        }
      },
      p34_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 34, ítem b.'
          }
        }
      },
      p34_c: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 34, ítem c.'
          }
        }
      },
      p34_d: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 34, ítem d.'
          }
        }
      },
      p34_e: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 34, ítem e.'
          }
        }
      },
      'p34_1[]': {
        validators: {
          choice: {
            min: 1,
            message: 'Debe seleccionar una o varias opciones en la Pregunta No. 34'
          }
        }
      },
      'p34_2[]': {
        validators: {
          choice: {
            min: 1,
            message: 'Debe seleccionar una o varias opciones en la Pregunta No. 35'
          }
        }
      },
      p35: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'Debe seleccionar una opción'
      		}
      	}
      },
      p36_a: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 38, ítem a.'
          }
        }
      },
      p36_b: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 38, ítem b.'
          }
        }
      },
      p36_c: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 38, ítem c.'
          }
        }
      },
      p36_d: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 38, ítem d.'
          }
        }
      },
      p36_e: {
        validators: {
          notEmpty: {
            message: 'Debe escoger en la Pregunta No. 38, ítem e.'
          }
        }
      },
      p37_nivel: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'Debe seleccionar una opción'
      		}
      	}
      },
      p37_estructura: {
        row: '.col-xs-4',
        validators: {
          notEmpty: {
            message: 'Debe seleccionar una opción'
          }
        }
      },
      p37_sede: {
        row: '.col-xs-4',
        validators: {
          notEmpty: {
            message: 'Debe seleccionar una opción'
          }
        }
      },
      p38: {
	      row: '.col-xs-4',
      	validators: {
      		notEmpty: {
      			message: 'Debe seleccionar una opción'
      		}
      	}
      },
      p39: {
      	validators: {
      		notEmpty: {
      			message: 'Debe seleccionar una opción'
      		}
      	}
      },
      p40: {
        validators: {
          notEmpty: {
            message: 'Debe seleccionar una opción'
          }
        }
      },
      p41: {
        validators: {
          notEmpty: {
            message: 'Debe seleccionar una opción'
          }
        }
      },
      p13_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otro(s) aspecto(s)',
            callback: function(value, validator, $field) {
              var esta = false;
              $.each($('[name="p13[]"]:checked'),function(index,input){
	            	if (input.value === '8'){
	            		esta = true;
	            	}
	        		});
              return (!esta) ? null : (value !== '');
            }
          }
        }
      },
      p15_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otra(s) razón(es)',
            callback: function(value, validator, $field) {
              var esta = false;
              $.each($('[name="p15[]"]:checked'),function(index,input){
	            	if (input.value === '8'){
	            		esta = true;
	            	}
	        		});
              return (!esta) ? null : (value !== '');
            }
          }
        }
      },
      p24_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otro(s) aspecto(es)',
            callback: function(value, validator, $field) {
              var esta = false;
              $.each($('[name="p24[]"]:checked'),function(index,input){
	            	if (input.value === '13'){
	            		esta = true;
	            	}
	        		});
              return (!esta) ? null : (value !== '');
            }
          }
        }
      },
      p32_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otro(s) aspecto(es) positivo(s)',
            callback: function(value, validator, $field) {
              var esta = false;
              $.each($('[name="p32[]"]:checked'),function(index,input){
	            	if (input.value === '9'){
	            		esta = true;
	            	}
	        		});
              return (!esta) ? null : (value !== '');
            }
          }
        }
      },
      p33_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otro(s) aspecto(es) negativo(s)',
            callback: function(value, validator, $field) {
              var esta = false;
              $.each($('[name="p33[]"]:checked'),function(index,input){
	            	if (input.value === '9'){
	            		esta = true;
	            	}
	        		});
              return (!esta) ? null : (value !== '');
            }
          }
        }
      },
      p35_otrocual: {
        validators: {
          callback: {
            message: 'Favor especifique  otra(s) frecuencia(s) de consulta',
            callback: function(value, validator, $field) {
              var optSelected = $('select[name="p35"]').val();
                return (optSelected !== '8') ? null : (value !== '');
            }
          }
        }
      }

	  }
  })
	.on('err.validator.fv', function(e, data) {
		// $(e.target)    --> The field element
		// data.fv        --> The FormValidation instance
		// data.field     --> The field name
		// data.element   --> The field element
		// data.validator --> The current validator name

		data.element
		  .data('fv.messages')
		  // Hide all the messages
		  .find('.help-block[data-fv-for="' + data.field + '"]').hide()
		  // Show only message associated with current validator
		  .filter('[data-fv-validator="' + data.validator + '"]').show();
	})
	.on('success.form.fv', function(e) {
	  // Prevent form submission
	  e.preventDefault();

	  var $form = $(e.target),
	      fv    = $(e.target).data('formValidation');

	  // Do whatever you want here ...

	  // Then submit the form as usual
	  fv.defaultSubmit();
	});

	$('.wizard-card')
	.bootstrapWizard({
		'tabClass': 'nav nav-pills',
		'nextSelector': '.btn-next',
		'previousSelector': '.btn-previous',
		'lastSelector': '.btn-finish',
		 
		 onInit : function(tab, navigation, index){
			
		   //check number of tabs and fill the entire row
		   var $total = navigation.find('li').length;
		   $width = 100/$total;
		   
		   $display_width = $(document).width();
		   
		   if($display_width < 600 && $total > 3){
			   $width = 50;
		   }
		   
		   navigation.find('li').css('width',$width + '%');
		   
		},
		onNext: function(tab, navigation, index){
      /*if ( !$this->session->has('auth') ){
        alert ("El aplicativo ha superado el tiempo de inactividad, favor ingresar de nuevo !!!");
        //$dispatcher->forward(array('controller' => 'index', 'action' => 'index'));
        return false;
      }*/
      $.ajax({
      url: "<?php echo $this->url->get('encuesta/isSesion') ?>",
      method: "GET",
      }).done(function(data) 
      {
        console.log(data);
      });


			var numTabs    = $('#encuestaURT').find('.tab-pane').length;
      if( index === 4){
        //$("#modalCapV").modal("show");
      }
			var isValidTab = validateTab(index - 1);
			if (!isValidTab) {
        $("#modalRev").modal("show");
			  return false;
			}

			
			if (index === numTabs) {
			  // We are at the last tab
			  // Uncomment the following line to submit the form using the defaultSubmit() method
			  //$('#encuestaURT').formValidation('defaultSubmit');

			  // For testing purpose
			  //$('#completeModal').modal();
			}
			return true;
		},
    onPrevious: function(tab, navigation, index) {
      //return validateTab(index + 1);
      var isValidTab = validateTab(index + 1);
      if (!isValidTab) {
        //alert('Revise las preguntas !!! alguna no ha sido contestada');
        $("#modalRev").modal("show");
        return false;
      }
    },
		onTabClick : function(tab, navigation, index){
			// Disable the posibility to click on tabs
			return false;
		}, 
		onTabShow: function(tab, navigation, index) {
      clearTimeout(timer);
			$("html, body").animate({
				scrollTop:150
			},"slow");
			var $total = navigation.find('li').length;
			var $current = index+1;
			
			var wizard = navigation.closest('.wizard-card');
			
			// If it's the last tab then hide the last button and show the finish instead
			if($current >= $total) {
				$(wizard).find('.btn-next').hide();
				$(wizard).find('.btn-finish').show();
			} else {
				$(wizard).find('.btn-next').show();
				$(wizard).find('.btn-finish').hide();
			}
		}
	});

	
	$height = $(document).height();
	$('.set-full-height').css('height',$height);
	
  function verModal () {
    $("#modalCapV").modal("show");
  }

  function validateTab(index) {
    var fv   = $('#encuestaURT').data('formValidation'), // FormValidation instance
        // The current tab
    $tab = $('.wizard-card').find('.tab-pane').eq(index);

    // Validate the container
    fv.validateContainer($tab);

    var isValidStep = fv.isValidContainer($tab);
    if (isValidStep === false || isValidStep === null) {
        // Do not jump to the target tab
        return false;
    }

    return true;
  }
	
});

//$('#tab1').attr('class', 'disabled active');
/*
$('#tab2').attr('class', 'disabled');
$('#tab3').attr('class', 'disabled');
$('#tab4').attr('class', 'disabled');
$('#tab5').attr('class', 'disabled');
$('#tab6').attr('class', 'disabled');
$('#tab7').attr('class', 'disabled');
$('#tab8').attr('class', 'disabled');
$('#tab9').attr('class', 'disabled');
$('#tab10').attr('class', 'disabled');
$('#tab11').attr('class', 'disabled');
$('#tab12').attr('class', 'disabled');
$('#tab13').attr('class', 'disabled');
$('#tab14').attr('class', 'disabled');
$('#tab15').attr('class', 'disabled');
$('#tab16').attr('class', 'disabled');
$('#tab17').attr('class', 'disabled');
$('#tab18').attr('class', 'disabled');
$('#tab19').attr('class', 'disabled');
$('#tab20').attr('class', 'disabled');
$('#tab21').attr('class', 'disabled');
$('#tab22').attr('class', 'disabled');
$('#tab23').attr('class', 'disabled');*/


$('#tab1').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab2').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab3').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab4').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab5').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab6').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab7').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab8').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab9').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab10').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab11').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab12').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab13').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab14').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab15').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab16').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab17').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab18').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab19').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab20').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab21').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab22').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});

$('#tab23').click(function(event){
  if ($(this).hasClass('disabled')) { return false; }
  return true;
});





// Activa tabs
    $('.selectKid').click(function(event){
        $('.checkbox').removeAttr("disabled");
        $('#bank-tab').attr('class', 'active');
        $('#store-tab').attr('class', '');
        $('#store-tab1').attr('class', '');
    });
// Desactiva tabs
	$('.selectKid2').click(function(event){
	    $('#store-tab').attr('class', 'disabled');
	});
// selecciona un tab en especifico
	$('.selectKid3').click(function(event){
	    $('#pnav-tabs li a[href=#store]').tab('show');
	});

$('.btnNext').click(function(){
	var $tab = $('#myTabContent'), $active = $tab.find('.tab-pane.active'), text = $active.find('p:hidden').text();
  //alert(text);
  evaltab(text);

  //$('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});



function getRadioVal(form, name) {
    var val;
    // get list of radio buttons with specified name
    var radios = form.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}

$('#m_a_p_5_4').focusout(function(){
  var val = getRadioVal( document.getElementById('bid'), 'm_a_p_1' );
  if ( typeof(val) === "undefined" ){
  	alert('no ha elegido nada');
  }else{
		alert(val);  	
  }
});

function evaltextarea(nombre){		
		var valta =  (document.getElementById(nombre).value);
    if (valta != "") {
        return "0";
    }else{
        return "";
    }
}

function habilitarsgtetab () {
	return;
}

function evaltab(nombre){
	if (nombre == 'tab1'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_a_p_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_a_p_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_a_p_3' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_a_p_4' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_a_p_5' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else{
			alert('Valores = ' + v1+' ' + v2+' ' + v3+' ' + v4+' ' + v5 );
			habilitarsgtetab();
		}
	}else	if (nombre == 'tab2'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_3' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3 );
			habilitarsgtetab();
		}
	}else if (nombre == 'tab3'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_4' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_5' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_6' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 6')
		}else {
			//alert('Valores = ' + v1+' ' + v2+' ' + v3);
			if ( getRadioVal(document.getElementById('bid'), 'm_a_p_2') == "1" ){
				$('#pnav-tabs li a[href=#t4_1]').tab('show');
			}else if ( getRadioVal(document.getElementById('bid'), 'm_a_p_3') == "1" ){
				$('#pnav-tabs li a[href=#t4_2]').tab('show');
			}else{
				$('#pnav-tabs li a[href=#t5]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab4_1'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_7' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 7')
		}else {
			alert('Valores = ' + v1);
			if ( getRadioVal(document.getElementById('bid'), 'm_a_p_3') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else{
				$('#pnav-tabs li a[href=#t5]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab4_2'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_8' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 8')
		}else {
			alert('Valores = ' + v1);
			if ( getRadioVal(document.getElementById('bid'), 'm_a_p_2') == "1" && getRadioVal(document.getElementById('bid'), 'm_a_p_3') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else{
				$('#pnav-tabs li a[href=#t5]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab4_3'){
		v1 = evaltextarea('m_b_p_9');
		if ( v1 === ""){
			alert('Debe escribir alguna sugerencia en la Pregunta No. 9')
		}else {
			alert('Valores = ' + v1);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab5'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_10' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_11_a' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_11_b' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_12_a' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_12_b' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_13_a' );
		v7 = getRadioVal( document.getElementById('bid'), 'm_b_p_13_b' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 10')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 11a')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 11b')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 12a')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 12b')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 13a')
		}else if ( typeof(v7) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 13b')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6+' '+v7);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab6'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_14' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_15' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 13')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 14')
		}else {
			alert('Valores = ' + v1+' ' + v2);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab7'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_16' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_17' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_18' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 16')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 17')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 18')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab8'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_19' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_20' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_21' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_22' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_23' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_24' );
		v7 = getRadioVal( document.getElementById('bid'), 'm_b_p_25' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 19')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 20')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 21')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 22')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 23')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 24')
		}else if ( typeof(v7) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 25')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6+' '+v7);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab9'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_26' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_27' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_28' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_29' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_30' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_31' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 26')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 27')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 28')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 29')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 30')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 31')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab10'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_32' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_33' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_34' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_35' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_36' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_37' );
		v7 = getRadioVal( document.getElementById('bid'), 'm_b_p_38' );
		v8 = getRadioVal( document.getElementById('bid'), 'm_b_p_39' );
		v9 = getRadioVal( document.getElementById('bid'), 'm_b_p_40' );
		v10 = getRadioVal( document.getElementById('bid'), 'm_b_p_41' );
		v11 = getRadioVal( document.getElementById('bid'), 'm_b_p_42' );
		v12 = getRadioVal( document.getElementById('bid'), 'm_b_p_43' );
		v13 = getRadioVal( document.getElementById('bid'), 'm_b_p_44' );
		v14 = getRadioVal( document.getElementById('bid'), 'm_b_p_45' );
		v15 = getRadioVal( document.getElementById('bid'), 'm_b_p_46' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 32')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 33')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 34')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 35')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 36')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 37')
		}else if ( typeof(v7) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 38')
		}else if ( typeof(v8) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 39')
		}else if ( typeof(v9) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 40')
		}else if ( typeof(v10) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 41')
		}else if ( typeof(v11) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 42')
		}else if ( typeof(v12) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 43')
		}else if ( typeof(v13) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 44')
		}else if ( typeof(v14) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 45')
		}else if ( typeof(v15) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 46')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6+' '+v7+' '+v8+' '+v9+' '+v10+' '+v11+' '+v12+' '+v13+' '+v14+' '+v15);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab11'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_47' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_48' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_49' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 47')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 48')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 49')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab12'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_50' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_51' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_52' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_53' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_54' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_55' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 50')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 51')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 52')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 53')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 54')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 55')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab13'){
		v1 = evaltextarea('m_b_p_56_1');
		v2 = evaltextarea('m_b_p_56_2');
		v3 = evaltextarea('m_b_p_56_3');
		v4 = evaltextarea('m_b_p_57_1');
		v5 = evaltextarea('m_b_p_57_2');
		v6 = evaltextarea('m_b_p_57_3');
		if ( v1 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 56 Aspecto 1')
		}else if ( v2 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 56 Aspecto 2')
		}else if ( v3 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 56 Aspecto 3')
		}else if ( v4 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 57 Aspecto 1')
		}else if ( v5 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 57 Aspecto 2')
		}else if ( v6 === ""){
			alert('Debe escribir un aspecto en la Pregunta No. 57 Aspecto 3')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab14'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_3' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_c_p_4' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_c_p_5' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_c_p_6' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 6')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab15'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_7' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_8' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_9' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 7')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 8')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 9')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3);
			if ( getRadioVal(document.getElementById('bid'), 'm_a_p_5') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else{
				$('#pnav-tabs li a[href=#t17]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab16'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_10' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 10')
		}else {
			alert('Valores = ' + v1);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab17'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_11' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_12' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_13' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_c_p_14' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_c_p_15' );
		v6 = getRadioVal( document.getElementById('bid'), 'm_c_p_16' );
		v7 = getRadioVal( document.getElementById('bid'), 'm_c_p_17' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 11')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 12')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 13')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 14')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 15')
		}else if ( typeof(v6) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 16')
		}else if ( typeof(v7) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 17')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4+' '+v5+' '+v6+' '+v7);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab18'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_18' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_19' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_20' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_c_p_21' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 18')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 19')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 20')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 21')
		}else {
			alert('Valores = ' +v1+' '+v2+' '+v3+' '+v4);
			habilitarsgtetab();
		}
	}else if (nombre == 'tab19'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_3' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 7')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 8')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 9')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3);
			if ( getRadioVal(document.getElementById('bid'), 'm_d_p_1') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_2') == "1" ){
				$('#pnav-tabs li a[href=#t21]').tab('show');
			}else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
				$('#pnav-tabs li a[href=#t22]').tab('show');
			}else {
				$('#pnav-tabs li a[href=#t23]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab20'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_3' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_4' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_5' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3+' ' + v4+' ' + v5);
			if ( getRadioVal(document.getElementById('bid'), 'm_d_p_2') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
				$('#pnav-tabs li a[href=#t22]').tab('show');
			}else {
				$('#pnav-tabs li a[href=#t23]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab21'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_2_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_2_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_2_3' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_d_p_2_4' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_d_p_2_5' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3+' ' + v4+' ' + v5);
			if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
				$('.nav-tabs > .active').next('li').find('a').trigger('click');
			}else {
				$('#pnav-tabs li a[href=#t23]').tab('show');
			}
			habilitarsgtetab();
		}
	}else if (nombre == 'tab22'){
		v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_1' );
		v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_2' );
		v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_3' );
		v4 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_4' );
		v5 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_5' );
		if ( typeof(v1) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 1')
		}else if ( typeof(v2) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 2')
		}else if ( typeof(v3) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 3')
		}else if ( typeof(v4) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 4')
		}else if ( typeof(v5) === "undefined"){
			alert('Debe seleccionar en la Pregunta No. 5')
		}else {
			alert('Valores = ' + v1+' ' + v2+' ' + v3+' ' + v4+' ' + v5);
			habilitarsgtetab();
		}
	}
}

$(window).load(function() {
    $(".loader").fadeOut("slow");
})


$('#tabs-stacked li').click( function(){
var tabs_offset = $('#tabs-stacked').offset();
scrollTo(tabs_offset.left, tabs_offset.top);
});

//$('#tab1').attr('class', 'disabled active');

$('#tab2').attr('class', 'disabled');
$('#tab3').attr('class', 'disabled');
$('#tab4_1').attr('class', 'disabled');
$('#tab4_2').attr('class', 'disabled');
$('#tab4_3').attr('class', 'disabled');
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
$('#tab23').attr('class', 'disabled');


$('#tab1').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab2').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab3').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab4_1').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab4_2').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab4_3').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab5').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab6').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab7').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab8').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab9').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab10').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab11').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab12').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab13').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab14').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab15').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab16').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab17').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab18').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab19').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab20').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab21').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab22').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});

$('#tab23').click(function(event){
  //if ($(this).hasClass('disabled')) { return false; }
  return false;
});


/*
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
    });*/




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

function evaltextarea(nombre){      
        var valta =  (document.getElementById(nombre).value);
    if (valta != "") {
        return "0";
    }else{
        return "";
    }
}

function copyTextarea(n1, n2) {
    var valta =  (document.getElementById(n2).value);
    var elem = document.getElementById(""+n1);
    elem.value = valta;
}

function habilitarsgtetab (tabNo) {
       if (tabNo == 1)  {$('#tab1').attr('class', 'active'); $('#tab2').attr('class', 'disabled'); $('#tab3').attr('class', 'disabled'); $('#tab4_1').attr('class', 'disabled'); $('#tab4_2').attr('class', 'disabled'); $('#tab4_3').attr('class', 'disabled'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 2)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', 'active'); $('#tab3').attr('class', 'disabled'); $('#tab4_1').attr('class', 'disabled'); $('#tab4_2').attr('class', 'disabled'); $('#tab4_3').attr('class', 'disabled'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 3)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', 'active'); $('#tab4_1').attr('class', 'disabled'); $('#tab4_2').attr('class', 'disabled'); $('#tab4_3').attr('class', 'disabled'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 41) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', 'active'); $('#tab4_2').attr('class', 'disabled'); $('#tab4_3').attr('class', 'disabled'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 42) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', 'active'); $('#tab4_3').attr('class', 'disabled'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 43) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', 'active'); $('#tab5').attr('class', 'disabled'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 5)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', 'active'); $('#tab6').attr('class', 'disabled'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 6)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', 'active'); $('#tab7').attr('class', 'disabled'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 7)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', 'active'); $('#tab8').attr('class', 'disabled'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 8)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', 'active'); $('#tab9').attr('class', 'disabled'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 9)  {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', 'active'); $('#tab10').attr('class', 'disabled'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 10) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', 'active'); $('#tab11').attr('class', 'disabled'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 11) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', 'active'); $('#tab12').attr('class', 'disabled'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 12) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', 'active'); $('#tab13').attr('class', 'disabled'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 13) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', 'active'); $('#tab14').attr('class', 'disabled'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 14) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', 'active'); $('#tab15').attr('class', 'disabled'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 15) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', 'active'); $('#tab16').attr('class', 'disabled'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 16) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', 'active'); $('#tab17').attr('class', 'disabled'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 17) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', 'active'); $('#tab18').attr('class', 'disabled'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 18) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', 'active'); $('#tab19').attr('class', 'disabled'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 19) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', ''); $('#tab19').attr('class', 'active'); $('#tab20').attr('class', 'disabled'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 20) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', ''); $('#tab19').attr('class', ''); $('#tab20').attr('class', 'active'); $('#tab21').attr('class', 'disabled'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 21) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', ''); $('#tab19').attr('class', ''); $('#tab20').attr('class', ''); $('#tab21').attr('class', 'active'); $('#tab22').attr('class', 'disabled'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 22) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', ''); $('#tab19').attr('class', ''); $('#tab20').attr('class', ''); $('#tab21').attr('class', ''); $('#tab22').attr('class', 'active'); $('#tab23').attr('class', 'disabled');}
  else if (tabNo == 23) {$('#tab1').attr('class', ''); $('#tab2').attr('class', ''); $('#tab3').attr('class', ''); $('#tab4_1').attr('class', ''); $('#tab4_2').attr('class', ''); $('#tab4_3').attr('class', ''); $('#tab5').attr('class', ''); $('#tab6').attr('class', ''); $('#tab7').attr('class', ''); $('#tab8').attr('class', ''); $('#tab9').attr('class', ''); $('#tab10').attr('class', ''); $('#tab11').attr('class', ''); $('#tab12').attr('class', ''); $('#tab13').attr('class', ''); $('#tab14').attr('class', ''); $('#tab15').attr('class', ''); $('#tab16').attr('class', ''); $('#tab17').attr('class', ''); $('#tab18').attr('class', ''); $('#tab19').attr('class', ''); $('#tab20').attr('class', ''); $('#tab21').attr('class', ''); $('#tab22').attr('class', ''); $('#tab23').attr('class', 'active');}
}

function setValueInput(nombre, valor) {
    var elem = document.getElementById(""+nombre);
    elem.value = valor; 
}


function evaltabizq(){
  var actualInp = parseInt($("#actual").val());
  var tmpPos = new Array();
  for (i = 0; i<26; i++){
          if (i == 3){
      tmpPos[i-1] = (document.getElementById('tb41').value);
    }else if (i == 4){
      tmpPos[i-1] = (document.getElementById('tb42').value);
    }else if (i == 5){
      tmpPos[i-1] = (document.getElementById('tb43').value);
    }else {
      tmpPos[i-1] = (document.getElementById('tb'+i).value);
    }
  }
  for (j = actualInp; j>0; j--){
    if ( tmpPos[j-1] != "0" ){
      $("#actual").val(''+tmpPos[j-1]);
      $('#pnav-tabs li a[href=#t'+tmpPos[j-1]+']').tab('show');
    }
  }
  /*     if (nombre == 'tab1'){

  }else if (nombre == 'tab2'){
    
  }else if (nombre == 'tab3'){
    
  }else if (nombre == 'tab41'){
    
  }else if (nombre == 'tab42'){
    
  }else if (nombre == 'tab43'){
    
  }else if (nombre == 'tab5'){
    
  }else if (nombre == 'tab6'){
    
  }else if (nombre == 'tab7'){
    
  }else if (nombre == 'tab8'){
    
  }else if (nombre == 'tab9'){
    
  }else if (nombre == 'tab10'){
    
  }else if (nombre == 'tab11'){
    
  }else if (nombre == 'tab12'){
    
  }else if (nombre == 'tab13'){
    
  }else if (nombre == 'tab14'){
    
  }else if (nombre == 'tab15'){
    
  }else if (nombre == 'tab16'){
    
  }else if (nombre == 'tab17'){
    
  }else if (nombre == 'tab18'){
    
  }else if (nombre == 'tab19'){
    
  }else if (nombre == 'tab20'){
    
  }else if (nombre == 'tab21'){
    
  }else if (nombre == 'tab22'){
    
  }else if (nombre == 'tab23'){
    
  }*/
}

function evaltab(nombre){
    if (nombre == 'tab1'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_a_p_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_a_p_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_a_p_3' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_a_p_4' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_a_p_5' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else{
            $("#tb1").val('1');
            $("#actual").val('1');
            setValueInput("i_m_a_p_1" ,v1);
            setValueInput("i_m_a_p_2" ,v2);
            setValueInput("i_m_a_p_3" ,v3);
            setValueInput("i_m_a_p_4" ,v4);
            setValueInput("i_m_a_p_5" ,v5);
            $('#pnav-tabs li a[href=#t2]').tab('show');
            habilitarsgtetab(2);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else   if (nombre == 'tab2'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_3' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else {
            $("#tb2").val('2');
            $("#actual").val('2');
            setValueInput("i_m_b_p_1" ,v1);
            setValueInput("i_m_b_p_2" ,v2);
            setValueInput("i_m_b_p_3" ,v3);
            $('#pnav-tabs li a[href=#t3]').tab('show');
            habilitarsgtetab(3);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab3'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_4' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_5' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_6' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 6')
        }else {
            $("#tb3").val('3');
            $("#actual").val('3');
            setValueInput("i_m_b_p_4" ,v1);
            setValueInput("i_m_b_p_5" ,v2);
            setValueInput("i_m_b_p_6" ,v3);
            if ( getRadioVal(document.getElementById('bid'), 'm_a_p_2') == "1" ){
                $('#pnav-tabs li a[href=#t4_1]').tab('show');
                habilitarsgtetab(41);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else if ( getRadioVal(document.getElementById('bid'), 'm_a_p_3') == "1" ){
                $('#pnav-tabs li a[href=#t4_2]').tab('show');
                habilitarsgtetab(42);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else{
                $('#pnav-tabs li a[href=#t5]').tab('show');
                habilitarsgtetab(5);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }
        }
    }else if (nombre == 'tab4_1'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_7' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 7')
        }else {
            $("#tb41").val('4_1');
            $("#actual").val('4');
            setValueInput("i_m_b_p_7" ,v1);
            $('#pnav-tabs li a[href=#t4_3]').tab('show');
            habilitarsgtetab(43);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab4_2'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_8' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 8')
        }else {
            $("#tb42").val('4_2');
            $("#actual").val('5');
            setValueInput("i_m_b_p_8" ,v1);
            $('#pnav-tabs li a[href=#t4_3]').tab('show');
            habilitarsgtetab(43);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab4_3'){
        v1 = evaltextarea('m_b_p_9');
        if ( v1 === ""){
            alert('Debe escribir alguna sugerencia en la Pregunta No. 9')
        }else {
            $("#tb43").val('4_3');
            $("#actual").val('6');
            copyTextarea("i_m_b_p_9", 'm_b_p_9');
            $('#pnav-tabs li a[href=#t5]').tab('show');
            habilitarsgtetab(5);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
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
            alert('Debe calificar en la Pregunta No. 10')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 11a')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 11b')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 12a')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 12b')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 13a')
        }else if ( typeof(v7) === "undefined"){
            alert('Debe calificar en la Pregunta No. 13b')
        }else {
            $("#tb5").val('5');
            $("#actual").val('7');
            setValueInput("i_m_b_p_10" ,v1);
            setValueInput("i_m_b_p_11_a" ,v2);
            setValueInput("i_m_b_p_11_b" ,v3);
            setValueInput("i_m_b_p_12_a" ,v4);
            setValueInput("i_m_b_p_12_b" ,v5);
            setValueInput("i_m_b_p_13_a" ,v6);
            setValueInput("i_m_b_p_13_b" ,v7);
            $('#pnav-tabs li a[href=#t6]').tab('show');
            habilitarsgtetab(6);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab6'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_14' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_15' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 13')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 14')
        }else {
            $("#tb6").val('6');
            $("#actual").val('8');
            setValueInput("i_m_b_p_14" ,v1);
            setValueInput("i_m_b_p_15" ,v2);
            $('#pnav-tabs li a[href=#t7]').tab('show');
            habilitarsgtetab(7);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab7'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_16' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_17' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_18' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 16')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 17')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 18')
        }else {
            $("#tb7").val('7');
            $("#actual").val('9');
            setValueInput("i_m_b_p_16" ,v1);
            setValueInput("i_m_b_p_17" ,v2);
            setValueInput("i_m_b_p_18" ,v3);
            $('#pnav-tabs li a[href=#t8]').tab('show');
            habilitarsgtetab(8);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
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
            alert('Debe calificar en la Pregunta No. 19')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 20')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 21')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 22')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 23')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 24')
        }else if ( typeof(v7) === "undefined"){
            alert('Debe calificar en la Pregunta No. 25')
        }else {
            $("#tb8").val('8');
            $("#actual").val('10');
            setValueInput("i_m_b_p_19" ,v1);
            setValueInput("i_m_b_p_20" ,v2);
            setValueInput("i_m_b_p_21" ,v3);
            setValueInput("i_m_b_p_22" ,v4);
            setValueInput("i_m_b_p_23" ,v5);
            setValueInput("i_m_b_p_24" ,v6);
            setValueInput("i_m_b_p_25" ,v7);
            $('#pnav-tabs li a[href=#t9]').tab('show');
            habilitarsgtetab(9);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab9'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_26' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_27' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_28' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_29' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_30' );
        v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_31' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 26')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 27')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 28')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 29')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 30')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 31')
        }else {
            $("#tb9").val('9');
            $("#actual").val('11');
            setValueInput("i_m_b_p_26" ,v1);
            setValueInput("i_m_b_p_27" ,v2);
            setValueInput("i_m_b_p_28" ,v3);
            setValueInput("i_m_b_p_29" ,v4);
            setValueInput("i_m_b_p_30" ,v5);
            setValueInput("i_m_b_p_31" ,v6);
            $('#pnav-tabs li a[href=#t10]').tab('show');
            habilitarsgtetab(10);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
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
            alert('Debe calificar en la Pregunta No. 32')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 33')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 34')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 35')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 36')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 37')
        }else if ( typeof(v7) === "undefined"){
            alert('Debe calificar en la Pregunta No. 38')
        }else if ( typeof(v8) === "undefined"){
            alert('Debe calificar en la Pregunta No. 39')
        }else if ( typeof(v9) === "undefined"){
            alert('Debe calificar en la Pregunta No. 40')
        }else if ( typeof(v10) === "undefined"){
            alert('Debe calificar en la Pregunta No. 41')
        }else if ( typeof(v11) === "undefined"){
            alert('Debe calificar en la Pregunta No. 42')
        }else if ( typeof(v12) === "undefined"){
            alert('Debe calificar en la Pregunta No. 43')
        }else if ( typeof(v13) === "undefined"){
            alert('Debe calificar en la Pregunta No. 44')
        }else if ( typeof(v14) === "undefined"){
            alert('Debe calificar en la Pregunta No. 45')
        }else if ( typeof(v15) === "undefined"){
            alert('Debe calificar en la Pregunta No. 46')
        }else {
            $("#tb10").val('10');
            $("#actual").val('12');
            setValueInput("i_m_b_p_32" ,v1);
            setValueInput("i_m_b_p_33" ,v2);
            setValueInput("i_m_b_p_34" ,v3);
            setValueInput("i_m_b_p_35" ,v4);
            setValueInput("i_m_b_p_36" ,v5);
            setValueInput("i_m_b_p_37" ,v6);
            setValueInput("i_m_b_p_38" ,v7);
            setValueInput("i_m_b_p_39" ,v8);
            setValueInput("i_m_b_p_40" ,v9);
            setValueInput("i_m_b_p_41" ,v10);
            setValueInput("i_m_b_p_42" ,v11);
            setValueInput("i_m_b_p_43" ,v12);
            setValueInput("i_m_b_p_44" ,v13);
            setValueInput("i_m_b_p_45" ,v14);
            setValueInput("i_m_b_p_46" ,v15);
            $('#pnav-tabs li a[href=#t11]').tab('show');
            habilitarsgtetab(11);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab11'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_47' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_48' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_49' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 47')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 48')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 49')
        }else {
            $("#tb11").val('11');
            $("#actual").val('13');
            setValueInput("i_m_b_p_47" ,v1);
            setValueInput("i_m_b_p_48" ,v2);
            setValueInput("i_m_b_p_49" ,v3);
            $('#pnav-tabs li a[href=#t12]').tab('show');
            habilitarsgtetab(12);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab12'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_b_p_50' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_b_p_51' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_b_p_52' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_b_p_53' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_b_p_54' );
        v6 = getRadioVal( document.getElementById('bid'), 'm_b_p_55' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 50')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 51')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 52')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 53')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 54')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 55')
        }else {
            $("#tb12").val('12');
            $("#actual").val('14');
            setValueInput("i_m_b_p_50" ,v1);
            setValueInput("i_m_b_p_51" ,v2);
            setValueInput("i_m_b_p_52" ,v3);
            setValueInput("i_m_b_p_53" ,v4);
            setValueInput("i_m_b_p_54" ,v5);
            setValueInput("i_m_b_p_55" ,v6);
            $('#pnav-tabs li a[href=#t13]').tab('show');
            habilitarsgtetab(13);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
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
            $("#tb13").val('13');
            $("#actual").val('15');
            copyTextarea("i_m_b_p_56_1", 'm_b_p_56_1');
            copyTextarea("i_m_b_p_56_2", 'm_b_p_56_2');
            copyTextarea("i_m_b_p_56_3", 'm_b_p_56_3');
            copyTextarea("i_m_b_p_57_1", 'm_b_p_57_1');
            copyTextarea("i_m_b_p_57_2", 'm_b_p_57_2');
            copyTextarea("i_m_b_p_57_3", 'm_b_p_57_3');
            $('#pnav-tabs li a[href=#t14]').tab('show');
            habilitarsgtetab(14);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab14'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_3' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_c_p_4' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_c_p_5' );
        v6 = getRadioVal( document.getElementById('bid'), 'm_c_p_6' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 6')
        }else {
            $("#tb14").val('14');
            $("#actual").val('16');
            setValueInput("i_m_c_p_1" ,v1);
            setValueInput("i_m_c_p_2" ,v2);
            setValueInput("i_m_c_p_3" ,v3);
            setValueInput("i_m_c_p_4" ,v4);
            setValueInput("i_m_c_p_5" ,v5);
            setValueInput("i_m_c_p_6" ,v6);
            $('#pnav-tabs li a[href=#t15]').tab('show');
            habilitarsgtetab(15);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab15'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_7' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_8' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_9' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 7')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 8')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 9')
        }else {
            $("#tb15").val('15');
            $("#actual").val('17');
            setValueInput("i_m_c_p_7" ,v1);
            setValueInput("i_m_c_p_8" ,v2);
            setValueInput("i_m_c_p_9" ,v3);
            if ( getRadioVal(document.getElementById('bid'), 'm_a_p_5') == "1" ){
                $('#pnav-tabs li a[href=#t16]').tab('show');
                habilitarsgtetab(16);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else{
                $('#pnav-tabs li a[href=#t17]').tab('show');
                habilitarsgtetab(17);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }
        }
    }else if (nombre == 'tab16'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_10' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 10')
        }else {
            $("#tb16").val('16');
            $("#actual").val('18');
            setValueInput("i_m_c_p_10" ,v1);
                $('#pnav-tabs li a[href=#t17]').tab('show');
            habilitarsgtetab(17);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
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
            alert('Debe calificar en la Pregunta No. 11')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 12')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 13')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 14')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 15')
        }else if ( typeof(v6) === "undefined"){
            alert('Debe calificar en la Pregunta No. 16')
        }else if ( typeof(v7) === "undefined"){
            alert('Debe calificar en la Pregunta No. 17')
        }else {
            $("#tb17").val('17');
            $("#actual").val('19');
            setValueInput("i_m_c_p_11" ,v1);
            setValueInput("i_m_c_p_12" ,v2);
            setValueInput("i_m_c_p_13" ,v3);
            setValueInput("i_m_c_p_14" ,v4);
            setValueInput("i_m_c_p_15" ,v5);
            setValueInput("i_m_c_p_16" ,v6);
            setValueInput("i_m_c_p_17" ,v7);
            $('#pnav-tabs li a[href=#t18]').tab('show');
            habilitarsgtetab(18);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab18'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_c_p_18' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_c_p_19' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_c_p_20' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_c_p_21' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 18')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 19')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 20')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 21')
        }else {
            $("#tb18").val('18');
            $("#actual").val('20');
            setValueInput("i_m_c_p_18" ,v1);
            setValueInput("i_m_c_p_19" ,v2);
            setValueInput("i_m_c_p_20" ,v3);
            setValueInput("i_m_c_p_21" ,v4);
            $('#pnav-tabs li a[href=#t19]').tab('show');
            habilitarsgtetab(19);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab19'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_3' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 7')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 8')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 9')
        }else {
            $("#tb19").val('19');
            $("#actual").val('21');
            setValueInput("i_m_d_p_1" ,v1);
            setValueInput("i_m_d_p_2" ,v2);
            setValueInput("i_m_d_p_3" ,v3);
            if ( getRadioVal(document.getElementById('bid'), 'm_d_p_1') == "1" ){
                $('#pnav-tabs li a[href=#t20]').tab('show');
                habilitarsgtetab(20);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_2') == "1" ){
                $("#tb20").val('0');
                $('#pnav-tabs li a[href=#t21]').tab('show');
                habilitarsgtetab(21);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
                $("#tb20").val('0');
                $("#tb21").val('0');
                $('#pnav-tabs li a[href=#t22]').tab('show');
                habilitarsgtetab(22);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else {
                $("#tb20").val('0');
                $("#tb21").val('0');
                $("#tb22").val('0');
                $('#pnav-tabs li a[href=#t23]').tab('show');
                habilitarsgtetab(23);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }
        }
    }else if (nombre == 'tab20'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_3' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_4' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_d_p_1_5' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else {
            $("#tb20").val('20');
            $("#actual").val('22');
            setValueInput("i_m_d_p_1_1" ,v1);
            setValueInput("i_m_d_p_1_2" ,v2);
            setValueInput("i_m_d_p_1_3" ,v3);
            setValueInput("i_m_d_p_1_4" ,v4);
            setValueInput("i_m_d_p_1_5" ,v5);
            if ( getRadioVal(document.getElementById('bid'), 'm_d_p_2') == "1" ){
                $('#pnav-tabs li a[href=#t21]').tab('show');
                habilitarsgtetab(21);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
                $('#pnav-tabs li a[href=#t22]').tab('show');
                habilitarsgtetab(22);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else {
                $('#pnav-tabs li a[href=#t23]').tab('show');
                habilitarsgtetab(23);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
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
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else {
            $("#tb21").val('21');
            $("#actual").val('23');
            setValueInput("i_m_d_p_2_1" ,v1);
            setValueInput("i_m_d_p_2_2" ,v2);
            setValueInput("i_m_d_p_2_3" ,v3);
            setValueInput("i_m_d_p_2_4" ,v4);
            setValueInput("i_m_d_p_2_5" ,v5);
            if ( getRadioVal(document.getElementById('bid'), 'm_d_p_3') == "1" ){
                $('#pnav-tabs li a[href=#t22]').tab('show');
                habilitarsgtetab(22);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }else {
                $('#pnav-tabs li a[href=#t23]').tab('show');
                habilitarsgtetab(23);
                var tabs_offset = $('#tabs-stacked').offset();
                scrollTo(tabs_offset.left, tabs_offset.top);
            }
        }
    }else if (nombre == 'tab22'){
        v1 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_1' );
        v2 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_2' );
        v3 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_3' );
        v4 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_4' );
        v5 = getRadioVal( document.getElementById('bid'), 'm_d_p_3_5' );
        if ( typeof(v1) === "undefined"){
            alert('Debe calificar en la Pregunta No. 1')
        }else if ( typeof(v2) === "undefined"){
            alert('Debe calificar en la Pregunta No. 2')
        }else if ( typeof(v3) === "undefined"){
            alert('Debe calificar en la Pregunta No. 3')
        }else if ( typeof(v4) === "undefined"){
            alert('Debe calificar en la Pregunta No. 4')
        }else if ( typeof(v5) === "undefined"){
            alert('Debe calificar en la Pregunta No. 5')
        }else {
            $("#tb22").val('22');
            $("#actual").val('24');
            setValueInput("i_m_d_p_3_1" ,v1);
            setValueInput("i_m_d_p_3_2" ,v2);
            setValueInput("i_m_d_p_3_3" ,v3);
            setValueInput("i_m_d_p_3_4" ,v4);
            setValueInput("i_m_d_p_3_5" ,v5);
            $('#pnav-tabs li a[href=#t23]').tab('show');
            habilitarsgtetab(23);
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        }
    }else if (nombre == 'tab23'){
      $("#tb23").val('23');
      $("#actual").val('25');
    }
}

CharacterCount = function(TextArea,FieldToCount){
  var myField = document.getElementById(TextArea);
  var myLabel = document.getElementById(FieldToCount); 
  if(!myField || !myLabel){return false}; // catches errors
  var MaxChars =  myField.maxLengh;
  if(!MaxChars){MaxChars =  myField.getAttribute('maxlength') ; };  if(!MaxChars){return false};
  var remainingChars =   MaxChars - myField.value.length;
  myLabel.innerHTML = "Quedan " + remainingChars +" caracteres";// de " + MaxChars;
}

$('.btnNext').click(function(){
  var $tab = $('#myTabContent'), $active = $tab.find('.tab-pane.active'), text = $active.find('p:hidden').text();
  evaltab(text);
  //$('.nav-tabs > .active').next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function(){
  //$('.nav-tabs > .active').prev('li').find('a').trigger('click');
  var actualInp = parseInt($("#actual").val());
  var tmpPos = new Array();
  var txt1 = 'tb'+1;
  var tmp1 = 0;
  var tmp2 = 0;
  var bandera = true;
  for (i = 0; i<26; i++){
          if (i == 3 && bandera){
      tmpPos[i] = (document.getElementById('tb41').value);
    }else if (i == 4 && bandera){
      tmpPos[i] = (document.getElementById('tb42').value);
    }else if (i == 5 && bandera){
      tmpPos[i] = (document.getElementById('tb43').value);
      i = 3;
      bandera = false;
    }else {
        tmp1 = i+1;
      if (bandera){
        if (tmp1 < 24){
          tmpPos[i] = (document.getElementById('tb'+tmp1 ).value);
        }
      }else{
        if (tmp1 < 24){
          tmpPos[i+2] = (document.getElementById('tb'+tmp1 ).value);
        }
      }
    }
  }
  for (j = (actualInp); j>0; j--){
    if ( tmpPos[j-1] == "0" ){

      if (tmpPos[j-2] == "0"){

        if (tmpPos[j-3] == "0"){
          $("#actual").val(''+(j-4));
                if ( j == 6 ){
            $("#tb43").val('0');
          }else if ( j == 5 ){
            $("#tb42").val('0');
          }else if ( j == 4 ){
            $("#tb41").val('0');
          }else{
            $("#tb"+(j-2)).val('0');
          }
          $('#pnav-tabs li a[href=#t'+tmpPos[j-4]+']').tab('show');
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
          break;
        }else{
          $("#actual").val(''+(j-3));
                if ( j == 6 ){
            $("#tb43").val('0');
          }else if ( j == 5 ){
            $("#tb42").val('0');
          }else if ( j == 4 ){
            $("#tb41").val('0');
          }else{
            $("#tb"+(j-2)).val('0');
          }
          $('#pnav-tabs li a[href=#t'+tmpPos[j-3]+']').tab('show');
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
          break;
        }

      }else{
        $("#actual").val(''+(j-2));
              if ( j == 6 ){
          $("#tb43").val('0');
        }else if ( j == 5 ){
          $("#tb42").val('0');
          $("#tb41").val('0');
        }else if ( j == 4 ){
          $("#tb41").val('0');
        }else{
          $("#tb"+(j-1)).val('0');
        }
        $('#pnav-tabs li a[href=#t'+tmpPos[j-2]+']').tab('show');
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
        break;
      }

    }else{
      $("#actual").val(''+(j-1));
            if ( j == 6 ){
        $("#tb43").val('0');
      }else if ( j == 5 ){
        $("#tb42").val('0');
      }else if ( j == 4 ){
        $("#tb41").val('0');
      }else{
        $("#tb"+j).val('0');
      }
      $('#pnav-tabs li a[href=#t'+tmpPos[j-1]+']').tab('show');
            var tabs_offset = $('#tabs-stacked').offset();
            scrollTo(tabs_offset.left, tabs_offset.top);
      break;
    }

  }
});


setInterval(function(){CharacterCount('m_b_p_9','CharCountLabel1')},55);
setInterval(function(){CharacterCount('m_b_p_56_1','CharCountLabel2')},55);
setInterval(function(){CharacterCount('m_b_p_56_2','CharCountLabel3')},55);
setInterval(function(){CharacterCount('m_b_p_56_3','CharCountLabel4')},55);
setInterval(function(){CharacterCount('m_b_p_57_1','CharCountLabel5')},55);
setInterval(function(){CharacterCount('m_b_p_57_2','CharCountLabel6')},55);
setInterval(function(){CharacterCount('m_b_p_57_3','CharCountLabel7')},55);
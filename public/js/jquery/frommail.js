function window_onload() {
  if ( (document.getElementById("us").value) != "" ){
  	$("#email").val((document.getElementById("us").value));
  	$("#password").val((document.getElementById("ps").value));
  }
}


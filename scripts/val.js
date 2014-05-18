function validate_form() {
  // set error to 0
  var error = 0;
  // add or error count if error found
  error += check_form_values();
  // allow the user to continue if no errors found
  return (error > 0) ? false : true;
}

function getElementsByTagNames(list,obj) {
  var tags = {}, i, result = [], elms;
  obj = obj || document;
  var tags = {};
  for (var i=0; i<list.length; i++)
    tags[list[i].toUpperCase()] = true;
    elms = obj.getElementsByTagName('*');
    for (i=0; i<elms.length; i++)
      if (elms[i].tagName in tags) result.push(elms[i]);
  return result;
}

function check_form_values() {
  var error = 0;
  // grab all selects
  var els = getElementsByTagNames(['select'],document);
  errormsg = "";
  // set error msg
  if(els.length>0) {
    // loop through selects and display on error, using the title attribute
    for (var i = 0; i < els.length; i++) {
	  if(els[i].value == "" || els[i].value == null) {
        errormsg += "<li>" + els[i].getAttribute('title') + "</li>";
        error++;
	  }
	}
  }

  els = getElementsByTagNames(['input','textarea'],document);
  // set error msg
  if(els.length>0) {
    errormsg += "";
    for (var i = 0; i < els.length; i++) {
	  // exclusions if statement
      if(els[i].name != "studentno" && els[i].name != "name" && els[i].name != "formfileattachment") {

		if(els[i].name == "phone") {
          var phoneExpression = /^[0-9]{10,20}$/
		  if(els[i].value.search(phoneExpression) >= 0) {}
		  else {
            errormsg += "<li>" + els[i].getAttribute('title') + "</li>";
			error++;  
		  }
		}

        if(els[i].name == "emailaddress") {
		  var emailExpression = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/
		  if(els[i].value.search(emailExpression) >= 0) {}
		  else {
            errormsg += "<li>Please enter your email in the correct format (ie: example@example.com)</li>";
			error++;  
		  }
		}
		
		
        if(els[i].name != "phone" && els[i].name != "emailaddress" && (els[i].value == "" || els[i].value == null)) {
          errormsg += "<li>" + els[i].getAttribute('title') + "</li>";
	      error++;
		}
	  }
    }
  }

  // display if an error
  if(error > 0) {
	document.getElementById("errorbox").style.display = "block";
	document.getElementById("errorbox").innerHTML = "<a href=\"#\" id='title' class='title'>The following errors have been found:</a><br />" + "<ul>" + errormsg + "</ul>";
	document.getElementById("title").focus();
  }
  else {
	document.getElementById("errorbox").style.display = "none";
  }
  // return error count
  return error;
}
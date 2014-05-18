// ------------------------------------------------------------------------  //
// function sendMail
// Using Ajax, a form is submitted regarding trainer assistance, and then frameset
// is closed.
// ------------------------------------------------------------------------  //
function sendmail(typ) {
  // grab button pressed
  var test = typ;
  // set the hidden field based on button clicked
  sethidden(test);
  // check if values correct, if so send value to mailphp
  if(checkRequired()) {
    MakeRequest();
  }
}

// ------------------------------------------------------------------------  //
// function checkRequired
// checks fields on the form if they have been filled out, and don't allow
// submit until correct
// ------------------------------------------------------------------------  //
function checkRequired() {
  var valid = true;
  var fullname = document.getElementById("fullname").value;
  var emailaddress = document.getElementById("emailaddress").value;
  var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
  
  // Check fullname entered
  if(fullname == "") {
    alert("Full name is required");
	var valid = false;
  }
  
  // Check email valid
  if(emailaddress == "") {
    alert("Email address is required");
	var valid = false;
  }
  // Regex check against provided email
  else if (!filter.test(emailaddress)) {
    alert("Please provide a valid email address");
	var valid = false;
  }
  else {}
  return valid;
}

// ------------------------------------------------------------------------  //
// function sethidden
// Sets the valid of the hidden field based on users click
// ------------------------------------------------------------------------  //
function sethidden(typ) {
  var el = document.getElementById("further-assistance");
  if(typ == "further") {
    el.value = "Further Assistance Required";
  }
  else {
    el.value = "No Further Assistance Required";
  }
}

// ------------------------------------------------------------------------  //
// Ajax request
// ------------------------------------------------------------------------  //
function getXMLHttp() {
  var xmlHttp;

  try {
    xmlHttp = new XMLHttpRequest();
  }
  catch(e) {
    try {
	  xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e) {
      try {
        xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      catch(e) {
        alert("Your browser does not support AJAX!")
        return false;
      }
    }
  }
  
  return xmlHttp;
}

// ------------------------------------------------------------------------  //
// MakeRequest
// Run request to send values from the form to mailphp
function MakeRequest() {
  var xmlHttp = getXMLHttp();
  xmlHttp.onreadystatechange = function() {
    if(xmlHttp.readyState == 4) {
      HandleResponse(xmlHttp.responseText);
    }
  }
  // grab form values
  var fullname = document.getElementById("fullname").value;
  var emailaddress = document.getElementById("emailaddress").value;
  var hidden = document.getElementById("further-assistance").value;
  
  // set url for send
  var url = "mail.php?fullname=" + fullname + "&emailaddress=" + emailaddress + "&hidden=" + hidden;
  
  // run request
  xmlHttp.open("GET", url, true);
  xmlHttp.send(null);
}

// ------------------------------------------------------------------------  //
// function HandleResponse
// Deal with the response from mail.php when received
// ------------------------------------------------------------------------  //
function HandleResponse(response) {
  document.getElementById("fill_screen").style.display = "block";
  document.getElementById("alert-wrap").style.display = "block";
  document.getElementById("alert").style.display = "block";
}
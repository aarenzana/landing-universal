jQuery( document ).ready(function() {

function addZero(i) {
  if (i < 10) {
      i = "0" + i;
  }
  return i;
}

// Get Server Time (hours)
var xmlHttp;
function srvTime(){
	try {
		//FF, Opera, Safari, Chrome
		xmlHttp = new XMLHttpRequest();
	}
	catch (err1) {
		//IE
		try {
			xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
		}
		catch (err2) {
			try {
				xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			catch (eerr3) {
				//AJAX not supported, use CPU time.
				alert("AJAX not supported");
			}
		}
	}
	xmlHttp.open('HEAD',window.location.href.toString(),false);
	xmlHttp.setRequestHeader("Content-Type", "text/html");
	xmlHttp.send('');
	return xmlHttp.getResponseHeader("Date");
}

var st = srvTime();
var date = new Date(st);
var dateHour = addZero(date.getHours());
var dateMin = addZero(date.getMinutes());
var workHrs = dateHour + ":" + dateMin;
var dateDay = date.getDay();

  function showPhone() {
    jQuery('#phone-hours').show();
    jQuery('#phone-hours-mob').show();
  }

  function offHours() {
    jQuery('#offhours-contact').show();
    jQuery('#offhours-contact-mob').show();
  }


// Delimit Operating hours and show phone number

    if (dateDay < 6 && dateDay != 0){
      if (workHrs >= '09:00' && workHrs <= '19:00') {
        showPhone();
      } else {
        offHours();
      }
    } else if (dateDay == 6) {
      if (workHrs >= '09:00' && workHrs <= '15:30') {
        showPhone();
      } else {
        offHours();
      }
    } else if (dateDay == 0) {
      if (workHrs >= '11:00' && workHrs <= '15:00') {
        showPhone();
      } else {
        offHours();
      }
    }


});

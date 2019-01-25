//Computation of Grade
function submitBday() {
	var Q4A = "";
	var Bdate = document.getElementById('birthdate').value;
	var Bday = +new Date(Bdate.toUTCString());
	Q4A += ~~ ((Date.now() - Bday) / (31557600000));
	var age = document.getElementById('age').value=Q4A; 
	if(age <= 17 || age >= 80){
		document.getElementById('age').value=Q4A;
		document.getElementById('age').style.color = "Red";
	}else{
		document.getElementById('age').style.color = "Black";
		document.getElementById('age').value=Q4A;
	}
}
//Input Numbers Only
function numbersOnly() {
	if (event.keyCode < 48 || event.keyCode > 58) {
	event.returnValue = false;
	return false;
	}
}

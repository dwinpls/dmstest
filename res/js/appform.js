//VALIDARE FIRST THEN SUBMIT

$("#submit").click(function () {
	var valid = true,
		fl = $("#SelectedFile").val().split('\\').pop(),
		fn = $("#firstname").val(),
		mn = $("#middlename").val(),
		ln = $("#lastname").val(),
		bm = $("#b_month").val(),
		bd = $("#b_date").val(),
		by = $("#b_year").val(),
		ad = $("#address").val(),
		as = $("#addressState").val(),
		cn = $("#contactno").val(),
		gn = $("#gender").val(),
		cs = $("#civilstatus").val(),
		rl = $("#religion").val(),
		ht = $("#height").val(),
		ca = $("#clientsAssigned").val(),
		ex = $("#examStatus").val(),
		ed = $("#educAttain").val(),
		co = $("#course").val(),
		we = $("#workexp").val(),
		sk = $("#skills").val(),
		dm = $("#da_month").val(),
		dd = $("#da_date").val(),
		dy = $("#da_year").val(),
		pl = $("#pleasing").val(),
		ast = $("#appStatus").val(),
		it = $("#interview").val();

	if (fl === "" || fl === " "){
		$("#fl").addClass("has-error");
		document.getElementById("fl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (fn === "" || fn === " "){
		$("#fn").addClass("has-error");
		document.getElementById("fn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ln === "" || ln === " "){
		$("#ln").addClass("has-error");
		document.getElementById("ln").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (bm === "" || bm === " " || bd === "" || bd === " " || by === ""|| by === " "){
		$("#bd").addClass("has-error");
		document.getElementById("bd").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ad === "" || ad === " "){
		$("#ad").addClass("has-error");
		document.getElementById("ad").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (as === "" || as === " "){
		$("#as").addClass("has-error");
		document.getElementById("as").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (cn === "" || cn === " "){
		$("#cn").addClass("has-error");
		document.getElementById("cn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (gn === "" || gn === " "){
		$("#gn").addClass("has-error");
		document.getElementById("gn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (cs === "" || cs === " "){
		$("#cs").addClass("has-error");
		document.getElementById("cs").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (rl === "" || rl === " "){
		$("#rl").addClass("has-error");
		document.getElementById("rl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ht === "" || ht === " "){
		$("#ht").addClass("has-error");
		document.getElementById("ht").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ht === "" || ht === " "){
		$("#cs").addClass("has-error");
		document.getElementById("cs").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ca === "" || ca === " "){
		$("#ca").addClass("has-error");
		document.getElementById("ca").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ex === "" || ex === " "){
		$("#ex").addClass("has-error");
		document.getElementById("ex").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ed === "" || ed === " "){
		$("#ed").addClass("has-error");
		document.getElementById("ed").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (co === "" || co === " "){
		$("#co").addClass("has-error");
		document.getElementById("co").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (we === "" || we === " "){
		$("#we").addClass("has-error");
		document.getElementById("we").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (sk === "" || sk === " "){
		$("#sk").addClass("has-error");
		document.getElementById("sk").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (dm === "" || dm === " " || dd === "" || dd === " " || dy === ""|| dy === " "){
		$("#da").addClass("has-error");
		document.getElementById("da").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (pl === "" || pl === " "){
		$("#pl").addClass("has-error");
		document.getElementById("pl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (ast === "" || ast === " "){
		$("#ast").addClass("has-error");
		document.getElementById("ast").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	if (it === "" || it === " "){
		$("#it").addClass("has-error");
		document.getElementById("it").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}
	//if everything else is complete, display confirmation modal
	if (valid === true){
		$("#1st").html("<strong>First Name: </strong>"+fn);
		$("#confirm").modal("show");
		valid = false;
		return valid;
	}
	else
	{
		valid = false;
		return valid;
	}
});


function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
};

// Integer (both positive and negative)
/*setInputFilter(document.getElementById("intTextBox"), function(value) {
  return /^-?\d*$/.test(value);
});*/
// Integer (positive only)
setInputFilter(document.getElementById("contactno"), function(value) {
  return /^\d*$/.test(value);
}); 
// Integer (positive and <= 255)
// Set height up to 255
setInputFilter(document.getElementById("height"), function(value) {
  return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 255);
}); /*
// Floating point (use . or , as decimal separator)
setInputFilter(document.getElementById("floatTextBox"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value);
});
// Currency (at most two decimal places)
setInputFilter(document.getElementById("currencyTextBox"), function(value) {
  return /^-?\d*[.,]?\d{0,2}$/.test(value);
});
// Hexadecimal
setInputFilter(document.getElementById("hexTextBox"), function(value) {
  return /^[0-9a-f]*$/i.test(value);
}); */

function appValid() //form validation
{
	var valid = true;

	var fl = document.getElementById("SelectedFile");
	if (fl.value == "")
	{
		document.getElementById("fl").className = "form-group has-error";
		document.getElementById("fl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var fn = document.getElementById("firstname");
	if (fn.value == "" || fn.value == " ")
	{
		document.getElementById("fn").className = "form-group has-error";
		document.getElementById("fn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var mn = document.getElementById("middlename");
	if (mn.value == "" || mn.value == " ")
	{
		document.getElementById("mn").className = "form-group has-error";
		document.getElementById("mn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ln = document.getElementById("lastname");
	if (ln.value == "" || ln.value == " ")
	{
		document.getElementById("ln").className = "form-group has-error";
		document.getElementById("ln").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var bm = document.getElementById("b_month");
	var bd = document.getElementById("b_date");
	var by = document.getElementById("b_year");
	if (bm.value == "" || bd.value == "" || by.value == "" || bm.value == " " || bd.value == " " || by.value == " ")
	{
		document.getElementById("bd").className = "form-group has-error";
		document.getElementById("bd").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ad = document.getElementById("address");
	if (ad.value == "" || ad.value == " ")
	{
		document.getElementById("ad").className = "form-group has-error";
		document.getElementById("ad").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var as = document.getElementById("addressState");
	if (as.value == "" || as.value == " ")
	{
		document.getElementById("as").className = "form-group has-error";
		document.getElementById("as").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var cn = document.getElementById("contactno");
	if (cn.value == "" || cn.value == " " || cn.length > 5 )
	{
		document.getElementById("cn").className = "form-group has-error";
		document.getElementById("cn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var gn = document.getElementById("gender");
	if (gn.value == "" || gn.value == " ")
	{
		document.getElementById("gn").className = "form-group has-error";
		document.getElementById("gn").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var cs = document.getElementById("civilstatus");
	if (cs.value == "" || cs.value == " ")
	{
		document.getElementById("cs").className = "form-group has-error";
		document.getElementById("cs").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var rl = document.getElementById("religion");
	if (rl.value == "" || rl.value == " ")
	{
		document.getElementById("rl").className = "form-group has-error";
		document.getElementById("rl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ht = document.getElementById("height");
	if (ht.value == "" || ht.value == " ")
	{
		document.getElementById("ht").className = "form-group has-error";
		document.getElementById("ht").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ca = document.getElementById("clientsAssigned");
	if (ca.value == "" || ca.value == " ")
	{
		document.getElementById("ca").className = "form-group has-error";
		document.getElementById("ca").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ex = document.getElementById("examStatus");
	if (ex.value == "" || ex.value == " ")
	{
		document.getElementById("ex").className = "form-group has-error";
		document.getElementById("ex").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ed = document.getElementById("educAttain");
	if (ed.value == "" || ed.value == " ")
	{
		document.getElementById("ed").className = "form-group has-error";
		document.getElementById("ed").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var co = document.getElementById("course");
	if (co.value == "" || co.value == " ")
	{
		document.getElementById("co").className = "form-group has-error";
		document.getElementById("co").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}


	var we = document.getElementById("workexp");
	if (we.value == "" || we.value == " ")
	{
		document.getElementById("we").className = "form-group has-error";
		document.getElementById("we").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var sk = document.getElementById("skills");
	if (sk.value == "" || sk.value == " ")
	{
		document.getElementById("sk").className = "form-group has-error";
		document.getElementById("sk").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var dm = document.getElementById("da_month");
	var dd = document.getElementById("da_date");
	var dy = document.getElementById("da_year");
	if (dm.value == "" || dd.value == "" || dy.value == "" || dm.value == " " || dd.value == " " || dy.value == " ")
	{
		document.getElementById("da").className = "form-group has-error";
		document.getElementById("da").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}


	var pl = document.getElementById("pleasing");
	if (pl.value == "" || pl.value == " ")
	{
		document.getElementById("pl").className = "form-group has-error";
		document.getElementById("pl").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var ast = document.getElementById("appStatus");
	if (ast.value == "" || ast.value == " ")
	{
		document.getElementById("ast").className = "form-group has-error";
		document.getElementById("ast").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	var it = document.getElementById("interview");
	if (it.value == "" || it.value == " ")
	{
		document.getElementById("it").className = "form-group has-error";
		document.getElementById("it").scrollIntoView({ block: 'center',  behavior: 'smooth' });
		valid = false;
	}

	if (valid === true)
	{
		/*document.getElementById("modal-19").className = "md-modal md-effect-1 md-show";*/
		document.getElementById("submit").setAttribute("data-toggle", "#confirm");
		document.getElementById("submit").setAttribute("data-toggle", "#confirm");
		valid = false
		return valid;
	}
	else
	{
		return valid;
	}
	
}

function closeMod()
{
	return document.getElementById("confirm").className = "md-modal md-effect-1";
}

function conMod()
{
	return window.alert("confirm");
	return true;
}

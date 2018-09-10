function appValid()
{

	firstname
	middlename
	lastname

	b_month
	b_date
	b_year

	address
	addressState

	contactno

	gender

	civilstatus
	religion

	height

	clientsAssigned

	examStatus 

	educAttain //if high school selected, disable course

	course

	workexp

	skills

	da_month
	da_date
	da_year


	pleasing

	appStatus

	interview

	
}
function isHighSchool()
{
	if 
}

function isNumber(evt) 
{
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) 
    {
        return false;
    }
    return true;
}
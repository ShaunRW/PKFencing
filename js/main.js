// This will return the current year.
function GetCurrentYear()
{
	var today = new Date();
	var year = today.getFullYear();
	return year;
}

// This will perform and setups/inits that need to be performed of the page.
function InitializePage()
{
	// Initialize foundation framework.
	$(document).foundation();

	// Update the year in the copy write line.
	$("#copywrite-year").html( GetCurrentYear() );
}


// invoke the page initialization.
InitializePage();
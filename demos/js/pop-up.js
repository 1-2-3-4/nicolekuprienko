function CheckPopupForm() {
    var goodData = true;
    var currentDate = (new Date).getFullYear();
    //Regex standard for email validation:
    var validEmail = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    //check if year field is present (in case form only has email field), then validate
    if ($('#cboAgeYear').length > 0) {
    	if ($('#cboAgeYear').val() < 1901 || $('#cboAgeYear').val() > currentDate ) {
        	$('#cboAgeYear').addClass('error');
            $('#yearLabel').addClass('error-label');
            $('#yearLabel').text('*Birth Year - Required');
            goodData = false;
    	}
    }
    //check if month field is present (in case form only has email field), than validate (make sure placeholder isn't selected)
    if ($('#cboAgeMonth').length > 0) {
    	if ($('#cboAgeMonth').val() == "0") {
            $('#cboAgeMonth').addClass('error');
            $('#monthLabel').addClass('error-label');
            $('#monthLabel').text('*Birth Month - Required');
            goodData = false;
        }
    }
    //validate email (email is always required)
         if ($('#txtEmail').val() == '' || !validEmail.test($('#txtEmail').val()) ) {
            $('#txtEmail').addClass('error');
            $('#emailLabel').addClass('error-label');
            $('.email-only').removeClass('hidden');
            $('#emailLabel').text('*Please provide a valid email');
            goodData = false;
         } 
    //if all fields have been correctly validated, submit form, else prevent form from submitting
        if (goodData == true) {
            //animate submit button
            animateSubmitBtn();
            return true;
        }
        else {
            //remove error styling with this function
            RemoveErrorMsg();
            //mobile ios bug requires prevent default, return false still submits the form
            event.preventDefault();
            //prevent form submission on all other platforms
            return false;
            }
        }

function RemoveErrorMsg() {
    //if someone clicks or focuses on Year, remove error
    $('#cboAgeYear').click(function() {
        RemoveYearError();
    });
    $('#cboAgeYear').focus(function() {
        RemoveYearError();
    });
    //if someone clicks or focuses on Month, remove error
    $('#cboAgeMonth').click(function() {
        RemoveMonthError();
    });
    $('#cboAgeMonth').focus(function() {
        RemoveMonthError();
    });
    //if someone clicks or focuses on Email, remove error
    $('#txtEmail').click(function() {
        RemoveEmailError();
    });
    $('#txtEmail').focus(function() {
        RemoveEmailError();
    });
}

function RemoveYearError() {
    $('#cboAgeYear').removeClass('error');
    $('#yearLabel').removeClass('error-label');
    $('#yearLabel').text('*Birth Year');
}

function RemoveMonthError() {
    $('#cboAgeMonth').removeClass('error');
    $('#monthLabel').removeClass('error-label');
    $('#monthLabel').text('*Birth Month');
}

function RemoveEmailError() {
    $('#txtEmail').removeClass('error');
    $('#emailLabel').removeClass('error-label');
    $('.email-only').addClass('hidden');
    $('#emailLabel').text('*Email');
}
//animate submit button on form
function animateSubmitBtn() {
    $('.submit-text').text('Sending');
    $('.spinner').removeClass('display-none');
    $('#popup-submit').addClass('disabled');
}
$(document).ready(function() {
	var sampleForm=$('#sampleForm');
	var emailField = $('#email');

	$(sampleForm).submit(function(evt){
		var emailValue = $(emailField).val();
	if(!isValidEmail(emailValue)){
		evt.preventDefault();   /*canceling sumbmition of the form*/
	addErrrorMessage('email');
	}
		console.log("log");
		console.debug("debug");
		console.info("info");
		});
		$(emailField).change(function(evt){
			var emailValue = $(emailField).val();
			if(isValidEmail(emailValue)){
				clearErrorMessages('email');
			}else{
				addErrrorMessage('email')
			}
		});
	});
	
	function addErrrorMessage(elementId) {
		$('#' +elementId).addClass('error');
	}
	
	function clearErrorMessages(elementId) {
		$('#' + elementId).removeClass('error');
	}
function isValidEmail(passedString){
	var regEx = /(.+)@([^\.].*)\.([a-z]{2,})/;
	return regEx.test(passedString);
}
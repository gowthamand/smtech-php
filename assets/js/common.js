function doValidate(){
        var flag = true;
        $('#success_div').hide();
        $('#error_div').hide();
        $('#usr_name').css('border','0px solid red');
        $('#usr_email').css('border','0px solid red');
        $('#usr_phone').css('border','0px solid red');
        $('#usr_subject').css('border','0px solid red');
        $('#usr_message').css('border','0px solid red');
        $('#usr_budget').css('border','0px solid red');
        $('#usr_duration').css('border','0px solid red');
        $('#usr_packages').css('border','0px solid red');

        var name = $('#usr_name').val();
        var email = $('#usr_email').val();
        var phone = $('#usr_phone').val();
        var subject = $('#usr_subject').val();
        var message = $('#usr_message').val();
        var budget = $('#usr_budget').val();
        var duration = $('#usr_duration').val();
        var packages = $('#usr_packages').val();
        var flag = true;
        if(name == '' || name == 'undefined'){
            flag = false;
            $('#usr_name').css('border','1px solid #a94442');
        }
        if(email == '' || email == 'undefined'){
            flag = false;
            $('#usr_email').css('border','1px solid #a94442');
        }
        if(phone == '' || phone == 'undefined'){
            flag = false;
            $('#usr_phone').css('border','1px solid #a94442');
        }
        if(subject == '' || subject == 'undefined'){
            flag = false;
            $('#usr_subject').css('border','1px solid #a94442');
        }
        if(message == '' || message == 'undefined'){
            flag = false;
            $('#usr_message').css('border','1px solid #a94442');
        }
        if(budget == '' || budget == 'undefined'){
            flag = false;
            $('#usr_budget').css('border','1px solid #a94442');
        }
        if(duration == '' || duration == 'undefined'){
            flag = false;
            $('#usr_duration').css('border','1px solid #a94442');
        }
        if(packages == '' || packages == 'undefined'){
            flag = false;
            $('#usr_packages').css('border','1px solid #a94442');
        }
        if(email != ''){
            var check = validateEmail(email);
            if(!check){
                flag = false;
                $('#usr_email').css('border','1px solid #a94442');
            }
        }

        if(flag == false){
            $('#error_div').show();
            $('#error_div_text').html('Please enter valid data for the fields marked red.');
            $(window).scrollTop(0);
            return false;
        }

        if(flag == true){
            event.preventDefault();
              var data = new window.FormData($('#contact_form')[0]);
            $.ajax({
                      xhr: function () {  
                      return $.ajaxSettings.xhr();
                  },
                  type: "POST",
                  data: data,
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: 'json',
                  url: 'contact_submit.php',
                  beforeSend: function ()
                  {
                      $('#send_message').attr('disabled', true);
                      $('#login_progress').show();
                  },
                  success: function (data) {
                      if(data.err == '1'){
                          $('#error_div_text').html(data.result);
                          $('#error_div').show();
                      }
                      if(data.err == '0'){
                          $('#success_div_text').html(data.result);
                          $('#success_div').show();
                          $('#contact_form')[0].reset();
                          $(window).scrollTop(0);
                      }
                      $('#login_progress').hide();
                      $('#send_message').attr('disabled', false);
                  },
                  error: function () {
                      $('#error_div_text').html('Some problem occured and your message was not submitted.Please try agian.');
                      $('#error_div').show();
                      $('#login_progress').hide();
                      $('#send_message').attr('disabled', false);
                  },
              });
        }
          
      }
      
var digitsOnly = /[1234567890]/g;
var integerOnly = /[0-9\.]/g;
var alphaOnly = /[A-Za-z]/g;

function restrictCharacters(myfield, e, restrictionType) {
	if (!e) var e = window.event
	if (e.keyCode) code = e.keyCode;
	else if (e.which) code = e.which;
	var character = String.fromCharCode(code);

	// if they pressed esc... remove focus from field...
	if (code==27) { this.blur(); return false; }
	
	// ignore if they are press other keys
	// strange because code: 39 is the down key AND ' key...
	// and DEL also equals .
	if (!e.ctrlKey && code!=9 && code!=8 && code!==36 && code!==37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
		if (character.match(restrictionType)) {
			return true;
		} else {
			return false;
		}
		
	}
}

function validateEmail(sEmail)
{
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    } else {
        return false;
    }
}
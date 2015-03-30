var server = window.location.hostname;
if(server == 'localhost')
  var apiUrl = location.protocol + "//"+server+"/cmsapp/public/";
else
  var apiUrl = location.protocol + "//"+server+"/cmsapp/public/";

function login()
{
	var email = $('#email').val();
	var password = $('#password').val();

	if(email == '')
    {
        $('#email').focus();
        check = false;
    }

    if(password == '')
    {
        $('#password').focus();
        check = false;
    }

     $.ajax({
          type: 'POST',
          url: apiUrl + 'login',
          dataType : "JSON",
          data: { username: email, password: password },
          beforeSend:function(){

          },
          success:function(data){
            console.log('logged in');
          },
          error:function(jqxhr){
            console.log('error');
          }
        });
    
}
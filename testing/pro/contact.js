$(document).ready(function() {

  $('#submit').click(function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();
    if(name== '' || message=='' || email == ''){
      $('#error_message').html("All Fields are required");
    }
    else{
      $('#error_message').html('');
      $.ajax({
        url = "contact.php",
        method = 'POST',
        data:{name:name ,email:email,message:message},
        success:function(data){
          $("form").trigger("reset");
          $('#success_message').fadeIn().html(data);
          setTimeOut(function(){
            $('#success_message').fadeOut('slow');
          },2000);
        }
      });
    }
  });
});


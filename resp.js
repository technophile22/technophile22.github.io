$('document').ready(function(){

  $("#reg_btn").click(function(){
      var reg_id = $("#reg_id").val();
      if(reg_id != ""){
        alert('OK')
        $.ajax({
          url:'check.php',
          type : 'POST';,
          data :{reg_id:reg_id},
          success:function(response){
            var msg= "" ;
            if(response=='1'){
              window.location = "index.html";
            }else{
              msg="Invalid ID";
            }
            $("#message").html(msg);
          }
        });
      }


  });


      });






});

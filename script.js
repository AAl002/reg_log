/*$("document").ready(function(){
    $('button.btn').on('click',function(e){
      var loginVal=$('input.login').val();
      var passVal=$('input.pass').val();
      var conpassVal=$('input.conpass').val();
      var emailVal=$('input.email').val();
      var nameVal=$('input.name').val();
      $.ajax({
        url:'index.php',
        method:'post',
        data: {login:loginVal,password:passVal,confirm_password:conpassVal,email:emailVal,name:nameVal,},
        success:function(data){
          console.log(data);
        }
      }); 
    })
  })*/
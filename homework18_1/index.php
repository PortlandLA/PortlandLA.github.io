<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <title>MYSITE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
   
    <!--[if lt IE 9] -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   
  </head>
  <body>
    <section>
    	<div class="container-fluid ">
    	<div class="main">
    	<div class="row">    	
 <div class="col-md-2 col-md-offset-9 col-sm-offset-0">
 <div class="header-top">   			
<h3>УЖЕ ЕСТЬ АККАУНТ?</h3>
    	  <div class="home">
	<a href="#close" class="close">&times;</a>
    							
    		<form id="form-input" action="thanks.html">
    		<input class="user name" name="name" type="text" placeholder="Имя или никнейм">   							
    		<input class="user pass" name="pass" type="password" placeholder="Пароль">
    		<button class="btn" type="submit">Войти</button>
    </form>    	
</div>
<div class="home-open">
<a href="#" class="open">Войти</a>
</div>

   </div>
    </div>
    	</div>
    		<div class="row">
    			<div class="col-md-4 col-md-offset-5 col-sm-12 col-sm-offset-0">
    				<div class="header">
    				<div class="row">
    					<div class="col-md-8 col-sm-12">
    					<div class="picture-form">
    					<div class="row">
    					<div class="col-md-12">
    					<img src="img/logo.png" alt="logo" class="logo">	
    					</div>
    					<div class="col-md-12">
    					<div class="logo-text">
    						<h1>MYSITE</h1>
    					</div>
    					</div>
    					<div class="col-md-12">
    						<div class="form" id="form">
    							
    							<form id="form-input" action="#" >
    								<input type="hidden" name="whatever"
                                    value="Главная форма">
    									<input class="user user-name" name="name" type="text" placeholder="Имя">				
    								<input class="user user-email" name="email" type="email" placeholder="Email">
    								<input class="user user-pass" name="pass" type="password" placeholder="Пароль">
    								<button class="user-btn" type="submit">регистрация <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
    							</form>
    						</div>
    					</div> 
    					</div>   								
    				</div>
    				</div>    					
    			</div>    							
    			</div>

    			</div>
    			</div>
    			
    			<div class="header-buttom">   				
    				<p class="cont">Блог | Связаться с нами	</p>    			
    				<p class="year">© 2012 - MYSITE	</p>
    				
    					</div>
    			   
    			</div>
    		</div>
    </section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal-thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Спасбо за заявку!</h4>
      </div>
      <div class="modal-body">
       <p>Теперь мы знаем кто ты!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  <script>
	$(document).ready(function(){
	
	$('.home-open').click(function (){
     $('.home-open').toggleClass('home-open open-new');
     $('.home').toggleClass('home home-new')     
	});
	$('.close').click(function(){
	$('.open-new').toggleClass('open-new home-open');
	$('.home-new').toggleClass('home-new home')	
	});	
		var btn = $('.user-btn');
	    btn.click(function(event){		
		var userName = $('.user-name').val();
		var userPhone = $('.user-email').val();
		var userEmail = $('.user-pass').val();
		var form = $('#form');
		if ( (userName !== '' &  userPhone !== '' & userEmail !== '')  ) {
			form.submit();
		} else {
			alert('Введите имя,email и пароль');
            event.preventDefault();
		}
	});
  $("#form-input").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        })
        .done(function() {
            $(this).find("input").val("");
            $('#modal-thanks').modal('toggle');
            $("#form-input").trigger("reset");
        });
        return false;
    });
    
	});		
	</script>    
  </body>
</html>
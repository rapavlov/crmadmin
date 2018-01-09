 <footer class="main-footer" id="contact">
    	<div class="auto-container">
         <div class="row">
             <br> <br>
        
            <div class="col-md-6 col-sm-6 col-xs-12">
            	<h3 class="pull-left">МЫ <span>В СОЦСЕТЯХ</span></h3>
                <div class="social-links pull-left">
                	<a href="http://www.facebook.com/ironsystemsbarnaul/" class="icon fa fa-facebook-f wow fadeInRight" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0"></a>
                    <a href="https://twitter.com/iron_systems" class="icon fa fa-twitter wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s" data-wow-offset="0"></a>
                    
                    <a href="https://plus.google.com/109168981682194861941" class="icon fa fa-google wow fadeInRight" data-wow-delay="0.6s" data-wow-duration="1s" data-wow-offset="0"></a>
                    
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center" id="price">
                <h3><a class="blue_button" href="../upload/price20170404.pdf"  style=" margin:40px;" download>
				СКАЧАТЬ ПРАЙС</a></h3>
                <br> <br>
            </div>
             <br> <br>
        </div> 
           
        	<div class="lower">
            	<div class="row ">
                    
                  
                    <div class="col-md-0 col-sm-0 col-xs-12">
                    	<div class="footer-widget copyright wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">  
                          
                        </div>
                    </div>                    
                
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    	<div class="footer-widget contact wow fadeInUp" data-wow-delay="2s" data-wow-duration="1s" data-wow-offset="0">
                            <br> 
                        	<h2>СВЯЖИТЕСЬ С НАМИ</h2>
                            <br> <br>
                            <ul>
                            	<li class="clearfix">
                                	<strong class="pull-left">E-Mail</strong>
                                    <p class="pull-right">market@iron-systems.ru</p>
                                </li>
                                <li class="clearfix">
                                	<strong class="pull-left">Тел:</strong>
                                    <p class="pull-right">8 800 200-91-30</p>
                                </li>
                                <li class="clearfix">
                                	<strong class="pull-left">Адрес:</strong>
                                    <p class="pull-right">603004,  г.Нижний Новгород,<br> проспект Ленина, 109, ТЦ «Чайка»</p>                                      
                                </li>
								<li class="clearfix">                                	
                                    <p align="left" >Ваш персональный менеджер Юрий Козуб</p>                                      
                                </li>
                            </ul>
                            <br> <br>
                        </div>
                    </div>
                    
                    <div class="col-md-6 animate-box" >					
                        <form  name="myform" id="myform" role = "form" method="post"  action="javascript:void(0);" >
					       <div class="row form-group">
							<div class="col-md-12">								
								<input type="text" name="name" id="name" class="form-control" placeholder="Имя" required="required">
							</div>							
						</div>

						<div class="row form-group">
							<div class="col-md-12">								
								<input type="text" name="email" id="email" class="form-control" placeholder="Ваш email" required="required">
							</div>
						</div>						

						<div class="row form-group">
							<div class="col-md-12">								
								<textarea  id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Текст сообщения" required="required"></textarea>
							</div>
						</div>
						<div class="form-group">
							
                            <input id="submit"  value="Отправить сообщение" class="btn btn-primary">
						</div>
                        <div id="msgSubmit" class="h3 text-center hidden">Сообщение отправлено!</div>
                            <p id="messagepar"></p>
					</form>		
				</div>
                    <div class= "loader"></div>   
                    
    	            
                  
                </div>
                <div class="auto-container">
        	           <div class="row ">
                            <article class="col-md-6 col-sm-6 col-xs-12 product">
                               <h2><img src="../images/logo5.png" alt="" title=""></h2>
                           </article>
            	           <article class="col-md-6 col-sm-6 col-xs-12 product">
                               <p>&copy; <a href="../backend.html" style="color: white;">2007 CERTUS MARKET</a> </p>
                           </article>
                           <br> <br>
                       </div>
                </div>
            </div>       
            
        </div>       
        <a href="#" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>
    
</div>

<script src="../js/jquery.js"></script> 
<script src="../js/bootstrap.min.js"></script>
<script src="../js/revolution.min.js"></script>
<script src="../js/bxslider.js"></script>
<script src="../js/jquery.appear.js"></script>
<script src="../js/wow.js"></script>
<script src="../js/knob.js"></script>
<script src="../js/validate.js"></script>
<script src="../js/script.js"></script>
<script src="jquery-1.8.2.min.js"></script>    
 

<script type="text/javascript"> 
$(document).ready(function() { 
  $('#submit').click(function(){                   
 var input_email = $("#email").val(); 
 var input_name = $("#name").val();
 var input_text = $("#message").val();     
 var msg   = $('#myform').serialize();     
 $(".loader").show(); 
 $.ajax({
  type: "POST",
  url: "../send_message.php",  
  data: msg, 
  dataType: "html",
  cache: false,
  success: function(data) {   
    $(".loader").hide(); 
    $("#messagepar").html(data);  
}
}); 
    }); 
 
     });
</script>    
</body>
</html>

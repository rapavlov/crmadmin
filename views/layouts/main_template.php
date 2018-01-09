<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php //$this->head() ?>
	
	<title>Топливораздаточное оборудование | Топливораздаточные колонки</title>

<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/revolution-slider.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">   
<style>
 
    </style>   
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44748907 = new Ya.Metrika({
                    id:44748907,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44748907" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php /*
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();*/
    ?>
<div class="page-wrapper">    
    <div class="preloader"></div>
    <header class="main-header">
	
	<?php
	//print_r($_SERVER);
	//if ((($_SERVER[REQUEST_URI]) == "/") or (($_SERVER[REQUEST_URI]) == "/main/")) {
		//print_r($_SERVER[SCRIPT_NAME]);
		//print_r($_SERVER[REQUEST_URI]);
	?>
		<div style="height:30px">
		</div>
	<?php //}?>
	
        <div class="auto-container clearfix">
            
          
            <div class="logo"><a href="/"><img src="/images/logo5.png" alt="Logo" title="StayFit"></a></div>
            
         
            <nav class="main-menu">
                <div class="navbar-header">
                        
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">                                                                                              
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li class=" dropdown"><a href="<?php echo Url::to(['site/index', '#' => 'product']);?>">Продукция</a>                            
                        </li>
                        <li class="dropdown"><a href="<?php echo Url::to(['site/index', '#' => 'best']);?>">Преимущества</a></li>
                        <li class="dropdown"><a href="<?php echo Url::to(['site/index', '#' => 'foto']);?>">Фото</a>                            
                        </li>
                        <li class="dropdown"><a href="<?php echo Url::to(['site/index', '#' => 'price']);?>">Прайс</a>                            
                        </li>
                        <li><a href="<?php echo Url::to(['site/index', '#' => 'contact']);?>">Контакты</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </nav>
       
            
        </div>
        
       <div class="open-hours"  style="margin-top:30px">
            <div class="toggle-open-hours">
				<span class="fa fa-envelope-o"></span><a href="mailto:market@iron-systems.ru" style="color:#fff">market@iron-systems.ru </a><br>
				<span class="fa fa fa-phone-square"></span><a href="callto:88002009130" style="color:#fff">8 800 200-91-30</a>
			</div>
        </div>
	</header>
	
	
	
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<!--/div-->



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
                               <p>&copy; <a href="/backend/" style="color: white;">CERTUS MARKET <?= date('Y') ?></a> </p>
							   
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

<script src="/js/jquery.js"></script> 
<script src="/js/bootstrap.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/bxslider.js"></script>
<script src="/js/jquery.appear.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/knob.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/script.js"></script>
<script src="/js/jquery-1.8.2.min.js"></script>    
 

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
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

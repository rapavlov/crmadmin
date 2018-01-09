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
<section id="main-slider" class="main-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/lukbel-sergmax.png"  data-saveperformance="off"  data-title="Качество"> 
                    <img src="/images/main-slider/lukbel-sergmax.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="570"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer light-blue"><h3>СОВРЕМЕННЫЙ ДИЗАЙН</h3></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="520"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer dark-blue"><h2>СПЕЦИАЛЬНО ДЛЯ РОССИЙСКИХ УСЛОВИЙ</h2></div></div>
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="left" data-hoffset="470"
                    data-y="center" data-voffset="60"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="curved-layer light-blue"><h3>НОВЫЕ ТЕХНОЛОГИИ В КАЖДОМ УЗЛЕ</h3>
                        </div>
                    </div>                   
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/lukneight.png"  data-saveperformance="off"  data-title="Качество превыше всего!">
                    <img src="/images/main-slider/lukneight.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="2000"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer light-blue"><h3>ВЫСОКАЯ НАДЕЖНОСТЬ</h3></div></div>
                    
                    <div class="tp-caption stb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="2500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
						 <div class="curved-layer dark-blue">
						
						 <h2>ТОПЛИВОРАЗДАТОЧНОЕ ОБОРУДОВАНИЕ <font size="6.0" color="#ff6600" face="Roboto Slab"><b>ЦЕРТУС</b></font></h2>
						 </div>
					</div>
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="60"
                    data-speed="2000"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer light-blue"><h3>ПРИВЛЕКАТЕЛЬНАЯ ЦЕНА</h3></div>
                    </div>
                    
                    
                    </li>
                    
                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="/images/main-slider/hero3.png"  data-saveperformance="off"  data-title="Качество превыше всего!"> 
                    <img src="/images/main-slider/hero3.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfb stb tp-resizeme"
                    data-x="left" data-hoffset="242"
                    data-y="center" data-voffset="-50"
                    data-speed="2000"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer light-pink"><h2>ДЛЯ КОММЕРЧЕСКИХ АЗС</h2></div></div>
                    
                    <div class="tp-caption lfb stb tp-resizeme"
                    data-x="left" data-hoffset="144"
                    data-y="center" data-voffset="30"
                    data-speed="2500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer dark-blue"><h3>ГАРАНТИЯ 18 МЕСЯЦЕВ</h3></div>
                    </div>
                     
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="right" data-hoffset="-120" 
                    data-y="center" data-voffset="-20"
                    data-speed="2000"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer light-blue"><h2>ДЛЯ ВЕДОМСТВЕННЫХ АЗС</h2></div>
                    </div>
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="right" data-hoffset="-194"
                    data-y="center" data-voffset="60"
                    data-speed="2500"
                    data-start="2000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;"><div class="curved-layer dark-blue"><h3>БЕЗОПЕРАТОРНАЯ АЗС С УПРАВЛЕНИЕМ ИЗ ОФИСА</h3></div></div>
                    
                    </li>
                      
                </ul>
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
   
    <section class="features-services">
    	<div class="auto-container">
        	<div class="row clearfix">            	
             
            	<article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="post style-one wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <div class="title-box">
                            <h2 class="clearfix"><span class="big-text pull-left">18</span><span class="pull-left"><span class="med-text">МЕСЯЦЕВ </span><br><span class="small-text">ГАРАНТИИ</span></span></h2>
                        </div>
                        <div class="post-text">
                            Мы дорожим своей репутацией производителя надежного оборудования и уверены на 100% в качестве производимой продукции.
                           
                        </div>
                    </div>
                </article>
                
                <!-- Style Two -->
                <article class="col-md-4 col-sm-6 col-xs-12">
                	<div class="post style-two wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <img src="../images/resource/oktan1.png" alt="">
                        <div class="title-box">
                            <h2 class="clearfix">
                            	<span class="pull-left"><span class="med-text">модель </span><br><span class="small-text">"Евролайн"</span></span>
                                <span class="pull-right price">
                                	<sub>от</sub>235 900<sup>руб</sup>
                                </span>
                            </h2>
                        </div>
                    </div>
                </article>                
              
                <article class="col-md-4 col-sm-12 col-xs-12">
                	<div class="post style-three wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <img src="../images/resource/manager.png" alt="">
                        <div class="post-cont">
                            <div class="post-text">
                                <div><span class="med-text" style="font-size:18px;">ПЕРСОНАЛЬНЫЙ</span><br><span class="small-text">МЕНЕДЖЕР</span></div> Сотрудничество с нами не только продуктивно, но и приятно.                             
                                <a class="more" href="#contact"><span class="fa fa-angle-right"></span> Ваш личный менеджер</a>
                            </div>
                        </div>
                    </div>
                </article>
            
            
            </div>
        </div>
    </section>
     <br><br>
     <section>
        <div class="auto-container">
            <div class="row">                
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>Новинки &amp; Акции</h2>
					<p>Следите за новинками нашего производства, будьте в курсе последних разработок и маркетинговых акций.</p>
				</div>
			</div>
            <div class="row">
           
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="workout-sessions">
                       <a href="<?php echo Url::to(['news/snovgodom2018']);?>" class="blog-img-holder" style="background-image: url(/images/news/snovgodom2018anons.png);">
					   <img src="/images/news/snovgodom2018anons.png" width="80%"></a>
						<div class="blog-text">
							<h3><a href="<?php echo Url::to(['news/snovgodom2018']);?>">Поздравляем с наступающим, новым 2018 годом</a></h3>
							<span class="posted_on">18 Декабря</span>
							<span class="comment"></span>
							<p>Мы трудились целый год,<br>
								Было дел невпроворот:<br>
								Договор, счета, платежки,</p>
                            <p><a href="<?php echo Url::to(['news/snovgodom2018']);?>">Подробнее</a></p>
						</div>  
                    </div>
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="workout-sessions">
                      <a href="<?php echo Url::to(['news/onlinekassy']);?>" class="blog-img-holder" style="background-image: url(/images/onlinekassy.jpg);"><img src="/images/onlinekassy.png" width="80%"></a>
						<div class="blog-text">
							<h3><a href="<?php echo Url::to(['news/onlinekassy']);?>">Новое программное обеспечение поддерживающее работу с онлайн-кассами на АЗС.</a></h3>
							<span class="posted_on">21 Марта</span>
							<span class="comment"></span>
							<p>Обновленная версия программного комплекса «IS.АЗС» и «IS.Офис» может быть интегрирована с онлайн-кассами различных производителей.</p>
                            <p><a href="<?php echo Url::to(['news/onlinekassy']);?>">Подробнее</a></p>
						</div>   
                    </div>
                </div>  
            </div>
        </div>
    </section>   
    
    <section class="three-column">
        <div class="auto-container">
            <div class="row clearfix">
              
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="workout-sessions">
                            
                            <ul>
                                <li class="button11">Светодиодный дисплей - отличная видимость даже при ярком солнечном свете
                                </li> 
                                
                                <li class="button11">Гидравлика высокой точности исполнения от мирового лидера - компании Bennett(США)
                                </li>                                 
                                <li class="button11">Панели корпуса съемные, простая замена в случае их повреждения
                                </li> 
                                <li class="button11">Полимерная окраска в цвета заказчика уже включена в базовую стоимость
                                </li>
                                <li class="button11">Морозостойкие, масло-бензостойкие раздаточные рукава
                                </li>
                                <li class="button11">Современный, яркий дизайн
                                </li>                                                              
                            </ul>                        
                        <div>                   
                        </div>                       
                    </div>    
                </div>
                
                <div class="col-md-4 col-sm-4 col-xs-12 animate-box">
					<div class="workout-sessions">
						
                                                                                        
                        <img src="/images/resource/extralinerazrez.png" alt="" style=" margin:50px; width:90%;">
				        <ul>     
                          
                            
                        </ul>
					</div>
				</div>                    
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="workout-sessions">
                            
                            <ul>
                                <li class="button11">Электроника надежна защищена от атмосферных воздействий
                                </li> 
                                <li class="button11">Настройки колонок сохраняются в энергонезависимой Flash-памяти
                                </li>
                                <li class="button11">Расширенный температурный диапазон работы от -47ºС до  +50ºС
                                </li> 
                                <li class="button11">Стекло дисплея окрашено керамической краской. Не выгорает и не тускнеет на солнце
                                </li>
                                <li class="button11">Усиленный корпус на основе рамной конструкции
                                </li>
                                <li class="button11">Простой монтаж и подключение
                                </li> 
                                 
                            </ul>                        
                        <div>                   
                        </div>                       
                    </div>    
                </div>
            </div>
        </div>    
    </section>   
     <br><br>
    <!--Curved Section-->
    <section class="successfull-stories curved-carousel" id="product" >
    	<div class="slider">
        	
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;Евролайн&raquo;</h3>
                             <h2>Сочетание надежности, доступной цены и привлекательного дизайна!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Базовая модель топливораздаточной колонки с современным L-образным дизайном. Предназначена для работы на коммерческих и ведомственных АЗС. Имеет модификации предназначенные для выдачи от одного до пяти видов топлива. В линейке моделей присутствуют колонки производительностью от 50 л/мин до 500 л/мин. Комплектуется раздаточными рукавами в количестве от одного до десяти штук. </p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/evrolineris.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
								<li>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>								
                            	<li>Модель: Евролайн</li>
                                <li>Производительность: от 50 до 500л/мин</li>
                                <li>Видов топлива: от 1 до 5</li>
                                <li>Кол-во кранов: от 1 до 10</li>
                                <li>Рабочая температура: от -47°С до +50°С</li>
                                <li>Гидравлика: Bennet</li>                                
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;Экстралайн&raquo;</h3>
                            <h2>Сплав ярких дизайнерских решений и надежности оборудования!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Дизайнерская модель топливораздаточной колонки. Предназначена для работы на коммерческих АЗС. Имеет модификации предназначенные для выдачи от одного до пяти видов топлива. В линейке моделей присутствуют колонки производительностью от 50 л/мин до 250 л/мин. Комплектуется раздаточными рукавами в количестве от одного до десяти штук. </p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/extralineris.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
								<li>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>								
                            	<li>Модель: Экстралайн</li>
                                <li>Производительность: от 50 до 250л/мин</li>
                                <li>Видов топлива: от 1 до 5</li>
                                <li>Кол-во кранов: от 1 до 10</li>
                                <li>Рабочая температура: от -47°С до +50°С</li>
                                <li>Гидравлика: Bennet</li>                                
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;Портальная&raquo;</h3>
                            <h2>Простота и практичность!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Базовая модель топливораздаточной колонки портальной конструкции. Предназначена для работы на коммерческих и ведомственных АЗС. Разработаны модификации предназначенные для выдачи от одного до четырех видов топлива. Комплектуется раздаточными рукавами в количестве от одного до восьми штук.</p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/portalnayaris.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
								<li>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>								
                            	<li>Модель: Портальная</li>
                                <li>Производительность: от 50 до 250л/мин</li>
                                <li>Видов топлива: от 1 до 4</li>
                                <li>Кол-во кранов: от 1 до 8</li>
                                <li>Рабочая температура: от -47°С до +50°С</li>
                                <li>Гидравлика: Bennet</li>                              
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;Эколайн&raquo;</h3>
                            <h2>Экономвариант ТРК для ведомственных АЗС!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Модель топливораздаточной колонки эконом-класса. Предназначена для работы на ведомственных АЗС. Предназначенна для выдачи одного вида топлива. Комплектуется раздаточными рукавами в количестве от одного до двух штук.</p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/ekolinebelaz.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
                            	<li>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>
								<li> Модель: Эколайн</li>
                                <li>Производительность: от 50 до 250л/мин</li>
                                <li>Один вид топлива</li>
                                <li>Кол-во кранов: от 1 до 2</li>
                                <li>Рабочая температура: от -47°С до +50°С</li>
                                <li>Гидравлика: Bennet</li>                                
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Газораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;LPG-1&laquo;</h3>
                            <h2>Эстетика и надежность!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Модель газораздаточной колонки для отпуска СУГ. Может устанавливаться как на коммерческих АГЗС, так и на ведомственных АГЗС. Отличается очень ярким современным дизайном. Предназначена для выдачи одного вида СУГ. Комплектуются раздаточными рукавами в количестве одного- двух штук.</p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/lpgpopova1.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
								<li>Газораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>								
                            	<li>Модель: <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус-LPG</b></font></li>
                                <li>Производительность: 60 л/мин</li>
                                <li>Один вид СУГ</li>
                                <li>Кол-во кранов: от 1 до 2</li>
                                <li>Рабочая температура: от -47°С до +50°С</li>                            
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            <article class="slide-item">
                <div class="auto-container">
                	<div class="text-side">
                        <div class="sec-title">
                            <h3>Маслораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font>.
							Модель &laquo;Цертус-111&raquo;</h3>
                            <h2>Надежное оборудование для сложных условий эксплуатации!</h2>
                        </div>
                        <div class="sec-text">
                            <p>Маслораздаточная колонка, с дистанционным управлением предназначена . Может устанавливаться как на коммерческих АЗС, так и на ведомственных АЗС. Отличается современным дизайном.  Комплектуются раздаточным рукавом длиной до 4м. Имеет одностороннюю индикацию. </p>
                        </div>
                    </div>
                    
                    <figure class="image-box">
                    	<div class="image-layer" style="background-image:url(/images/resource/mrk_1.png);"></div>
                        <div class="text-layer">
                        	<ul class="text">
								<li>Топливораздаточная колонка <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></li>								
                            	<li>Модель: <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус-111</b></font></li>
                                <li>Производительность: 50 л/мин</li>
                                <li>Один вид масла</li>
                                <li>Кол-во кранов: от 1 до 2</li>
                                <li>Рабочая температура: от -20°С до +50°С</li>
                                <li>Гидравлика: Pressol</li>                               
                            </ul>
                        </div>
                    </figure>
                </div>
            </article>
            
        </div>
        <br><br><br>
    </section>
     
    
        <div class="row clearfix" >
    	<div class="col-md-5 col-sm-5 col-xs-12 " style="padding:0%;-webkit-clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%);
clip-path: polygon(0 0, 100% 0, 70% 100%, 0% 100%);">
                    <img src="/images/resource/kontayner.png" class="img-responsive" style="padding:0%; margin:0%;">
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 ">   
            <div class="sec-title">
                	<h3>КОНТЕЙНЕРНЫЕ АЗС <font size="4.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font></h3>
                    <h2>НАДЕЖНЫЕ КОНТЕЙНЕРНЫЕ АЗС <font size="7.0" color="#ff6600" face="Roboto Slab"><b>Цертус</b></font> ОТ ЗАВОДА-ПРОИЗВОДИТЕЛЯ</h2>
            </div>
            <div class="sec-text">
                	<p>Выгодное решение для заправки техники вдали от населенных пунктов с возможностью установки систем автоматизации контроля оборудования и доступа к ГСМ</p>
                  &ensp; <a href="#contact" class="dark-btn">УЗНАТЬ БОЛЬШЕ...</a>
                </div>
        </div>  <br><br><br>  
        </div>
  
          
    <section id="best" > 
        <br><br>
    <div id="fh5co-course-categories" >
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h3>ПОЧЕМУ ВЫБИРАЮТ НАС?</h3>
                    <br><br>  
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon icon-star">
							<i class="glyphicon glyphicon-shopping-cart"></i>
						</span>
						<div class="desc">                            
							<h3><a href="#">Ассортимент</a></h3>
                            <br><br>
							<p> Широкий ассортимент выпускаемой продукции от мини-ТРК до контейнерных АЗС</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
                        <span class="icon icon-search"></span>
						<span class="icon">
							<i class="glyphicon glyphicon-certificate"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Качество</a></h3>
                            <br><br>
							<p>Современные ТРК, разработанные с учетом российских условий эксплуатации </p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="glyphicon glyphicon-heart"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Индивидуальный подход</a></h3>
                            <br>
							<p>Мы любим своих клиентов и для каждого найдем именно то решение, которое его устроит <br></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center animate-box">
					<div class="services">
						<span class="icon">
							<i class="glyphicon glyphicon-wrench"></i>
						</span>
						<div class="desc">
							<h3><a href="#">Сервис</a></h3>
                            <br><br>
							<p>Сопровождение всего жизненного цикла продукции - от подключения до ремонта<br><br></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
    <br><br><br>      
    </section>
    <section class="availability four-column">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h3>С НАМИ ВЫ ПОЛУЧАЕТЕ:</h3>
                    <br><br> 
				</div>
            </div>    
            <div class="row clearfix">    
                <article class="col-md-3 col-sm-3 col-xs-12">
                    <div class="block wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <div class="upper-rounds">
                            <div class="img-circle small-circle"><span class="glyphicon glyphicon-ok"></span></div>
                            <div class="img-circle big-circle" style="background: blue; color:white;">гарантия</div>                           
                        </div>
                        <h3><a href="#">Гарантия 1,5 года</a></h3>
                        <p>Для всей продукции компании установлен гарантийный срок 18 месяцев</p>
                    </div>
                </article>
                
                <article class="col-md-3 col-sm-3 col-xs-12">
                    <div class="block wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <div class="upper-rounds">
                            <div class="img-circle small-circle"><span class="glyphicon glyphicon-download"></span></div>
                            <div class="img-circle big-circle" style="background: red; color:white;">низкие<br> цены</div>
                            
                        </div>
                        <h3><a href="#">Низкие цены</a></h3>
                        <p>Бесперебойное снабжение расходными элементами (всегда в наличии), цены в разы ниже импортных</p>
                    </div>
                </article>
                
                <article class="col-md-3 col-sm-3 col-xs-12">
                    <div class="block wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <div class="upper-rounds">
                            <div class="img-circle bigger-circle"><div class="inner img-circle"><span></span><br>обучение</div>
                            </div>
                        </div>
                        <h3><a href="#">Бесплатное обучение</a></h3>
                        <p>Бесплатное обучение ваших операторов АЗС, механиков и прочего персонала работе с ТРК и программным обеспечением</p>
                        
                    </div>
                </article>
                
                <article class="col-md-3 col-sm-3 col-xs-12">
                    <div class="block wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                        <div class="upper-rounds">
                            <div class="img-circle small-circle" ><span class="glyphicon glyphicon-thumbs-up"></span></div>
                            <div class="img-circle big-circle" style="background: DeepPink; color:white;">дизайн</div>                           
                        </div>
                        <h3><a href="#">Индивидуальный дизайн</a></h3>
                        <p>Возможно изготовление корпуса по индивидуальному дизайну с использованием декоративных элементов</p>
                    </div>
                </article>
                
            </div>
        </div>
    </section>
    <br><br><br>    
    <section class="tweets-scroller" id="foto">  
       
        <div class="image-scroller-container">
        	<ul class="image-scroller">
            	<li class="slide-item"><span class="image" style="background-image:url(/images/resource/evrolineblizko.png);"></span></li>
                <li class="slide-item"><span class="image" style="background-image:url(/images/resource/evrolinekrasnyar.png);"></span></li>
                <li class="slide-item"><span class="image" style="background-image:url(/images/resource/lukgazpopova.png);"></span></li>
            </ul>
        </div>
        
    </section>  
	<?php
	require_once ((__DIR__).'/snow.php');
	?>
	
	
	
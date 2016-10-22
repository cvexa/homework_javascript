<?php

include_once('includes/header.php');
?>
    <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="<?php echo base_url();?>images/logo_new1.png" class="logo img-responsive">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">За Нас</a></li>
                        <li><a href="#pricing">Какво Готвим</a></li>
                        <li><a href="#great-place-to-enjoy">Условия за Поръчка</a></li>
                        
                        <li><a href="#reserve">Поръчка</a></li>
                    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
        <section id="header-slider" class="owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">Най - вкусните Баници</h1>
                        <p class="header-sub-title">Вита баница със сирене</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">Най - меката питка</h1>
                        <p class="header-sub-title">На баба питката</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content text-right pull-right">
                        <h1 class="header-title">Най - ароматния боб</h1>
                        <p class="header-sub-title">Боб с наденица</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
        </section>



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="<?php echo base_url();?>images/icons/about_modified.png" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                         <div id="bg_old">
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            
                               
                            <div class="section-content">
                                <div id="text_bg">
                                <h2 class="section-content-title">За Нас</h2>
                               <p class="section-content-para">Какво е Баба Кетъринг ?</p>
                                <p class="section-content-para">
                                   Идеята на "Баба Кетъринг" е намирането на реално решение на проблема с ниските доходи на възрастните хора в обезлюдените села като ги свърже с бизнеса.
                                </p>
                                <p class="section-content-para">
                                   Целта е да се насърчат фирмите,организации и отделните хора да поръчват на бабите от селата готова храна, за своите фирмени събития и лични празненства срещу заплащане.
                                   Така се дава възможност за допълнителен доход на възрастните хора, а вие ще се насладите на храна с неповторим вкус, приготвена с местни продукти!
                                </p>
                           <div id="big_screen2">  <!-- div space for big screens -->
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                           </div> <!-- end of space div -->
                      
                              
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- end of text bg -->
            </div> <!-- /.wrapper -->
             </div> <!-- end of bg_old -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Какво предлагаме на най-ниски цени </h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">Всички</li>
                                            <li class="filter" data-filter=".dough">Тестени</li>
                                            <li class="filter" data-filter=".meat">Местни</li>
                                            <li class="filter" data-filter=".no-meat">Традиционни</li>
                                            <li class="filter" data-filter=".desert">Десерти</li>
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <li class="item dough">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food1.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Вита Баница със Сирене</h3>
                                                Нашите баби, с удолвоствие ще ви приготвят домашна баница 
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">20 лв.</h2>
                                </li>

                                <li class="item dough">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food2.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Мекици</h3>
                                                Както баба ви ги е правила, когато сте били малки
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">10 лв.</h2>
                                </li>
                                <li class="item dough">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food3.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Питка</h3>
                                                Ръчно приготвена питка, печена на печка с дърва
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">15 лв.</h2>
                                </li>
                                <li class="item meat">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food4.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Гювечът със свинско месо на баба</h3>
                                                По рецепта от едно време
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">35 лв.</h2>
                                </li>
                                <li class="item meat">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food5.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Телешко с грах</h3>
                                                Яхния с телешко месо, грах и моркови
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">25 лв.</h2>
                                </li>
                                <li class="item meat">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food6.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Сърми с кълцано месо в гювеч</h3>
                                                Сърми с листа кисело зеле и парчета месо
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">23 лв.</h2>
                                </li>
                                <li class="item no-meat">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food7.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Чушки с боб</h3>
                                                Пълнени сухи чушки с боб 
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">15 лв.</h2>
                                </li>
                                <li class="item no-meat">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food8.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Постна манджа с тиквички и чесън</h3>
                                                Диетично ястие с тиквички, ориз и пресен лук
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">19 лв.</h2>
                                </li>
                                <li class="item desert">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food9.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Млечница</h3>
                                                Мляко с ориз
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">8 лв.</h2>
                                </li> 
                                <li class="item desert">

                                    <a href="#the_form">
                                        <img src="<?php echo base_url();?>images/food10.png" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Тиква</h3>
                                                С мед и орехи - м-м-м-м-м!
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">12 лв.</h2>
                                </li> 
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>


        <!--== 8. Great Place to enjoy ==-->
        <section id="great-place-to-enjoy" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?php echo base_url();?>images/icons/order_modified.png">
            <div class="wrapper">

                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Условията за поръчка от бабите</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->



        <!--==  9. Our Beer  ==-->
        <section id="beer" class="beer">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?php echo base_url();?>images/icons/conditions.png">
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">

                    </div>
                     
                    <div class="col-xs-12 col-sm-6 dis-table-cell">
                        <div id="bg_old2">
                        <div class="section-content">
                            <div id="condition_text">
                            <h2 class="section-content-title">Условия </h2>
                            <div class="section-description">
                                <p class="section-content-para">
                                    Ние работим с много Баби от много села в България, все пак може да има известно забавяне на поръчка ако всичките ни Баби са заети с поръчки и готвят за някой.
                                </p>
                                <p class="section-content-para">
                                    Нашите условия са прости - подхождайте към сайта, работата ни, и най-вече бабите с разбиране и топло сърце, все пак знаете че всяка наша готвачка ще даде максимални усилия за да ви сготви както от едно време, за да оближете пръсти.Ако желаете да зарадвате и подпомогнете направете поръчката си чрез формата по-долу.
                                    <p class="section-content-para"> Бон Апети !</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of condition_text -->
                </div> <!-- end of bg div -->
                </div>
            </div>
        </section>



     



       <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?php echo base_url();?>images/icons/form_order.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">Пазарувай сега  ! </h2> 
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#reserve -->



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="<?php echo base_url();?>images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="reserve.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



<?php

include_once('includes/footer.php');
?>
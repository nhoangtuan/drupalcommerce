<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Flex - Free Web Template</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
<!-- 
Flex Template 
http://www.templatemo.com/tm-406-flex
-->
       
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

    </head>
 
    <body>
            
                             <!---Header-->
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="site-main" id="sTop"> 
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="<?php echo $items['fb']?>" class="fa fa-facebook"></a></li>
                                <li><a href="<?php echo $items['tw']?>" class="fa fa-twitter"></a></li>
                                <li><a href="<?php echo $items['db']?>" class="fa fa-dribbble"></a></li>
                                <li><a href="<?php echo $items['li']?>" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                 <!-- /.main-header -->
               <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                    <h1>
                                        <a href="#">Flex</a>
                                    </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                    
                       					 <?php foreach ($main_menu as $i) : ?> 
                         			 	 <li class="external"><a href="<?php print $i['href']?>"  ><?php print $i['title']?></a></li>
                  						
                        				<?php endforeach; ?>
                       				
                       					 
                                    </ul>                                    
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> 
            </div> <!-- /.site-header -->
             <!-- /.site-slider -->

               <div class="site-slider">
                <?php print render($page['slideshow'])?>
              
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->
<?php print render($page['page_top'])?>

        <div class="content-section" id="services">
            <div class="container">
                <div class="row">
                    <!-- /.heading-section -->
                </div> <!-- /.row -->
                <?php print render($page['services'])?>
            </div> <!-- /.container -->
            
        </div> <!-- /#services -->

       

        <div class="content-section" id="portfolio">  
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Portfolio</h2>
                        <p>What we have done so far</p>
                    </div> <!-- /.heading-section -->
                    <?php print render($page['portfolio'])?>
                </div> <!-- /.row -->
                

            </div> <!-- /.container -->
          
        </div> <!-- /#portfolio -->

      


        <div class="content-section" id="our-team">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Team</h2>
                        <p>Get to know our people and company</p>
                    </div> <!-- /.heading-section -->
                     <?php print render($page['our_team'])?>
                </div> <!-- /.row -->
              
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="skills-heading">
                            <h3 class="skills-title">Our web design skills</h3>
                            <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <p><?php echo $items['skill']?>
						</p>
						
                    </div> <!-- /.col-md-8 -->
                 <?php print render($page['our_skill'])?>
                     
                </div> <!-- /.row -->
               
            </div> <!-- /.container -->
            
        </div> <!-- /#our-team -->

     

        <div class="content-section" id="contact">  
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Contact</h2>
                        <p>Send a message to us</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                       <div class="googlemap-wrapper">
                            <div id="map_canvas" class="map-canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.480755340097!2d106.66891352019563!3d10.814257456121112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752918ccc30fc5%3A0xec035b24eaeddc0a!2zMSBC4bqhY2ggxJDhurFuZywgUGjGsOG7nW5nIDIsIFTDom4gQsOsbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1468916990836" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> <!-- /.googlemap-wrapper -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <p>
                        <?php echo $items['contact']?>
                    	</p>
                        <ul class="contact-info">
                            <li>Phone: <?php echo $items['phone']?></li>
                            <li>Email: <a href="mailto:<?php echo $items['email']?>"><?php echo $items['email']?></a></li>
                            <li>Address: <?php echo $items['address']?></li>
                        </ul>
                        <!-- spacing for mobile viewing --><br><br>
                    </div> <!-- /.col-md-7 -->
                  <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                            <?php print render($page['contact'])?>
                        </div> <!-- /.contact-form -->
                    </div>
                    
                </div> <!-- /.row -->
            </div> <!-- /.container -->
          
        </div> <!-- /#contact -->
            
   

        <div id="footer">
            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-xs-12 text-left">
                           <span><?php echo $items['footer_text']?></span>
                  </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->
    

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"></script></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        
        <!-- Google Map Init-->
         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '37.769725, -122.462154' 
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });

                /* Simulate hover on iPad
                 * http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
                 --------------------------------------------------------------------------------------------------------------*/ 
                $('body').bind('touchstart', function() {});
            });
        </script>
     
        <!-- templatemo 406 flex -->
    </body>
</html>

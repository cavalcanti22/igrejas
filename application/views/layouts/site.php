
<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    
    <title ><?=$titulo?></title>

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/site/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/site/css/prettyPhoto.css" />
    <link href='http://fonts.googleapis.com/css?family=News+Cycle%7CPT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
    <style type="text/css">@import url("http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz");</style>
    <!--[if lt IE 9]>   <link rel="stylesheet" type="text/css" href="ie.css" /> <![endif]-->

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
    
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/jquery.carouFredSel-5.5.0-packed.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/menu.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/validate.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/site/js/custom.js"></script>
    <script src="<?=base_url()?>assets/site/js/jquery.mobilemenu.js"></script>
    <script type="text/javascript">
      jQuery(document).ready(function() {
         jQuery('.carousel').carouFredSel({
            responsive : true,
            width:'92%',
            scroll: 2,
            items: {
               width: 200,
               visible: {
                  min: 1,
                  max: 5
              }
          },
          next : '.car-next',
          prev : '.car-prev',
          auto: true
      });
     });
      jQuery(function() {
         jQuery('.mini-slider ul').carouFredSel({
            responsive : true,
            items : {visible:1},
            scroll :1,
            width:'100%',

            next : '.ts-next',
            prev : '.ts-prev',
            auto: false
        });   
     });
 </script>
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
    <![endif]-->
    
    <!-- REVOLUTION BANNER CSS SETTINGS --> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/site/css/fullwidth.css" media="screen" />   
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/site/rs-plugin/css/settings.css" media="screen" />
    
    <!-- jQuery KenBurn Slider  --> 
    <script type="text/javascript" src="<?=base_url()?>assets/site/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>      
    <script type="text/javascript" src="<?=base_url()?>assets/site/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>      
    
</head>
<body>

    <!-- BEGIN Header -->
    <div class="header-wrapper"> 
        <header class="container">

            <div id="logo" class="five columns">

                <div class="three columns alpha">
                   <a href="<?=base_url() ?>"><img src="<?=base_url()?>assets/site/images/logo.png" alt="Reverence" /></a>
               </div>

               <div class="four columns alpha last">

                   <p id="slogan"></p>

               </div>        

               <div class="clear"></div>

           </div>

           <nav class="eleven columns last">

            <ul class="sf-menu">

                <li><a href="<?=base_url() ?>" class="active-item">HOME</a>
                </li>

                <li><a href="<?=base_url()?>">IGREJAS</a>
                 <ul class="sub-menu"> 
                    <li><a href="">Norte</a>
                        <ul class="sub-menu">
                          <li><a href="<?=base_url()?>estados/amapa">Amapá</a></li>
                          <li><a href="<?=base_url()?>estados/acre">Acre</a></li>
                          <li><a href="<?=base_url()?>estados/para">Pará</a></li>
                          <li><a href="<?=base_url()?>estados/rondonia">Rondônia</a></li>
                      </ul> 
                  </li>
                  <li><a href="">Nordeste</a>
                    <ul class="sub-menu">
                      <li><a href="<?=base_url()?>estados/alagoas">Alagoas</a></li>
                      <li><a href="<?=base_url()?>estados/bahia">Bahia</a></li>
                      <li><a href="<?=base_url()?>estados/ceara">Ceará</a></li>
                      <li><a href="<?=base_url()?>estados/maranhao">Maranhão</a></li>
                      <li><a href="<?=base_url()?>estados/paraiba">Paraíba</a></li>
                      <li><a href="<?=base_url()?>estados/pernambuco">Pernambuco</a></li>
                      <li><a href="<?=base_url()?>estados/piaui">Piauí</a></li>
                      <li><a href="<?=base_url()?>estados/riograndedonorte">Rio Grande do Norte</a></li>
                      <li><a href="<?=base_url()?>estados/sergipe">Sergipe</a></li>
                  </ul> 
              </li>
              <li><a href="">Centro-Oeste</a>
                <ul class="sub-menu">
                  <li><a href="<?=base_url()?>estados/distritofederal">Distrito-Federal</a></li>
                  <li><a href="<?=base_url()?>estados/goias">Goiás</a></li>
                  <li><a href="<?=base_url()?>estados/matogrosso">Mato Grosso</a></li>
                  <li><a href="<?=base_url()?>estados/matogrossodosul">Mato Grosso do Sul</a></li>
              </ul> 
          </li>
          <li><a href="">Sudeste</a>
            <ul class="sub-menu">
              <li><a href="<?=base_url()?>estados/espiritosanto">Espiríto Santo</a></li>
              <li><a href="<?=base_url()?>estados/minasgerais">Minas Gerais</a></li>
              <li><a href="<?=base_url()?>estados/riodejaneiro">Rio De Janeiro</a></li>
              <li><a href="<?=base_url()?>estados/saopaulo">São Paulo</a></li>
          </ul> 
      </li>
           <li><a href="">Sul</a>
            <ul class="sub-menu">
              <li><a href="<?=base_url()?>estados/parana">Paraná</a></li>
              <li><a href="<?=base_url()?>estados/riograndedosul">Rio Grande Do Sul</a></li>
              <li><a href="<?=base_url()?>estados/santacatarina">Santa Catarina</a></li>
          </ul> 
      </li>
  </ul>
</li>
<li><a href="<?=base_url()?>cadastro">CADASTRE SUA IGREJA</a></li>

</ul>


<!-- MOBILE NAVIGATION -->


<!-- END MOBILE NAVIGATION -->

</nav>

<div class="clear"></div>

</header>
</div>

<!-- END Header -->



     <?php $this->load->view($view); ?>

<!-- BEGIN Footer -->
<div id="footer-wrapper">

  <footer class="container">

       <div class="four columns footer-block">
           <h3>Latest News</h3>

           <ul class="news">
               <li><a href="<?=base_url()?>">The sacraments of Christian initiation - Baptism, Confirmation, and the Eucharist</a></li>
               <li><a href="<?=base_url()?>">Strengthened by the sacrament of Confirmation</a></li>
               <li><a href="<?=base_url()?>">To feed the Church by the word and grace of God</a></li>
           </ul>
       </div>

       <div class="four columns footer-block">
           <h3>Recent Events</h3>

           <ul class="list-posts">
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer4.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">A Night of Worship with John Smith</a>
                   </div>
                   <div class="clear"></div>
               </li>
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer5.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">Mission Viejo and Ocean Hills VBS</a>
                   </div>
                   <div class="clear"></div>
               </li>
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer6.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">Womens Spring Study Group</a>
                   </div>
                   <div class="clear"></div>
               </li>
           </ul>
       </div>

       <div class="four columns footer-block">
           <h3>Popular Posts</h3>

           <ul class="list-posts">
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer1.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">Devotions to Our Lord Jesus Christ</a>
                   </div>
                   <div class="clear"></div>
               </li>
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer2.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">Prayer to the Blessed Virgin Mary</a>
                   </div>
                   <div class="clear"></div>
               </li>
               <li>
                   <div class="list-post-thumb">
                       <img src="<?=base_url()?>assets/site/images/demo/footer3.png" alt="" />
                   </div>
                   <div class="list-post-desc">
                       <a href="<?=base_url()?>">Prayer to St. Michael the Archangel</a>
                   </div>
                   <div class="clear"></div>
               </li>
           </ul>
       </div>

       <div class="four columns last footer-block">
           <h3>Contact Us</h3>

           <p>Suspendisse euismod, nunc eget pellentesque pellentesque, odio lectus tempor antea tristique sem. </p>
           <div class="contact-details">
               <span>Address:</span><p>1600 Pacific Coast Highway, Laguna Beach, CA 92607</p>
               <span>Phone:</span><p>000 011(949) 458-2300</p>
               <span>Fax:</span><p>000 011(949) 458-4300</p>
               <span>E-mail:</span><p><a href="mailto:info@reverence.com">info@reverence.com</a></p>
           </div>

           <div class="clearsmall"></div>

       </div>

       <div class="clear"></div>

       <div id="footer-bottom-divider"><a href="#logo" id="toTop"><img src="<?=base_url()?>assets/site/images/back-top.png" width="49" height="49" alt="Back to top" /></a></div>
       <div id="footer-bottom">
           <div id="copyright">
            © 2019 Igrejas.com.br by<a href="http://geminiweb.com.br" target="_blank"> Gemini Web</a>
        </div>
        <div id="footer-menu">
            <ul>
               <li><a href="<?=base_url()?>">Home</a></li>
               <li><a href="<?=base_url()?>">Sobre</a></li>
               <li><a href="<?=base_url()?>">Cadastrar Igreja</a></li>
           </ul>
       </div>

       <div class="clear"></div>

   </div>

</footer>

</div>

<!-- END Footer -->

<!-- BEGIN BOTTOM bar -->
<div class="bottom-wrapper">
  <div class="container">

    <div id="bottombar">       
            <div id="social">
                <!--Social Networks-->
                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/site/images/social_icons/twitter.png" class="social fade" alt="Twitter"/></a>
                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/site/images/social_icons/facebook.png" class="social fade" alt="Facebook"/></a>
                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/site/images/social_icons/linkedin.png" class="social fade" alt="Linkedin"/></a>
                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/site/images/social_icons/vimeo.png" class="social fade" alt="Vimeo"/></a>            
                <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/site/images/social_icons/flickr.png" class="social fade" alt="Flickr"/></a>
                <!--End Social Networks--> 
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>
<!-- END BOTTOM bar -->

<!-- Slider -->

<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
           tpj.fn.css = tpj.fn.cssOriginal;

       tpj('.fullwidthbanner').revolution(
       {  
         delay:9000,                        
         startwidth:890,
         startheight:450,

              onHoverStop:"off",            // Stop Banner Timet at Hover on Slide on/off
              
              thumbWidth:100,             // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
              thumbHeight:50,
              thumbAmount:3,
              
              hideThumbs:200,
              navigationType:"none",          //bullet, thumb, none, both  (No Shadow in Fullwidth Version !)
              navigationArrows:"verticalcentered",    //nexttobullets, verticalcentered, none
              navigationStyle:"round",        //round,square,navbar
              
              touchenabled:"on",            // Enable Swipe Function : on/off
              
              navOffsetHorizontal:0,
              navOffsetVertical:20,
              
              fullWidth:"on",
              
              shadow:0,               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
              
              stopLoop:"on"             // on == Stop loop at the last Slie,  off== Loop all the time.

            }); 




   });
</script>

</body>
</html>
<!-- -----------------------SEPARADOR------------------------------------------------ -->

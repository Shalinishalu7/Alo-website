 <!-- index page    -->


<!doctype html>
<html lang="en">


<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/06-04-2021/industries-liberty-demo_Free/1450891409/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jul 2022 06:07:58 GMT -->
<!-- Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>


<link href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Alo Infotech</title>

    <?php include 'common-files/head-link.php'; ?>
  
    <script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

</script>
<style>
  /* .strength-banner {
    background: url(assets/images/bg-img.png) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-position: bottom;
} */
.title-style{
  font-size: 29px;
  text-align: justify;
}
.mt-4 .business{
  font-size: 23px;
  text-align: justify;
}

p.mt-4.info.text-justify {
    margin: 0;
    padding: 0;
    font-size: 16px;
    line-height: 26px;
    color: var(--font-color);
}

p.strength.text-justify {
    font-size: 16px;
} 
h5.mt-4.business {
    font-size: 22px;
} 

/* client carousel */
#ourclients {
  display: block;
  margin-left: auto;
  margin-right: auto;
  background: #e9f4ff;

  /* height:150px;   */    padding: 30px 10px;
    width: 100%;
}
.about-icon {
    display: flex;
    align-items: center;
}
#ourclients .clients-wrap {
  display: block;
  width: 95%;
  margin: 0 auto;
  overflow: hidden;
}
#ourclients .clients-wrap ul {
  display: block;
  list-style: none;
  position: relative;
  margin-left: auto;
  margin-right: auto;
}
#ourclients .clients-wrap ul li {
  display: block;
  float: left;
  position: relative;
  width: 220px;
  height: 100px;
  line-height: 100px;
  text-align: center;
}
#ourclients .clients-wrap ul li img {
  vertical-align: middle;
  max-width: 100%;
  width:150px;
  max-height: 100%;
  -webkit-transition: 0 linear left;
  -moz-transition: 0 linear left;
  transition: 0 linear left;
}
#ourclients h3{
border-bottom:2px solid #3399ff;
width:150px;
padding:10px;
}
/* end client carousel */



header .item {
  height: 100vh;
  position: relative;
}
header .item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
header .item .cover {
  padding: 75px 0;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.6);
  display: flex;
  align-items: center;
}
header .item .cover .header-content {
  position: relative;
  padding: 56px;
  overflow: hidden;
}
header .item .cover .header-content .line {
  content: "";
  display: inline-block;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
  border: 9px solid #fff;
  -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
  clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
}
header .item .cover .header-content h2 {
  font-weight: 300;
  font-size: 35px;
  color: #fff;
}
header .item .cover .header-content h1 {
  font-size: 56px;
  font-weight: 600;
  margin: 5px 0 20px;
  word-spacing: 3px;
  color: #fff;
}
header .item .cover .header-content h4 {
  font-size: 24px;
  font-weight: 300;
  line-height: 36px;
  color: #fff;
}
header .owl-item.active h1 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h2 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInDown;
  animation-delay: 0.3s;
}
header .owl-item.active h4 {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInUp;
  animation-delay: 0.3s;
}
header .owl-item.active .line {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-name: fadeInLeft;
  animation-delay: 0.3s;
}
header .owl-nav .owl-prev {
  position: absolute;
  left: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-prev span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-prev:focus {
  outline: 0;
}
header .owl-nav .owl-prev:hover {
  background: #000 !important;
}
header .owl-nav .owl-next {
  position: absolute;
  right: 15px;
  top: 43%;
  opacity: 0;
  -webkit-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
  background: rgba(0, 0, 0, 0.5) !important;
  width: 40px;
  cursor: pointer;
  height: 40px;
  position: absolute;
  display: block;
  z-index: 1000;
  border-radius: 0;
}
header .owl-nav .owl-next span {
  font-size: 1.6875rem;
  color: #fff;
}
header .owl-nav .owl-next:focus {
  outline: 0;
}
header .owl-nav .owl-next:hover {
  background: #000 !important;
}
header:hover .owl-prev {
  left: 0px;
  opacity: 1;
}
header:hover .owl-next {
  right: 0px;
  opacity: 1;
}







.card {
    display: flex;
    align-items: center;
    height: 176px;
    text-align: left;
    position: relative;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

  }
  .start {
    line-height: 40px;
    color: #3183B9;
  }
  @media (max-width:900px) {

    .mt-4 .business{
  font-size: 20px;

}
h5.mt-4.business {
    font-size: 16px;
} 
p.mt-4.info.text-justify {
    font-size: 13px;
} 
p.strength.text-justify {
    font-size: 13px;
} 
.card{
  box-shadow:none;
  height: none;
  border: none;
}
.strength-banner {
  background: none;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-position: bottom;
}
  }
 .mb-sm-7 .mb-3 title{
  margin-left: 20px !important;
 }
  
</style>
    </head>

<body>

<?php include 'common-files/head.php'; ?>

  <!-- banner section -->
  
 <section id="home" class="w3l-banner py-5">
 <div class="banner-image">
 <header>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2017/10/24/10/30/business-2884023_960_720.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>Teimagine Digital Experience with</h2>
                                <h1>Start-ups and solutions</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                     </div>
                </div>                    
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Reimagine Digital Experience with</h2>
                                <h1>Intelligent solutions</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                     </div>
                </div>                
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2017/05/04/16/37/meeting-2284501_960_720.jpg" alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Peimagine Digital Experience with</h2>
                                <h1>Intelligent Solutions</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </header></div>
    <!-- <div class="banner-image">

    </div>
    <div class="banner-content">
      <div class="container pt-5 pb-md-4" style="margin-left: 30px;">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-7 pt-md-0 pt-4">
            <h3 class="mb-sm-9 mb-3 title" style="font-family: Poppins-SemiBold">
              The Greatest Asset Of
              Our Company Is
              <span class="d-block-res">C<span class="type-js"><span class="text-js">lients.</span></span></span>
            </h3>
            <p class="text-justify">Alo Groups combines Alo Infotech & Alo Foodie. We are a vibrant team
              of experienced professionals, we value your business first.</p>
            <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
              <a class="btn btn-style" href="about.php" style="background-color: #498eeb;">More About Us</a>
            </div>
          </div>
           <div class="col-md-6 banner-right mt-lg-4 mt-0 text-right offset-lg-1">
           <img class="img-fluid" src="assets\images\banner-logo.jpg" alt=" "> 
          </div> 
        </div>
      </div>
    </div> -->
 
  </section>

<section>

</section>










  <!-- //banner section -->

  <div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

<!-- <div class="container deliver mt-5 mb-5">
  <div class="row row-cols-1 row-cols-lg-3 g-4 mt-4">
    <div class="col">
      <div class="card groups">
        <div class="about-single p-3 d-flex justify-content-between">
          <div class="about-icon mr-3">
           
            <img class="" src="assets\images\BLUE FACE FINAL.png" alt=" ">
          </div>
          <div class="about-content">
            <h5 class="mb-3">Alo Info-Tech</h5>
            <p>Always deliver more
              than expected, 24/7 maintenance & monitoring.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card groups">
        <div class="about-single p-3 d-flex justify-content-between">
          <div class="about-icon mr-3">
          
            <img class="" src="assets\images\BLUE CAB FINAL.png" alt=" ">
          </div>
          <div class="about-content">
            <h5 class="mb-3">Alo Cab</h5>
            <p>Choose from a range of categories and prices.
            <span style="visibility:hidden"> Choose from a range of categories </span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card groups">
        <div class="about-single p-3 d-flex">
          <div class="about-icon mr-3">
            
            <img class="" src="assets\images\BLUE HAND FINAL.png" alt=" ">
          </div>
          <div class="about-content">
            <h5 class="mb-3">Alo Foodie</h5>
            <p>Order from your favorite restaurants & track on the go. <span style="visibility:hidden"> Order from your favorite restaurants</span></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>



</div> -->
  <!-- about section -->
  <section class="w3l-aboutblock">
    <div class="container pb-md-5 pb-sm-4">
        
      <div class="row">
        <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last">
          <img class="img-fluid img-responsive" src="assets\images\tree-img.jpg" alt=" ">
        </div>
        <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first">
         
          <h3 class="title-style">Start Your IT Transformation With<span>   ALO INFO-TECH</span></h3>
          <h5 class="mt-4 business">Your Business Demands Secure,Reliable And Cost-Effective Technology</h5>
          <p class="mt-4 info text-justify">
            Alo Info-Tech , We specialize in the development of software solutions, web based solutions, web hosting development, Search engine optimization, Android development as our major categories of business.
          </p>
        </div>
      </div>
    </div>
  </section>



  <!-- //about section -->
  <div style="margin: 8px auto; display: block; text-align:center;">
  </div>
  <!-- <section class="w3l-about-2 py-5">
        <div class="container py-md-5 py-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 about-2-secs-left">
                    <h4 class="title-style mb-2">Why Choose Us</h4>
                    <p class="text-justify">
              We offer great career opportunity which leads to your future growth
                      </p>
                    
                </div>
                <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-5">
                    <img src="assets\images\why-choose-us.jpg" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section> -->


  <section class="image-with-content py-5">
  <div class="container w3-stats">
                <div class="row text-center justify-content-center text-center"> 
                <h3 style="font-size: 33px;" class="title-style mb-2"><span>Our</span> Clients</h3>
  <div id="ourclients">

  <div class="clients-wrap">
    <ul id="clientlogo" class="clearfix">
      <li>
        <img src="assets/images/logo/logo_1.png" alt="Logo">
      </li>
     
      <li>
        <img src="assets/images/logo/logo_3.png" alt="Logo">
      </li>
      <li>
        <img src="assets/images/logo/logo_2.png" alt="Logo">
      </li>
    
      <li>
        <img src="assets/images/logo/logo_8.png" alt="Logo">
      </li>
      <li>
        <img src="assets/images/logo/logo_6.png" alt="Logo" >
      </li>
      <li>
        <img src="assets/images/logo/logo_13.png" alt="Logo">
      </li>
    
  
      <li>
        <img src="assets/images/logo/logo_10.png" alt="Logo">
      </li>
      <li>
        <img src="assets/images/logo/logo_11.png" alt="Logo" >
      </li>
   
      <li>
        <img src="assets/images/logo/logo_9.png" alt="Logo">
      </li>
      <li>
        <img src="assets/images/logo/logo_5.png" alt="Logo">
      </li>
     
      <li>
        <img src="assets/images/logo/logo_12.png" alt="Logo" >
      </li>
     
      <li>
        <img src="assets/images/logo/logo_14.png" alt="Logo" >
      </li>
    
      <!-- <li>
        <img src="assets/images/logo/logo_15.png" alt="Logo" hspace='100'>
      </li> -->


    </ul>
  </div>
</div>
</section>

</div></div>








    <section class="w3l-about-2 " >
        <div class="container py-md-5 py-4">
        <h3 style="font-size: 33px;" class="title-style mb-2">Our <span>Strength</span></h3>
     

            <div class="row justify-content-between">
                <div class="col-lg-6 about-2-secs-left strength-banner" >
                  
                    <p class="strength text-justify">
                   <span style="margin-left:50px"> Our </span> main strengths are communication, team work Problem-solving and creativity. Clients and employees are the main focus of our company. We offer great career opportunities which leads to your future growth. We follow strong innovative company culture. We are good at managing people. We always complete our projects in time.Deal well with difficult situations. We are able to juggle more than one project at a time. Our company has good infrastructure. Our employees are friendly natured. For freshers it is a good platform to start their career and develop their programming skills.
</p>
                    <!-- <div class="mt-4">
                        <a class="btn btn-style" href="#">View Our Services</a>
                    </div> -->
                </div>
                <div class="col-lg-6 about-2-secs-right mt-lg-0 mt-5">
                <img src="assets\images\strength.jpg" alt="" class="img-fluid img-responsive" />
                </div>
            </div>
        </div>
    </section>



  <?php include 'common-files/footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script >

$(function() {
  var $clientslider = $('#clientlogo');
  var clients = $clientslider.children().length;
  var clientwidth = (clients * 220); 
  $clientslider.css('width', clientwidth);
  var rotating = true;
  var clientspeed = 1800;
  var seeclients = setInterval(rotateClients, clientspeed);
  $(document).on({
    mouseenter: function() {
      rotating = false;
    },
    mouseleave: function() {
      rotating = true;
    }
  }, '#ourclients');
  function rotateClients() {
    if (rotating != false) {
      var $first = $('#clientlogo li:first');
      $first.animate({
        'margin-left': '-220px'
      }, 2000, function() {
        $first.remove().css({
          'margin-left': '0px'
        });
        $('#clientlogo li:last').after($first);
      });
    }
  }
});
</script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>




  </body>

</html>

<script src="assets/js/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='../../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="assests/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.mode-container {
       display: none;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }

}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
    color: black !important;
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
  

#cssmenu {
   
    padding: auto;
    color: black;
}
}

.submenu {
 
    padding: 0;
    min-width: 160px;
    background-color: #333;
    position: absolute;
    top: calc(var(--menu-height) + 5px);
    left: 100%;
    transform: translateX(-50%);
    transition: 200ms;
    transition-delay: 200ms;
    top: 0px;
    margin-left: 40px;    top: -2%;
    left: 100%;
}
.navbar-expand-lg .navbar-nav .dropdown-menu.submenu:before
{
  display:none;
}






#cssmenu{
  color: black;
}

#cssmenu:hover{
  color: #199ff4;
}







#cssmenu,#cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile {
	border:0;
	list-style:none;
	line-height:1;
	display:block;
	position:relative;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box
}

#cssmenu:after,#cssmenu > ul:after {
	content:".";
	display:block;
	clear:both;
	visibility:hidden;
	line-height:0;
	height:0
}

#cssmenu #head-mobile {
	display:none
}

#cssmenu > ul > li:first-child {
    border: none;
}
#cssmenu > ul > li {
	float:left
}

#cssmenu > ul > li > a {
  padding: 17px;
    font-size: 14px;
    letter-spacing: 1px;
    text-decoration: none;
    color: black;
    font-weight: 700;
       text-transform: uppercase;
}

#cssmenu > ul > li:hover > a,#cssmenu ul li.active a {
	color:#199ff4;
}

#cssmenu > ul > li:hover,#cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover {
	/* background:#448D00!important; */
	-webkit-transition:background .3s ease;
	-ms-transition:background .3s ease;
	transition:background .3s ease
}

#cssmenu > ul > li.has-sub > a {
	padding-right:30px
}

#cssmenu > ul > li.has-sub > a:after {
	/* position:absolute; */
	top:23px;
	/* right:11px;
	width:8px;
	height:2px;
	display:block;
	background:black;
	content:'' */
}

#cssmenu > ul > li.has-sub > a:before {
	/* position:absolute;*/
	top:22px;
	right:14px;
	/*	display:block;
	width:2px;
	height:8px;
	background:black;
	content:'';
	-webkit-transition:all .25s ease;
	-ms-transition:all .25s ease;
	transition:all .25s ease */
  position: absolute;
   
    right: 14px;
    /* display: block; */
    /* width: 2px; */
    /* height: 8px; */
    /* background: black; */
    content: '';
    -webkit-transition: all .25s ease;
    -ms-transition: all .25s ease;
    transition: all .25s ease;
    border: solid black;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
}

#cssmenu > ul > li.has-sub:hover > a:before {
	/* top:23px;
	height:0; */
  transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
}

#cssmenu ul ul {
	position:absolute;
	left:-9999px;
  box-shadow: 0px 10px 25px rgb(0 0 0 / 40%);
}

#cssmenu ul ul li {
	height:0;
	-webkit-transition:all .25s ease;
	-ms-transition:all .25s ease;
	background:white;
	transition:all .25s ease
}

/* #cssmenu ul ul li:hover {
} */

#cssmenu li:hover > ul {
	left:auto
}

#cssmenu li:hover > ul > li {
	height:35px
}

#cssmenu ul ul ul {
	margin-left:100%;
	top:0
}

#cssmenu ul ul li a {
	border-bottom:1px solid rgba(150,150,150,0.15);
	padding:11px 15px;
	width:210px;
	font-size:16px;
	text-decoration:none;
	color: black !important;
	font-weight:400
}
#cssmenu ul ul li a:hover{
 color:white !important;
}
#cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a {
	border-bottom:0
}

#cssmenu ul ul li:hover > a,#cssmenu ul ul li a:hover {
	color:#199ff4;
}

#cssmenu ul ul li.has-sub > a:after {
	position:absolute;
	top:14px;
	right:14px;
	/* width:8px;
	height:2px;
	display:block;
	background: black; */
	content:'';
  border: solid white;
  -webkit-transition:all .25s ease;
	-ms-transition:all .25s ease;
	transition:all .25s ease;

    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}

#cssmenu ul ul li.has-sub > a:before {
	position:absolute;
	top:14px;
	right:14px;
	/* display:block;
	width:2px;
	height:8px; */
	/* background: black; */
	content:'';
	-webkit-transition:all .25s ease;
	-ms-transition:all .25s ease;
	transition:all .25s ease;
  border: solid black;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
}

#cssmenu ul ul > li.has-sub:hover > a:before {
	top:17px;
	height:0
}

#cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover {
	background:#199ff4
}

#cssmenu ul ul ul li.active a {
	border-left:1px solid #333
}

#cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active> a {
	border-top:1px solid #333
}
#cssmenu {
	display: flex;
}
@media screen and (max-width:700px) {
  #cssmenu #head-mobile {
	display:none
}

#cssmenu:hover{
  color: #199ff4;
}

nav {
	width:100%
}

#cssmenu {
display: block;width:100%;
}

#cssmenu ul {
	width:100%;
	display:none;background: white;
}

#cssmenu ul li {
	width:100%;
	border-top:1px solid #d7d7d7;
}

#cssmenu ul li:hover {
	background:white;
}
#cssmenu:hover{
  color: #199ff4 !important;
}
#cssmenu ul ul li a:hover {
    color: black !important;
}

#cssmenu ul ul li,#cssmenu li:hover > ul > li {
	height:auto
}

#cssmenu ul li a,#cssmenu ul ul li a {
	width:100%;
	border-bottom:0
}

#cssmenu > ul > li {
	float:none
}

#cssmenu ul ul li a {
	padding-left:25px
}

#cssmenu ul ul li {
	background:#fff!important
}

#cssmenu ul ul li:hover {
	background:white !important
}

#cssmenu ul ul ul li a {
	padding-left:35px
}

#cssmenu ul ul li a {
	color:#000;
	background:none
}

#cssmenu ul ul li:hover > a,#cssmenu ul ul li.active > a {
	color:black
}

#cssmenu ul ul,#cssmenu ul ul ul {
	position:relative;
	left:0;
	width:100%;
	margin:0;
	text-align:left
}

#cssmenu > ul > li.has-sub > a:after,#cssmenu > ul > li.has-sub > a:before,#cssmenu ul ul > li.has-sub > a:after,#cssmenu ul ul > li.has-sub > a:before {
	display:none
}

#cssmenu #head-mobile {
	display:block;
	/* padding:23px; */
	color:black;
	font-size:12px;
	font-weight:700
}

.button {
	width:55px;
	height:46px;
	position:absolute;
	right:0;
	top:0;
	cursor:pointer;
	z-index:12399994
}

.button:after {
	position:absolute;
	top:22px;
	right:20px;
	display:block;
	height:4px;
	width:20px;
	border-top:2px solid black;
	/* border-bottom:2px solid black; */
	content:''
}

.button:before {
	-webkit-transition:all .3s ease;
	-ms-transition:all .3s ease;
	transition:all .3s ease;
	position:absolute;
	top:16px;
	right:20px;
	display:block;
	height:2px;
	width:20px;
	background:black;
	content:''
}

.button.menu-opened:after {
	-webkit-transition:all .3s ease;
	-ms-transition:all .3s ease;
	transition:all .3s ease;
	top:23px;
	border:0;
	height:2px;
	width:19px;
	background: black !important;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	transform:rotate(45deg)
}

.button.menu-opened:before {
	top:23px;
	background:black !important;
	width:19px;
	-webkit-transform:rotate(-45deg);
	-moz-transform:rotate(-45deg);
	-ms-transform:rotate(-45deg);
	-o-transform:rotate(-45deg);
	transform:rotate(-45deg)
}

#cssmenu .submenu-button {
	position:absolute;
	z-index:99;
	right:0;
	top:0;
	display:block;
	border-left:1px solid #d7d7d7;
	height:46px;
	width:46px;
	cursor:pointer;
  
}

#cssmenu .submenu-button.submenu-opened {
	background:white;
}

#cssmenu ul ul .submenu-button {
	height:34px;
	width:34px;
}

#cssmenu .submenu-button:after {
	position:absolute;
	top:22px;
	right:19px;
	/* width:8px; */
	/* height:2px;
	display:block;
	background:black; */
	content:'';
  border: solid black;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

#cssmenu ul ul .submenu-button:after {
	top:15px;
	right:13px;
  
}

/* #cssmenu .submenu-button.submenu-opened:after {
	background:black;
} */

#cssmenu .submenu-button:before {
	position:absolute;
	top:19px;
	right:22px;
	/* display:block;
	width:2px;
	height:8px;
	background:black; */
	content:'';
  /* border: solid black;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg); */
}

#cssmenu ul ul .submenu-button:before {
	top:12px;
	right:16px
}

#cssmenu .submenu-button.submenu-opened:before {
	display:none
}

#cssmenu ul ul ul li.active a {
	border-left:none
}

#cssmenu > ul > li.has-sub > ul > li.active > a,#cssmenu > ul ul > li.has-sub > ul > li.active > a {
	border-top:none
}
}


/* .media screen and (min-width: 1025px) and (max-width: 1440px)
.site-header {
    padding: 0 30px;
} */


</style>
   <!--header-->
   <header id="site-header" class="fixed-top">
        <div class="container">
            <nav  id='cssmenu'>
                <h1 >
                <!-- <a href="index.php"> <img class="img-fluid" src="assets\images\white_logo_alo.png" alt="logo"></a> -->
                     <a href="index.php"> <img class="img-fluid" src="assets\images\01_alo-logo.png" alt="logo"></a>
</h1>
           
 
    
    <div id="head-mobile" style="float:left"></div>
    <div class="button"></div>
    
                    <ul class="ml-lg-auto" >
       
    <!-- <li class='active'><a href='#'>HOME</a></li> -->
    <li ><a href='index.php'>Home</a></li>
    <li><a href='about.php'>About</a></li>
    <li><a href='#'>Services <i class="arrow right"></i></a>
       <ul>
          <li><a href='#'>Digital Marketing</a>
             <ul>
                <li> <a href="seo.php">SEO</a></li>
                <li> <a href="ppc.php">PPC</a></li>
                <li> <a href="social-media.php">Social Media Marketing</a></li>
                <li> <a href="content-marketing.php">Content Marketing</a></li>
                <li> <a href="logo-design.php">Logo Design & Branding </a></li>
             </ul>
          </li>
          <li><a href='#'>Development</a>
             <ul>
                <li> <a href="web-application.php">Web Application</a></li>
                <li> <a href="mobile-application.php">Mobile Application</a></li>
                <li><a href="testing.php">Testing</a></li>
             </ul>
          </li>
          <li><a href='#'>Recruitment Service </a>
             <ul>
                <li><a href="it-staffing.php">It-Staffing </a></li>
               
             </ul>
          </li>
       </ul>
    </li>
    <li> <a href="careers.php">Careers</a></li>
    <li><a href="contact.php">Contact</a></li>
    
   
                    </ul>
                
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
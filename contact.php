<?php
        if(isset($_POST['submit']))
        {
           
            $to = "aloinfotechpvtltd@gmail.com";
             $name = $_POST['name'];
             $email = $_POST['email'];
             $subject =  $_POST['subject'];
             
             $message = $_POST['message'];
             $message = "<form>
             <label>Name: $name</label><br>
             <label>Email: $email</label><br>
             <label>Subject: $subject</label><br>
             <label>Message: $message</label><br>
             </form>";
             
             $header = "From:info@alogroups.com \r\n";
             $header .= "Cc:natarajanaloinfotech@gmail.com \r\n";
             $header .= "MIME-Version: 1.0\r\n";
             $header .= "Content-type: text/html\r\n";
             
             $retval = mail ($to,$subject,$message,$header);
            
             
             if( $retval == true ) {
                 echo "<script>window.location.href='01_contact.php?success=1'</script>";
                 header("Location:contact.php");
             }else {
               echo "<script>window.location.href='01_contact.php?failed=1'</script>";
               header("Location:careers.php");
             }
        }
         
      ?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<title>Alo Infotech</title>
<?php include 'common-files/head-link.php'; ?>
</head>
<style>

.about-banner {
  background: url(assets/images/banner_alo.jpg) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 300px;
}

@media (max-width: 768px) {
 
 #cssmenu {
     display: flex;
     padding: 0px;
   }
}
</style>

<body>

<?php include 'common-files/head.php'; ?>

    
<section class="about-banner">
      <div class="w3l-breadcrumb">
            <div class="container">
                <h3 class="inner-text-title  font-weight-bold mb-2">Grow with Alo</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <!-- <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"> -->
                    <!-- <li><a href="index.html">Development</a></li> -->
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"> </span>Contact</li>
                    
                </ul>
            </div>
        </div> 
    </section>
    <!-- //inner banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
    <!-- contact -->
    <section class="w3l-contact" id="contact">
        <div class="container py-md-5 py-4 mb-5">
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-5 contact-left">
                        <h3 class="font-weight-bold mb-md-5 mb-4">Get in touch with us</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>Chettikulam Junction, Hindu College Road,
                                     Chetti Kulam, Chenthooran Nagar, Nagercoil-1.
                            </p>
                                <!-- Office: +91 88255 74979<br>
                                 HR: +91 80989 51441 -->
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+91-7395850903" style="color: #3B9AD9;">7395850903 </a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:Alogroupspvtltd@gmail.com" class="mail" style="color: #3B9AD9;">contact@alogroups.com</a></p>
                                </div>
                            </div>
                            <!-- <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-headphones"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@support.com</a></p>
                                </div> 
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-7 mt-md-0 mt-4">
                        <div class="map-iframe">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7898.681656343547!2d77.436268!3d8.168376!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m0!4m5!1s0x3b04f1405923e1fb%3A0xdded763ce70bbd4d!2sALO%20GROUPS%20(Alo%20info-tech)%2C%20oppostile%20to%20kottar%20bus%20stop%2C%20Kottar%2C%20Nagercoil%2C%20Tamil%20Nadu%20629001!3m2!1d8.1711067!2d77.43769259999999!5e0!3m2!1sen!2sin!4v1646035468653!5m2!1sen!2sin"
                                width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <!-- contact form -->
                <div class="contact-form-sec pt-5 mt-md-5">
                    <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4" style="max-width:600px">
                        <h3 class="title-style">We will Answer all your <span style="color: #1471AF">Questions</span></h3>
                    </div>
                    <div class="row contact-block align-items-center">
                        <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
                            <form action="" method="post" name="form" class="signin-form" autocomplete="off">
                                <div class="input-grids">
                                    <input type="text" name="name"  placeholder="Your Name*"
                                        class="contact-input" required onkeydown="return /[a-z]/i.test(event.key)"/>
                                    <input type="email" name="email"  placeholder="Your Email*"
                                        class="contact-input" required  onblur="validate()" id="Email" />
                                        <div id="div2"></div> <br>
                                    <input type="text" name="subject"  placeholder="Subject*"
                                        class="contact-input" required />
                                </div>
                                <div class="form-input">
                                    <textarea name="message" placeholder="Type your message here*"
                                        required></textarea>
                                </div>
                                <button name="submit" type="submit" class="btn btn-style mt-sm-3">Send Message</button>
                            </form>

                            <?php
                                if(isset($_REQUEST['success']))
                                {
                                    ?>
                                    <div class="alert">
                                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                  <strong>Successful!</strong> Form submitted Successfully                                </div>
                               
                                    <?php
                                }
                                ?>
                                
                                <?php
                                if(isset($_REQUEST['failed']))
                                {
                                    ?>
                                    <div class="alert">
                                  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                  <strong>failed!</strong> Form submitted failed
                                </div>
                               
                                    <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
                <!-- //contact form -->
            </div>
        </div>
    </section>
    <!-- //contact -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
    
    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

       
function validate()
            {
              
                var Email = document.getElementById("Email").value;
                
                var patcheck = new RegExp("^[a-z0-9]");
                
                if(Email.indexOf("@")> -1)
                {
                    document.getElementById("div2").innerHTML="";
                }
                 else
                {
                    document.getElementById("div2").innerHTML="Enter the correct email address";
                    document.getElementById("div2").style.color="Red";
                    
                }

              }


        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {
            // Now to start autoTyping just call the autoType function with the 
            // class of outer div
            // The second paramter is the speed between each letter is typed.   
            autoType(".type-js", 200);
        });
    </script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>



<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/06-04-2021/industries-liberty-demo_Free/1450891409/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 18:40:44 GMT -->














<?php include 'common-files/footer.php'; ?>

  <script type="text/javascript" src="cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>
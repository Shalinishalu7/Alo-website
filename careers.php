<!-- 
    //     if(isset($_POST['submit']))
    //     {
           
    //         $to = "aloinfotechpvtltd@gmail.com";
    //          $name = $_POST['name'];
    //          $contactnumber = $_POST['txtPhoneNo'];
    //          $email = $_POST['email'];
    //          $position =  $_POST['position'];
    //          $experience =  $_POST['experience'];
    //         //  $fileName=  $_FILES['file']['name'];
             
    //          $message = $_POST['message'];
    //          $message = "<form>
    //          <label>Name: $name</label><br>
    //          <label>ContactNumber: $txtPhoneNo</label><br>
    //          <label>Email: $email</label><br>
    //          <label>Position: $position</label><br>
    //          <label>Experience: $experience</label><br>

    //          </form>";
    //         //  <label>FileName: $file</label><br>
                                                                                                                               
    //          $header = "From:info@alogroups.com \r\n";
    //          $header .= "Cc:natarajanaloinfotech@gmail.com \r\n";
    //          $header .= "MIME-Version: 1.0\r\n";
    //          $header .= "Content-type: text/html\r\n";
             
    //          $retval = mail ($to,$subject,$message,$header);
            
             
    //          if( $retval == true ) {
    //              echo "<script>window.location.href='careers.php?success=1'</script>";
    //              header("Location:careers.php");
    //          }else {  
    //            echo "<script>window.location.href='careers.php?failed=1'</script>";
    //            header("Location:contact.php");
    //          }
    //     } -->
         
    <?php
    $postData = $uploadedFile = $statusMsg = '';
    $msgClass = 'errordiv';
    if(isset($_POST['submit'])){
        // Get the submitted form data
        $postData = $_POST;
        $email = $_POST['email'];
        $contactnumber = $_POST['txtPhoneNo'];
        $name = $_POST['name'];
        $position =  $_POST['position'];
        $experience =  $_POST['experience'];
        
                 
                 
                //  $fileName=  
        
        // Check whether submitted data is not empty
        if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
            
            // Validate email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $statusMsg = 'Please enter your valid email.';
            }else{
                $uploadStatus = 1;
                
                // Upload attachment file
                if(!empty($_FILES['file']['name'])){
                    
                    // File path config
                    $targetDir = "uploads/";
                    $fileName = basename($_FILES['file']['name']);
                    $targetFilePath = $targetDir . $fileName;
                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    
                    // Allow certain file formats
                    $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                    if(in_array($fileType, $allowTypes)){
                        // Upload file to the server
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                            $uploadedFile = $targetFilePath;
                        }else{
                            $uploadStatus = 0;
                            $statusMsg = "Sorry, there was an error uploading your file.";
                        }
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                    }
                }
                
                if($uploadStatus == 1){
                    
                    // Recipient
                    $toEmail = 'thirualogroups@gmail.com';
    
                    // Sender
                    $from = 'info@alogroups.com';
                    $fromName = 'Alogroups';
                    
                    // Subject
                    $emailSubject = 'Job Request Submitted by '.$name;
                    
                    // Message 
                    $htmlContent = '<h2>Contact Request Submitted</h2>
                        <p><b>Name:</b> '.$name.'</p>
                        <p><b>Email:</b> '.$email.'</p>
                        <p><b>Phone Number:</b> '.$contactnumber.'</p>
                        <p><b>Position:</b> '.$position.'</p>
                        <p><b>Experience:</b> '.$experience.'</p>';
                    
                    // Header for sender info
                    $headers = "From: $fromName"." <".$from.">";
    
                    if(!empty($uploadedFile) && file_exists($uploadedFile)){
                        
                        // Boundary 
                        $semi_rand = md5(time()); 
                        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                        
                        // Headers for attachment 
                        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                        
                        // Multipart boundary 
                        $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                        
                        // Preparing attachment
                        if(is_file($uploadedFile)){
                            $message .= "--{$mime_boundary}\n";
                            $fp =    @fopen($uploadedFile,"rb");
                            $data =  @fread($fp,filesize($uploadedFile));
                            @fclose($fp);
                            $data = chunk_split(base64_encode($data));
                            $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                            "Content-Description: ".basename($uploadedFile)."\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                        }
                        
                        $message .= "--{$mime_boundary}--";
                        $returnpath = "-f" . $email;
                        
                        // Send email
                        $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                        
                        // Delete attachment file from the server
                        @unlink($uploadedFile);
                    }else{
                         // Set content-type header for sending HTML email
                        $headers .= "\r\n". "MIME-Version: 1.0";
                        $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                        
                        // Send email
                        $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                    }
                    
                    // If mail sent
                    if($mail){
                        $statusMsg = 'Your Job request has been submitted successfully !';
                        $msgClass = 'succdiv';
                        
                        $postData = '';
                    }else{
                        $statusMsg = 'Your Job request submission failed, please try again.';
                    }
                }
            }
        }else{
            $statusMsg = 'Please fill all the fields.';
        }
    }
    ?>
<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <title>Alo Infotech</title>
    <?php include 'common-files/head-link.php'; ?>


    <style>
    input[type=text],
    input[type=password],
    input[type=file],
    input[type=number] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .about-banner {
        background: url(assets/images/banner_alo.jpg) no-repeat center;

        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        min-height: 300px;
    }

    select {

        /* styling */
        background-color: white;
        /* border: thin solid blue; */
        border-radius: 4px;
        display: inline-block;
        width: -webkit-fill-available;
        border: none;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        font: inherit;
        line-height: 1.5em;
        padding: 0.5em 3.5em 0.5em 1em;

        /* reset */

        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;



        width: 100%;
        padding: 15px;
        /* margin: 5px 0 22px 0; */
        display: inline-block;
        border: none;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 4px rgb(0 0 0 / 10%);
        border-radius: 10px;

    }

    @media (max-width: 768px) {
 
  #cssmenu {
      display: flex;
      padding: 0px;
    }
}

    /* arrows */

    select.classic {
        background-image:
            linear-gradient(45deg, transparent 50%, blue 50%),
            linear-gradient(135deg, blue 50%, transparent 50%),
            linear-gradient(to right, skyblue, skyblue);
        background-position:
            calc(100% - 20px) calc(1.5em + 2px),
            calc(100% - 15px) calc(1.5em + 2px),
            100% 0;
        background-size:
            9px 7px,
            6px 9px,
            2.5em 3.5em;
        background-repeat: no-repeat;
    }

    select.classic:focus {
        background-image:
            linear-gradient(45deg, white 50%, transparent 50%),
            linear-gradient(135deg, transparent 50%, white 50%),
            linear-gradient(to right, gray, gray);
        background-position: calc(100% - 15px) 1.5em, calc(100% - 20px) 1.5em, 100% 0;
        background-size: 5px 5px, 5px 5px, 2.5em 3.5em;
        background-repeat: no-repeat;
        border-color: grey;
        outline: 0;
    }

    .contact-block input,
    .contact-block textarea {

        box-shadow: 0px 4px 4px rgb(0 0 0 / 10%);
    }
    </style>

</head>



<body>
    <?php include 'common-files/head.php'; ?>






    <!-- inner banner -->
    <section class="about-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h3 class="inner-text-title  font-weight-bold mb-2">Grow with Alo</h3>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Careers</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>



    <section class="w3l-aboutblock">
        <div class="container pb-md-5 pb-sm-4">

            <div class="row">
                <div class="col-lg-6 left-wthree-img mt-lg-0 mt-5 order-lg-first order-last mb-3">
                    <img class="img-fluid img-responsive mt-4" src="assets\images\careers.jpg" alt=" ">
                </div>
                <div class="col-lg-6 about-right-faq align-self pl-lg-5 mt-xl-4 order-lg-last order-first">
                    <h3 class="title-style text-center" style="font-size: 31px;">Send Your <span> Resume</span></h3>
                    <div class="contact-form-sec">
                        <!-- <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4" style="max-width:600px">
                        <h3 class="title-style">We will Answer all your <span style="color: #1471AF">Questions</span></h3>
                    </div> -->
                        <div class="row contact-block align-items-center">
                            <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
                                <form action="" method="post" name="form" class="signin-form"
                                    autocomplete="off">
                                    <div class="input-grids">
                                        <input type="text" placeholder="Name" name="name" id="name" required
                                            onkeydown="return /[a-z]/i.test(event.key)">
                                        <input type="number" placeholder="Contact Number" id="txtPhoneNo"
                                            name="txtPhoneNo" maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            name="phone" maxlength="10">
                                        <input type="text" placeholder="Email" name="email" onblur="validate()"
                                            id="Email">
                                        <div id="div2" style="padding: 0 15px 10px;"></div>
                                        <p id="div4" style="font-size: 13px;padding: 0px 19px 0px;">
                                        </p>
                                        <!-- <div id="div4"></div> <br> -->
                                        <!-- <input type="text" for="classic" id="classic" class="form-select" placeholder="Position Applying For" name="Position Applying For" required> -->
                                        <select class="classic" placeholder="Position Applying For" value="<?php echo !empty($postData['position'])?$postData['position']:''; ?>" name="position">
                                            <option>Position Applying For</option>
                                            <option value="Web Designing">Web Designing</option>
                                            <option value="Php">Php</option>
                                            <option value="Angular">Angular</option>
                                            <option value="Node.js">Node.js</option>
                                            <option value="React.js">React.js</option>
                                            <option value="NestJS">NestJS</option>
                                            <option value=".Net">.Net</option>
                                            <option value="Flutter">Flutter</option>
                                            <option value="Android.java">Android.java</option>
                                            <option value="UI/UX Design">UI/UX Design</option>
                                            <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                                            <option value="Human Resource">Human Resource</option>
                                        </select>
                                        <select class="classic mt-3" placeholder="Position Applying For"
                                        value="<?php echo !empty($postData['experience'])?$postData['experience']:''; ?>" name="experience">
                                            <option value="Experience">Experience</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="More than 1 Year">More than 1 Year</option>
                                        </select>


                                        <!-- <input type="text" list="apply" class="form-select" placeholder="Experience" name="Experience" id="experience" required>
                                          <datalist id="apply">
                                            <option>Fresher</option>
                                            <option>More than 1 Year</option>
                                          </datalist>                                    -->
                                        <input type="file" class="mt-3" autocomplete="off" name="file"
                                            placeholder="Upload Resume" id="file" required>
                                    </div>

                                    <!-- <div class="form-input">
                                    <textarea name="message" placeholder="Type your message here*"
                                        required></textarea>
                                </div> -->
                                    <button name="submit" type="submit" class="btn btn-style mt-sm-3">Send
                                        Message</button>
                                </form>

                                <?php
                                if(isset($_REQUEST['success']))
                                {
                                    ?>
                                <div class="alert">
                                    <span class="closebtn"
                                        onclick="this.parentElement.style.display='none';">&times;</span>
                                    <strong>Successful!</strong> Form submitted Successfully
                                </div>

                                <?php
                                }
                                ?>

                                <?php
                                if(isset($_REQUEST['failed']))
                                {
                                    ?>
                                <div class="alert">
                                    <span class="closebtn"
                                        onclick="this.parentElement.style.display='none';">&times;</span>
                                    <strong>failed!</strong> Form submitted failed
                                </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <script>
    function validate() {

        var Email = document.getElementById("Email").value;

        var patcheck = new RegExp("^[a-z0-9]");

        if (Email.indexOf("@") > -1) {
            document.getElementById("div2").innerHTML = "";
        } else {
            document.getElementById("div2").innerHTML = "Enter the correct email address";
            document.getElementById("div2").style.color = "Red";

        }

    }




    // function validateEmail() {


    // var email = document.getElementById('txtEmail');

    // if (email.value == "") {
    //     alert( "  Please enter your Email Id  ");
    // }
    // else if (!/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)) {
    //       document.getElementById("div4").innerHTML = "Enter the valid Email Id";
    //       document.getElementById("div4").style.color = "Red";
    //       return true;
    //     } else {
    //       document.getElementById("div4").innerHTML = "";
    //       return false;
    //     }

    // }
    </script>







    <?php include 'common-files/footer.php'; ?>
</body>
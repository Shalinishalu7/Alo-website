<!-- <?php
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
                 echo "<script>window.location.href='careers.php?success=1'</script>";
                 header("Location:careers.php");
             }else {  
               echo "<script>window.location.href='careers.php?failed=1'</script>";
               header("Location:careers.php");
             }
        }
         
      ?> -->
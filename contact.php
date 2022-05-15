<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Contact Page</title>
</head>
<?php include 'header.php' ?>
<?php include 'connection.php' ?>

<body>
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
<div class="contact-form">
<div class="row">
<div class="col-md-6 text-center">
<form action="" method="post">
<label for="name">Name:</label><br>
<input type="text"name="name" id="name"><br>
<label for="mail">Mail:</label><br>
<input type="text" name="mail" id="mail"><br>
<label for="subject">Subject:</label><br>
<input type="text" name="subject" id="subject"><br>
<label for="message">Message:</label><br>
<textarea name="message" id="message"></textarea><br><br>
<input type="submit" value="Send" class="sendbutton">
</form>
</div>
<div class="vr"></div>
        <div class="col-md-6 text-center">
            <ul class="list-unstyled mb-0" style="margin-top:50px;">
            <svg style="color:#7b68ee" xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
             <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
             </svg>
                    <p>Izmir,Turkey</p>
                </li>

                <li><i style="color:#7b68ee" class="fa fa-phone mt-4 fa-2x"></i>
                    <p>0(212)00000</p>
                </li>

                <li><i style="color:#7b68ee" class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>onlinebookshopping@outlook.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
</div>
<!--Section: Contact v.2-->
<?php
if (isset($_POST['name']) and isset($_POST['mail']) and isset($_POST['subject']) and isset($_POST['message'])) { 
    $query = $db->prepare('insert into contact values (NULL,"' . $_POST['name'] . '","' . $_POST['email'] . '","' . $_POST['subject'] . '","' . $_POST['message'] . '")');
        $query->execute();
        echo"<div class=messagesaved>Your message saved.<br> </div>";
    }
    else{
         echo "<div class=messagenot>Please write your mail adress and message.<br> </div>";
    }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


$mail = new PHPMailer(true);
try {
 //Server settings
 $mail->CharSet = 'UTF-8';
 $mail->SMTPDebug = 0; 
 $mail->isSMTP(); 
 $mail->Host = '';
 $mail->SMTPAuth = true; 
 $mail->Username = ''; 
 $mail->Password = ''; 
 $mail->SMTPSecure = ''; 
 $mail->Port = 587; 
 $mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);

 //Al覺c覺lar
 $mail->setfrom('onlinebookshopping@outlook.com', 'Contact Form');
 $mail->addAddress($_POST['mail']);
 $mail->addReplyTo($_POST['mail'], $_POST['name']);
 //襤癟erik
 $mail->isHTML(true);
 $mail->Subject = 'Contact Form.';
 $mail->Body = $_POST['message'];

 $mail->send();
 echo "<div class=messagedelivery> Message delivery ".$_POST['name']."<br> </div>";
} catch (Exception $e) {
 echo " ";
}

?>


</body>
<style>

    .contact-form input {
        text-align:center;
        width: 300px;
        border-radius: 5px;
        border-width: 2px;
        border-color: #7b68ee;
    }

    .contact-form label {
         text-align:center;
    }

    .sendbutton {
        background-color: #7b68ee;
        border-radius: 5px;
        border-style: none;
        height: 35px;
        width:70px !important;
    }
    .sendbutton:hover{
        background-color: #D8BFD8;
    }
    #message{
      width: 500px;
      height:150px;
    border-radius: 5px;
    border-width: 2px;
    border-color: #7b68ee;
    }
    .messagedelivery {
      margin-left: 18%;
      color:#008000;
    }
    .messagesaved {
      margin-left: 18%;
      color:#008000;    
    }
    .messagenot{
      margin-left: 15%;
      color:#ff0000;
    }
    .vr {
  border-left: 3px solid #7b68ee;
  height: 400px;
  position: absolute;
  left: 60%;
  margin-left: -3px;
}
body{
    background-color:#f2f3f7;
}
</style>
<?php include 'footer.php' ?>
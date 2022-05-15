<?php
use PHPMailer\PHPMailer\PHPMailer;


require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['subscribe'])){
    
    $email = $_POST['email'];
    $subject = 'Subscribed';
    
    $description = 'I have subscribed to your website Prefessional Assignment Bay. share with me your updates, offers and promotions';
    





    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'professionalassignmentbay5@gmail.com';
        $mail->Password = '000111omera';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';


        $mail->setFrom('professionalassignmentbay5@gmail.com');
        $mail->addAddress('professionalassignmentbay5@gmail.com');
        $mail->isHTML(true);
        $mail->Subject ='Message Recieved (contact Page)';
        $mail->Body = "<h3>Email : $email <br>Subject: $subject <br>Description: $description</h3>";
        

        $mail->send();
        $alert = '<div class="alert-success">
                   <span> Subscribed</span>

                </div>';

    } catch (Exception $e){
        $alert = '<div class="alert-error">
                    <span>'.$e->getMessage().'</span>
                  </div>';
    }
}





?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
        }
</head>
<body>
<p><b>Subscribed</b></p>
<a href="index.html"> Return Home</a>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
           Swal.fire({
                       
                       icon: 'success',
                       title: 'Subscribed',
                       showConfirmButton: false,
                       timer: 1500
})
      </script>
</body>
</html>

?>
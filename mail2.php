<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['subject'];
    $message = $_POST['message'];

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
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Phone: $phone <br>Message: $message</h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                   <span> Message sent! Thank you for contacting us.</span>

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
<p><b>Submitted successfully</b></p>
<a href="index.html"> Return Home</a>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript">
           Swal.fire({
                       
                       icon: 'success',
                       title: 'Sent Successfully',
                       showConfirmButton: false,
                       timer: 1500
})
      </script>
</body>
</html>
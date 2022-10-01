<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'phpmailer/PHPMailerAutoload.php';
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='sdpfooddelivery2022@gmail.com';
    $mail->Password='sfcigwyrmldvajag';

    $mail->setFrom('sdpfooddelivery2022@gmail.com', 'Panchee School Of Music');
    $mail->addAddress('jeetparmar7223@gmail.com');
    $mail->addReplyTo('sdpfooddelivery2022@gmail.com');

    $mail->isHTML(true);
    $html_content = "<html>

<body style='padding: 10px;background-color: #f0f6fb !important;'>
    <div style='background: #fff !important;margin: auto;width: 80%;padding: 1em' >
        <h1 style='color: #34a853;text-align: center; font-weight: bold'>Contact Form Enquiry</h1>
        <br>
       <div style='text-align: center'>
        <h5><strong>Name</strong> :- $name</h5>
        <h5><strong>Phone Number</strong> :- $phone</h5>
        <h5><strong>Email Address</strong> :- $email</h5>
        <div> $message</div>
    </div>
    </div>
</body>
</html>";
    $mail->Subject="Contact Panchee School Of Music | ".$name;
    $mail->Body=$html_content;

    if ($mail->send()){
        header("Location:contact.php?message=success");
        exit();
    }else{
        header("Location:contact.php?message=error");
        exit();
    }
}else{

    header("Location:contact.php?message=error");
    exit();
}


?>
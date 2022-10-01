<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'phpmailer/PHPMailerAutoload.php';
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $day_slot = $_REQUEST['day_slot'];
    $day_slot= strtotime($day_slot);
    $day_slot = date('M-Y-d', $day_slot);
    $category = $_REQUEST['category'];
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='sdpfooddelivery2022@gmail.com';
    $mail->Password='ss';

    $mail->setFrom('sdpfooddelivery2022@gmail.com', 'Panchee School Of Music');
    $mail->addAddress('jeetparmar7223@gmail.com');
    $mail->addReplyTo('sdpfooddelivery2022@gmail.com');

    $mail->isHTML(true);
    $html_content = "<html>

<body style='padding: 10px;background-color: #f0f6fb !important;'>
    <div style='background: #fff !important;margin: auto;width: 80%;padding: 1em' >
        <h1 style='color: #34a853;text-align: center; font-weight: bold'>$name applied for free trail</h1>
        <br>
       <div style='text-align: center'>
        <h5><strong>Name</strong> :- $name</h5>
        <h5><strong>Phone Number</strong> :- $phone</h5>
        <h5><strong>Preferred Day and Slot</strong> :- $day_slot</h5>
        <h5><strong>Category</strong> :- $category</h5>
    </div>
    </div>
</body>
</html>";
    $mail->Subject="Free Trial Request By ".$name;
    $mail->Body=$html_content;

    if ($mail->send()){
        header("Location:book-free.php?message=success");
        exit();
    }else{
        header("Location:book-free.php?message=error");
        exit();
    }
}else{

    header("Location:book-free.php?message=error");
    exit();
}


?>
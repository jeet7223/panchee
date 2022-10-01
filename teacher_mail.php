<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'phpmailer/PHPMailerAutoload.php';
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $experience = $_REQUEST['experience'];
    $title = $_REQUEST['title'];
    $inst_course = $_REQUEST['inst_course'];
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
        <h1 style='color: #34a853;text-align: center; font-weight: bold'>Become a Teacher</h1>
        <br>
       <div style='text-align: center'>
        <h5><strong>Name</strong> :- $name</h5>
        <h5><strong>Phone Number</strong> :- $phone</h5>
        <h5><strong>Email Address</strong> :- $email</h5>
        <h5><strong>Playing Experience (in years)</strong> :- $experience</h5>
        <h5><strong>Video Link of Showcasing Your Skill</strong> :- $title</h5>
        <h5><strong>Instruments / Courses You Can Teach</strong> :- $inst_course</h5>
    </div>
    </div>
</body>
</html>";
    $mail->Subject=$name." applied for become as teacher";
    $mail->Body=$html_content;

    if ($mail->send()){
        header("Location:teacher.php?message=success");
        exit();
    }else{
        header("Location:teacher.php?message=error");
        exit();
    }
}else{

    header("Location:teacher.php?message=error");
    exit();
}


?>
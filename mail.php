<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $cb1 = $_POST['cb1'];
    $cb2 = $_POST['cb2'];
    $cb3 = $_POST['cb3'];
    $cb4 = $_POST['cb4'];
    $cb5 = $_POST['cb5'];
    $cb6 = $_POST['cb6'];
    $cb7 = $_POST['cb7'];
    $cb8 = $_POST['cb8'];
    $cb9 = $_POST['cb9'];
    $cb10 = $_POST['cb10'];
    $cb11 = $_POST['cb11'];
    $cb12 = $_POST['cb12'];
    $cb13 = $_POST['cb13'];
    $cb14 = $_POST['cb14'];
    $cb15 = $_POST['cb15'];

    $formcontent=" From: $name \n Phone: $phone \n Message: $message 
    \n ADHD: $cb1 \n ADDICTION: $cb2 \n AUTISM: $cb3
    \n PAIN: $cb4 \n ANGER: $cb5 \n CHRONIC FATIGUE: $cb6
    \n BRAIN INJURY: $cb7 \n DEPRESSION: $cb8 \n PTSD: $cb9
    \n BRAIN: $cb10 \n Fibromyalgia: $cb11 \n Performance Enhancement: $cb12
    \n INSOMNIA: $cb13 \n MIGRAINE: $cb14 \n MEMORY ISSUES: $cb15"
    ;
    $recipient = "localreadymaid@gmail.com";

    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "<script>
    window.location.href='contact.html';
    </script>";
    echo "<script>" .formSubmit() ."</script>"
?>


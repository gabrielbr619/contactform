<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "gabriel.lara@refratech.com.br";
    $headers = "De: ".$mailFrom;
    $txt = "Você recebeu um e-mail de ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Localização: index.php?mailsend");
}

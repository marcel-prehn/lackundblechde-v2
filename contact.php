<?php
if(isset($_POST['email'])) {
    $receiver = "guido.wagner@lackundblech.de";
    $subject = "LackundBlech.de Kontaktformular";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $email_message = "Neue Nachricht von LackundBlech.de:\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href", "'", ";");
      return str_replace($bad, "", $string);
    }
 
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email-Adresse: " . clean_string($email) . "\n";
    $email_message .= "Nachricht: \n" . clean_string($message);
    $headers = 'From: '.$email."\r\n".
            'Reply-To: '.$email."\r\n" .
            'X-Mailer: PHP/' . phpversion();

    mail($receiver, $subject, $email_message, $headers);
    header("Location: index.html#message-send");
}
?>
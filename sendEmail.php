<?php 
session_start();
require_once 'libs/phpmailer/PHPMailerAutoload.php';
require_once 'helpers/security.php';
  
// Creates an array which will store any errors that occur during form entry
$errors = [];

// Get POSTED values from the contact form and insert them into an array with key/value pairs
if (isset($_POST['name'], $_POST['subject'], $_POST['email'], $_POST['message'])){
    $requiredFields = [
        'name' => sanitizeString($_POST['name']),
        'subject' => sanitizeString($_POST['subject']),
        'email' => sanitizeString($_POST['email']),
        'message' => sanitizeString($_POST['message'])
    ];
    //Loops through the posted values array to ensure all the elements of the form have been filled in.
    //If an element is not filled in, the script appends an error to the errors array.
    foreach ($requiredFields as $field => $data){
        if(empty($data)){
            $errors[] = 'The ' . $field . ' field is required';
        } 
    }
    
    // Uses the validEmail function to check for the validity of an email address
    if (empty($errors) && !validEmail($requiredFields['email'])){
        $errors[] = 'You must enter a valid email';
    }
    //If there are no errors on the form, then begin to build the message send object.
    if (empty($errors)){
        $mail = new PHPMailer;
        
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        
        
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        // Indicates where the email will be sent from.
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'chalotrustschool04@gmail.com';
        $mail->Password = 'jenny1964';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->isHTML();
        // Formats the message and appends information passed on by the user
        $mail->Subject = $requiredFields['subject'];
        $mail->Body = 'From: ' . $requiredFields['name'] . ' (' . $requiredFields['email'] . ')<p>' . $requiredFields['message'] . '</p>';
        
        $mail->FromName = $requiredFields['name'];
        
        $mail->AddReplyTo($requiredFields['email'], $requiredFields['name']);
        //Specifies where the email will be sent
        $mail->AddAddress('info@chalotrustschool.com', 'Chalo Trust School');
        
        // Checks for content in the invisible url input box. if data is entered, then the message is likely spam.  
        if(isset($_POST['url']) && $_POST['url'] == ''){
     // then send the form to your email
              if ($mail->send()){
                header('Location: contact.php?success');
                die();
            } else {
                $errors[] = 'Sorry, We could not send the email. Please try again later';
            } 
        } 
        
        
    }
} else {
    $errors[] = "something went wrong";
}


function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

$_SESSION['errors'] = $errors;
$_SESSION['fields'] = $requiredFields;
 header('Location: contact.php');
?>
<html>
<head>


 <script src="ddmenu/ddmenu.js" type="text/javascript"></script>
<style>
section{
	width: 100%;
	
	float: left;

	padding: 20px;
	background-color: white;
	
	
}
body
{
background-color: #4D739A;
}

</style>

</head>
<body>
<?php
include 'menu.html';?>


<section>


<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "contact@theresulthub.com";
     
    $email_subject = "website query";
     
     
  
     
  
  
	
	
	
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
   
	
	
    $comments = $_POST['comments']; // required
     
 
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Query: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own success html below -->
 
Thank you for your comment :).
 
<?php
}
die();
?>


</section>
</body>

</html>
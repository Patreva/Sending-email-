<?php
//Enter email configured in the sendmail.ini file

 
 //mail('username@gmail.com', 'Testmail', 'Sending a test mail using localhost', 'From:username@gmail.com');

 $emailTo="username@gmail.com";
 $subject="Testmail";
 $body="Sending a test mail using localhost";
 $headers="From:username@gmail.com";
 if (mail($emailTo, $subject, $body, $headers)) {
 	echo "Mail sent succesfully";

 }else{
 	echo "mail not sent";
 }
/*Google blocks the sign in done in the local server so you need to allow the access to less secure app.and then you receive the email.*/

/*Remember to do the configuration listed in the Read.txt file and Before doing anything stop and restart apache to get the new configurations*/
?>
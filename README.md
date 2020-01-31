# Sending-email-
Sending emails in localhost

Steps sending emails in the localhost

1.Install xampp 3.2.1
2.Inside your xampp folder locate your php folder and inside this php folder locate php.ini file. 
3.Open that php.ini file with your editor.
4.In line number 1142
5.Remove the semicolon ; which is just before the sentence begin which means to uncomment it.
6.In line number 1145
7.Add the semicolon ; just before the sentence begin which means to comment it.
8.Save the file.
9.Inside the xampp folder locate sendmail folder, In that folder locate a sendmail.ini 
10.Open that sendmail.ini with your editor.
11.In line 14 instead of (smtp_server=smtp.domain.com) incase you have a gmail or yahoo add smtp server of the respective mail company.eg gmail is (smtp_server=smtp.gmail.com)
12.In line 18 add the port (smtp_port=587)
13.In line 46 and 47 add your gmail username and password eg
auth_username=username@gmail.com
auth_password=1234
14.Save the file

Note: Before doing anything stop and restart apache to get the new configurations


Note: Its normal not to receive email with localhost due to spam filters where you can also check the email on the spams folder



For sending emails in your online server

1.Contact your web hosting company for email configuration

# php-myq_liftmaster-cli
MyQ Liftmaster/Chamberlain garage door command line interface, written in php, utilizing libraries written by angrychimp.

Command line control of MyQ Liftmaster/Chamberlain garage door openers.
See angrychimp/php-myq-liftmaster for more information about the original code.  None of angrychimp's libraries have been changed.

Edit the MyQ.ini file to include your email address and password, as used to sign in to MyQ:
```
username = johnsmith@gmail.com
password = password123
```
Execute the command line with a single parameter:  open, close or status
```
php MyQ-cli.php <open|close|status> 
```
The close parameter closes the door and yields an output such as:
```
php MyQ-cli.php close 

08:04:27 Request: Login
08:04:34 Status: door open
08:04:34 Request: close
08:04:46 Status: door closing
08:05:01 Status: door closed
```
The status parameter yields an output such as:
```
php MyQ-cli.php status 

06:35:51 Request: Login
06:35:57 Request: status
06:35:57 Status: door closed
```

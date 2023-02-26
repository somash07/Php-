<?php
/*Cookies are used to track the users.
used to show content according to behaviour.
Cookie|Session
->cookies are stored in browser,insensitive
->sesssion are sensitive and are stored in server.
syntax: 
setcookie("name","value",time()+expiry time in sec,domain in which we want to use cookie or / to use cookie in whole website)
ban unban
*/
setcookie("category","books",time()+86400,"/");
echo "cookie is set<br>"; 

?>
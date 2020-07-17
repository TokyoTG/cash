
 <?php
 $servername = "us-cdbr-east-02.cleardb.com";
 $username = "bc8a2f7337a29a";
 $password = "e2ce351c";
 $db = 'heroku_5a7208e42785b5c';
 
 $conn = new mysqli($servername, $username, $password, $db);
 
 $conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);
 
 ?>


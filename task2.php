<?php
   if( $_GET["name"] || $_GET["age"] ) {
      echo "Welcome, ". $_GET['name']. ".<br />";
      echo "You are authorized!";      
      exit();
   }
?>
<html>
 <head>
  <title>WEB LR2 LOHVYNOVYCH</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 </head>
 <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" /> <br />
         Age: <input type = "text" name = "age" /><br />
         Phone: <input type = "text" name = "age" /><br />
         Email: <input type = "text" name = "age" /><br />
         <input type = "submit" />
      </form>
      
   </body>
</html>

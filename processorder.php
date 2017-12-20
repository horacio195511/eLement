<?php
require('header.php');
?>

<div class="main">
  <?php
  /*
  In this php script, the client's order data will be examine first, then store into
  MySQL, if the storation is succeed a congradulation page will show up to acknowledge
  the clients.
  */
  /*Table Data:
  Basic:name,email,tel,address
  Order:productname,amount,color,material,deadline,STlfile
        ,ps
  */
 $sqlname=client;
 $password=1234;   //Hey!set new password and user here 
 /*store all the data transmit from client through _POST...*/
 $name=$_POST[name];
 $email=$_POST[email];
 $tel=$_POST[tel];
 $address=$_POST[address];
 $productname=$_POST[productname];
 $amount=$_POST[amount];
 $color=$_POST[color];
 $material=$_POST[material];
 $deadline=$_POST[deadline];
 //how to store binary file in PHP???
 $ps=$_POST[ps];
 //start connect SQL db
 $conndb=mysql_connect("localhost","customer",$password);
 $seldb= mysql_select_db(eLement);
 mysql_query("SET NAMES 'utf8'");
 /**Store all the data into SQL**/
 if($conndb || $seldb || /*data storation success*/){ 
       echo 'Your Order Has been Processed';
      $nowtime=date("Y/n/d H:i");
     }
?>
</div>

<?php
require('footer');
?>
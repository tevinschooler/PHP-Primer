<?php include 'includes/header.php'
?>
<?php
  $tile = "Index";

?>
    <!-- basic html -->
<h1> Hello World HTML -PHP Primar </h1>

<br/>


 <?php 
 /*  printing to html using echo */
    echo 'HELLO PHP';
    echo ' <br/>';
    echo 'second line';
    echo ' <br/>';
 ?>

<?php
// delcare variable
  $name= 'tevin schooler';
  $age= 26;
  $address='12 Portmore Main Rd';
  //echo variable
  echo $name;
  echo ' <h1> My Name is:' .$name.' </h1>';
  echo ' <h1> My Age is:' .$age.' </h1>';
  echo " <h1> Name Address is : .$address. </h1>";


?>

<?php
include 'includes/footer.php'
?>

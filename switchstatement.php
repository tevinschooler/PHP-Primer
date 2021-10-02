<?php include 'includes/header.php'
?>
<?php
  $tile = "Switch Statements";

?>
    <h1> switchstatement</h1>

    <?php
$grade ='C';

switch($grade){
    case'A':
        echo'<h2 style ="color: green">You are a SuperStar </h2>';
        break;
    case'B':
        echo '<h2 style ="color: blue"> You Did Well! </h2>';
        break;
    default:
        echo'<h2 style ="color: red"> You have faled......please resit<h2>';
        break;

}

?>
<?php
include 'includes/footer.php'
?>

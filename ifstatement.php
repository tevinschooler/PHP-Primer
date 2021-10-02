<?php include 'includes/header.php'
?>
<?php
  $tile = "If Statements";

?>
    <h3 style=" color: red"> </h3>
    <?php
// an if statment that will carry out an action based on the value of the variable.
echo '<h1> If Statement </h1>';

$grade = 80;
// ==, ===, >,<, <=, >=

if ($grade >= 50){
    echo'<h3 style ="color: green"> YOU HAVE PASSED </H3>';

} else{

    echo'<h3 style ="color: red"> YOU HAVE FAILED </H3>';
}
// if-else if-else
$grade= 'A';
if($grade =='A'){
    echo '<h2 style ="color: green"> you are a superstar! </h2>';
}
elseif($grade=='B'){
    echo '<h2 style ="color: blue"> You Did Well! </h2>';
}
else{
    echo'<h2 style ="color: red"> You have faled......please resit<h2>';
    
}

    ?>
<?php
include 'includes/footer.php'
?>

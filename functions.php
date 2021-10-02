<?php include 'includes/header.php'
?>
<?php
  $tile = "Funcations";

?>
    
    <h1>Functions</h1>

    <?php
// defining a function

function WriteMessage(){
    echo"You are a really nice person have a nice day! <br/>";
}
// calling a function
 WriteMessage();
 echo '<hr/>';
 WriteMessage();
 echo '<hr/>';
 WriteMessage();

function addfuction($num1, $num2){
    $sum= $num1+$num2;
    echo "The sum of $num1 and $num2 is: $sum <br/>";
}

function changeNum(&$num){
    $num = $num+10;
}


function returnProduct($num1, $num2){
    $prod= $num1 * $num2;
    return $prod;
}

$num=500;
addfuction(10, 20);
addfuction(10, $num);


changeNum($num);
echo $num.'<br/>';

$return_vaule= returnProduct(10, 200);
echo $return_vaule. '<br/>';
?>

<?php
include 'includes/footer.php'
?>


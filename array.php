<?php include 'includes/header.php'
?>
<?php
  $tile = "Switch Statements";

?>
    <h1> Arrays</h1>
    <?php
        //a varibale

        $num = 3;

        // an array
        $numbers= array(1,2,3,4,5,6,7,8,9,10,101,45,67,889,900,3456);
// you can access the value in a subscript of the array using the index
        echo $numbers[5];

        echo "<p>  $numbers[9] </P>";
        $size = count($numbers);
        echo "<p> Array numbers is size: $size </p>";

        for($count =0; $count < $size; $count++){

            echo"<p>$numbers[$count] </p>";
        }
    ?>
<?php
include 'includes/footer.php'
?>

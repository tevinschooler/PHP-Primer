<?php include 'includes/header.php'
?>
<?php
  $tile = "While Loop";

?>
    <h1>  while loop  </h1>
    <?php
    //pre condition loop
        $grade=0;
        while($grade <10){
            echo '<p> I AM LESS THAN 10!';
            $grade++;   
                }
        echo '<p>exit loop!</p>';
?>


    <h1> Do-While Loop </h1>

    <?php
    // post-conditon loop
    $grade= 0;
        do{
            echo'<p> I AM DO WHILE LOOP</p>'
        ;  $grade++;} while ($grade < 10);
    ?>

<?php
include 'includes/footer.php'
?>

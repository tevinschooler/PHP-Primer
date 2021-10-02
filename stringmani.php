<?php include 'includes/header.php'
?>
<?php
  $tile = "String Maniulation";

?>
    <h1>Sting Manipulation</h1>
    <P>
     <?php
        $phase1="Students who came late must do extra home work.";
        $phase2=" Students who come early can break for lunch early";
        $name='tevin schooler';
        


        echo $phase1. "" .$phase2; echo '<br/>';
        echo '<br/>';
        echo '<hr/>';


        echo 'Uppcase first letter:'. ucfirst($name).'<br/>';
        echo 'Uppcase first letter of each word:'. ucwords($name).'<br/>';'<br/>';
        echo 'Upper case:'.strtoupper($name).'<br/>';'<br/>';
        echo 'Lower case:'.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String:'.str_repeat('|Print this 10 times|',10) .'<br/>';
        echo 'Repeat String- Nested function:'.strtoupper(str_repeat('A', 5)). '<br/>';
        echo 'Get a substring:'.substr($name,5,10).'<br/>';
        echo 'Get postion of "i":'.strchr($name, 'i').'<br/>';
        // returns Null
        //echo gets postion of string. strpos($combine, 'z').'<br/>';

        echo 'Find Character "n":'.strlen($name). '<br/>';
        echo 'Find Length of String:'.strlen($name). '<br/>';

        echo 'With Trim:'. "A". "B C D". "E". '<br/>';
        echo' Trim spaces on both sides:'. "A". trim("B C D"). "E". '<br/>';
        echo' Trim spaces on both left:'. "A". ltrim("B C D"). "E". '<br/>';
        echo' Trim spaces on both right:'. "A". rtrim("B C D"). "E". '<br/>';

        echo'Replacement String with another:'. str_replace("stand", "sit", $phase1).'<br/>';
     ?> 
    </P>
    
    <?php
include 'includes/footer.php'
?>

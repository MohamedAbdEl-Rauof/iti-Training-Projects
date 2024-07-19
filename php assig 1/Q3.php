<?php 

    $a = '1';             // string "1"
    $b = &$a;            // reference to $a
    $b = "2$b";         // the value of $b is update to "2" concatenated with the current vlaue of $ b (1)

    // $a = '21'    
    // $b = '21'

?>
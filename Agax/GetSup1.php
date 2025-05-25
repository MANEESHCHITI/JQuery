<?php

if(isset($_GET['firstname2']) && isset($_GET['lastname2']))
{
    $firstname3 = $_GET['firstname2'];
    $lastname3 = $_GET['lastname2'];

    
    echo "Your firstname is $firstname3 and lastname is $lastname3.";
}

?>

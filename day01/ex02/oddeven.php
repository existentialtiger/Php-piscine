#!/usr/bin/php
<?php
while(true){
    print("Enter a number: ");
    $num = fgets(STDIN);
    if(feof(STDIN) == TRUE)
    {
        echo"^D\n";
        exit;
    }
    $num = rtrim($num, "\n");
    if (is_numeric($num)) {
        if ($num % 2 == 0) {
            print ("The number $num is even\n");
        }
        else{
            print ("The number $num is odd\n");
        }
    }
    else{
        print ("'$num' is not a number\n");
    }
}
?>
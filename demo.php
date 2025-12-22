<?php
/* Array types:
-Indexed Array
    array("Your Name", 9840051645 , TRUE);

-Associative Array
    array("name"=> "Your Name","phone"=> 9840051645 , "status"=> TRUE);

 */

    $data_arr =   ["name"=> "Your Name","phone"=> 9840051645 , "login_status"=> TRUE];
    foreach($data_arr as $data){
        echo "<br>" . $data;
    }
    echo"<hr>";
    foreach($data_arr as $key => $data){
        echo "<br><strong>" . str_replace("_" , " ", ucfirst($key))  . "</strong>:" . $data;
    }
  


    // => implies, -> tends to, :: Scope Resolution
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
    echo "Hello, World!";
    ?>
    </p>
    <?php 
    $name="Your Name";
    $address="Your Address";
    $email="email@domain.com";
    echo $name . ", " . $address . ", " . $email;

    // Single line comment

    /* Multi-line comment */

    /* Data typing:
-static typing(C, C++ , Java)
-it understands the type while compiling
e.g. int a; char name[10]
-Dynamic typing(PHP, Python, JavaScript)
-it understands the type while interpreting
e.g. var a; $name;
    */

/* 
Data types:
1. Primitive (built-in)
-Number
-String
-Undefined
-Boolean
-Null

2. Non-Primitive (User defined)
-Array
-Object
Note: PHP can hold mix data in an array.
*/

$college = "Padmashree"; //String
$phone = 9840051645; //Number: Int
$cgpa = 3.9; //Number:float
$status = TRUE; //Boolean

// Array of data (array method)  
$profile1 = array("College Name", 9840051645 , TRUE);  //Mix data
// Array of data (array literal)
$profile2 = ["College Name", 9840051645 , FALSE];  //Mix data
// Array of data variables
$profile3 = [$college, $phone, $cgpa, $status];

/*Array check by the Developer
-var_dump(); it shows data and it's types.
-print_r(); it shows data only.
*/

echo"<pre>";
print_r($profile1);
var_dump($profile1);
echo"</pre>";

for($i = 0; $i < count ($profile1); $i++) {
    echo '<br>' . $profile1[$i];
}
//OR
foreach($profile1 as $item){
    echo "<br>" . $item;
}

echo "<hr>" . date(" Y-F-d, H:i:s a l");


?>

    </body>
</html>
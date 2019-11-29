<?php
//Associative Arrays

#Integer Indices 
$array1 = array("Hi", "Hello");
echo $array1[1], "\n"; # ---> Will print "Hello"

#Key Values
$array2 = array("name" => "Rohan", "age" => 15);
echo $array2["name"],"\n"; # ---> Will print "Rohan"


#The function print_r() shpws PHP data, this will work fro complex structures (arrays within arrays)
echo("<pre>\n");
print_r($array2);
echo("\n<pre>\n");
/* will return:

        Array(
            [name] => Rohan
            [age] => 15
        )
*/

#The function var_dump() is more detailed than print_r(), var_dump() tells you the type
#One nice thing about var_dump() is that it prints false (print_r() will not)
var_dump(array2);
/* will return

            array(s) {
                ["name"] =>
                string(5) "Rohan"
                ["age"] =>
                int(2) 15
            }
*/

//Looping through an array

#Clean and nice
foreach($array2 as $k => $v){
    echo "Key = ", $k, " Val=", $v,"\n";
}
/* will return if linear array key mapping will be replaced by the index of the value (sintax is the same )

    Key=name Val=Rohan
    Key=age Val=15
*/

#counted loop
for($i=0; $i < count($array2); $i++) {
    echo "I= ", $i," Val=", $array2[$i], "\n";
}
/* will return

    I=0 Val=Rohan
    I=1 Val=15
*/

?>
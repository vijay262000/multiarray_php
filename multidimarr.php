<?php
echo "welocome multidimentional array in php<br>";

$multidim = array(
            array(2,5,7,8),
            array(7,9,0,1),
            array(2,6,7,2));

//echo var_dump($multidim);
//echo $multidim[0][0];

//printing the contets the two dimentional array

/*for ($i=0; $i < count($multidim); $i++) { 
    echo var_dump($multidim[$i]);
    echo "<br>";    
}
*/
for ($i=0; $i < count($multidim); $i++){
for ($j=0; $j < count($multidim[$i]); $j++) {

    echo $multidim[$i][$j];
    echo " ";

}
    echo "<br>";
}    


?>
<?php
/**
 * Created by PhpStorm.
 * User: raphael.favre
 * Date: 01.12.2018
 * Time: 21:02
 * Title : DemoArrays.php
 */

/* Help:    https://www.w3schools.com/php/php_arrays.asp
            http://php.net/manual/en/function.array.php
*/

//<editor-fold desc="Indexed Array">
// each Element of this array content a name of a Web Browser
$browsers = array('Safari','Edge','Chrome','Firefox');

// assign 'Chrome' to $mostUsedBrowser
$mostUsedBrowser = $browsers[2];

// Replaces 'Edge' with 'Opera'
$browsers[1] = "Opera";
echo $browsers[1]."<br>";

// Loop through an Indexed Array
$arrLength = count($browsers);      // Assign the number of Elements of the Array '$browsers'
$browsersList = "";
for ($index = 0; $index < $arrLength; $index++) {
    $browsersList[$index] = $browsers[$index];
    echo $browsersList[$index];
}
echo "<br>";

//</editor-fold>

//<editor-fold desc="Associated Array">
// each Element of this associated array contains a part of the contact information
$contactInfo= array(
    'name'      => 'John Doe',
    'address'   => 'Rue de Lausanne 25',
    'NPA'       => 1400,
    'City'      => 'Yverdon'
);

// assign the city ("Yverdon") to $Home


// Replaces 'John Doe' with 'Jane Doe'
$contactInfo[0] = "Jane Doe" ;

// Loop through an Associated Array
$completedContact="";
foreach ($contactInfo as $cle => $element){
    echo $cle." : ".$element.'<br>';
}
//</editor-fold>

//<editor-fold desc="Two-dimensional Array">
// Each Element of this Two-dimensional array contains a name of a person
$people= array(
    array('Perceval','Arthur','Lancelot','Leodagan'),
    array('Marge','Homer','Bart','Maggie'),
    array('Joe','Jack','William','Averell'),
);

// assign "Joe" to $person
$person = $people[2][0];
echo $person."<br>";

// Replaces 'Bart' with 'Lisa'
$people[1][2] = "Lisa";


// Loop through an Two-dimensional Array
$rowLength = count($people);        //Assign the number of rows of the array "People"
$colLength = count($people[0]);     //Assign the number of Elements (columns) of the of the array "People"

$personList="";                     // Initialise the string $PersonList
foreach ($people as $element) {

    echo $element[0]." ";
    echo $element[1]." ";
    echo $element[2]." ";
    echo $element[3]." ";
}

//</editor-fold>

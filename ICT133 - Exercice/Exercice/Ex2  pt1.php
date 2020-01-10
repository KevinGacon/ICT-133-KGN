<?php
date_default_timezone_set('UTC');

echo date(' l j F Y'),"<br>";
echo date(' M jS Y'),"<br>";
echo date(' j/m/y G:iA'),"<br>";
echo date(' j M Y, G:i:s'),"<br>";
echo date(' D. j M Y G:i:s O'),"<br>";
echo "<br>";
echo date("D", mktime(0, 0, 0, 0,1, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,2, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,3, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,4, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,5, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,6, 2019)),"<br>";
echo date("D", mktime(0, 0, 0, 0,7, 2019)),"<br>";
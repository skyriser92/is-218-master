<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
/* this is the start of question 3 */
if ($date - $tar > 0 ) {
	echo "the future <br>";
}
elseif ($date - $tar < 0) {
	echo "the past <br>";
}
else {
	echo "oops <br>";
}
/* question 4 */
for ($i=0; $i < $date.length; $i++) {
	if ($date[$i] == '/') {
		$date[$i] = ' ';
	}
}
echo $date."<br>";

/* using the date string above, question 5 */
$words = explode(" ", $date);
echo count($words)."<br>";

/* Question 6 uses same code as question 5 becauase asking for length of string and returning the result */
$words = explode(" ", $date);
echo count($words)."<br>";

/* question 7 using the date string */
echo ord($date)."<br>";


$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
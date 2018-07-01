	<?php
$today = date("Y-m-d");
$endDay = Date('Y:m:d', strtotime("-180 days"));
$begin = new DateTime( $today );
$end = new DateTime( '2012-08-31' );
$end = $end->modify( '+1 day' ); 

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

$dates = array("2012-08-01", "2012-08-04", "2012-08-12","2012-08-16","2012-08-21","2012-08-25","2012-08-29","2012-08-31");

foreach($daterange as $k => $date){
	// echo $daterange[$k];
	// foreach ($dates as $key => $value) {
	// 	if($date->format("Y-m-d") == $value){
	// 		// echo $key . "+" . $value ." ";
	// 		$k = $key;
	// 		// echo $k . " ". $date->format("Y-m-d") . "<br>";
	// 		}
	// }
	// echo "<br>" . $k . " =>" . $date->format("Y-m-d");

	// // if(is_int($k)){
	// // 	$k = 0;
	// // }
	// "<br>";
	// echo $k;
}
$d = array();
for($i = 0; $i < 180; $i++) 
    $d[] = date("Y-m-d", strtotime('-'. $i .' days'));
foreach ($d as $key => $value) {
	echo $key. "=>" .$value ."<br>";
}

"<br>".
"<br>".
"<br>";

// $today = date("Y-m-d");
// $endDay = Date('Y:m:d', strtotime("-180 days"));
// $int = new DatePeriod('P1D');
// $dateRan = new DatePeriod($today, $int, $dateRan);
// foreach ($dateRan as $value) {
// 	echo $date->format("Y-m-d"). "<br>";
// }

// echo $today. " + " . $endDay;
?>
<?php
include('connection.php');


$fQuery = "SELECT airline_id FROM `airlines` WHERE country = 'Canada'";
$q = mysqli_query($conn,$fQuery);
$airlinesId = null;
while($row = mysqli_fetch_array($q)){
    $airlinesId[] = $row['airline_id'];
}


$fQuery = "SELECT airport_id FROM `airport` WHERE country = 'Canada'";
$q = mysqli_query($conn,$fQuery);
$airportsId = null;
while($row = mysqli_fetch_array($q)){
    $airportsId[] = $row['airport_id'];
}


$fQuery = "SELECT id FROM `classes`";
$q = mysqli_query($conn,$fQuery);
$classId = null;
while($row = mysqli_fetch_array($q)){
    $classId[] = $row['id'];
}


$i = 0;
$minimum_time=strtotime("00:00:00");
$maximum_time=strtotime("23:00:00");

while($i < 50){

shuffle($airlinesId);
shuffle($airportsId);

$rand=rand($minimum_time,$maximum_time);

$startDate = date('Y-m-d',time()+(24*3600));
$duration = rand(1,8);
$startTime = date('H:i:s',$rand);


$temp = strtotime($startDate + ' '+$startTime) + ($duration * 3600);
$endDate = date('Y-m-d',$temp);
$endTime = date('H:i:s',$temp);

$linesId = $airlinesId[0];

$portId1 = $airportsId[0];
$portId2 = $airportsId[1];


$fQuery = "INSERT INTO `flights`(`airlines_id`, `start_airport_id`, `end_airport_id`, `start_date`, `end_date`, `start_time`, `end_time`, `duration`)
             VALUES ($linesId,$portId1,$portId2,'$startDate','$endDate','$startTime','$endTime',$duration)";
$q = mysqli_query($conn,$fQuery);
$id = mysqli_insert_id($conn);

foreach($classId as $class){
    $price = rand(500,2000);
    $query = "INSERT INTO `flight_details`(`flight_id`, `class_id`, `available`, `price`) 
    VALUES ($id,$class,20,$price)";
    $q = mysqli_query($conn,$query);

}


$i++;
}

var_dump("Done");
?>
<?php

include('../connection.php');
$response = null;
function getDetails($id){
    include('../connection.php');
    $sQuery = "SELECT price,name FROM `flight_details` JOIN classes on classes.id = flight_details.class_id where flight_id =".$id;
    $res = mysqli_query($conn,$sQuery);
    $results = null;
    while($row = mysqli_fetch_array($res)){
        $results[] = $row;
    }
    return $results;
}

if (isset($_REQUEST['from']) && isset($_REQUEST['to']) && isset($_REQUEST['departure']) && isset($_REQUEST['trip'])){
    
    $from = $_REQUEST['from'];
    $to = $_REQUEST['to'];
    $departure = $_REQUEST['departure'];
    $return = $_REQUEST['return'];
    $trip = $_REQUEST['trip'];
    if ($trip == "round" && $return == ""){
        $response['error'] = "All parameters are not given";
        echo json_encode($response);
        exit;
    }
    
    $fQuery = "SELECT f.id,f.start_airport_id,f.end_airport_id,f.start_date,f.end_date,f.start_time,f.end_time,f.duration, al.name as airline_name,ap.city as stcity,ap.name as stname,at.city as encity ,at.name as enname FROM `flights` as f JOIN airlines as al ON al.airline_id = f.airlines_id JOIN airport as ap ON ap.airport_id = f.start_airport_id JOIN airport as at ON at.airport_id = f.end_airport_id WHERE start_airport_id=$from and end_airport_id=$to and start_date='$departure'";
    $q = mysqli_query($conn,$fQuery);
    $data = null;
    while($row = mysqli_fetch_array($q)){

        $details = getDetails($row['id']);
        $row['details'] = $details;
        $data[] = $row;
    }
    $response['data'] = $data;

}
else{
    $response['error'] = "All parameters are not given";
}
echo json_encode($response);
?>
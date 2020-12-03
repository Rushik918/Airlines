<?php

include("connection.php");
if (isset($_REQUEST['btn2'])){

    $from = $_REQUEST['from'];
    $to = $_REQUEST['to'];
    $departure = $_REQUEST['departure'];
    $departure = date('Y-m-d',strtotime($departure));
    $return = null;
    if (isset($_REQUEST['return'])){
        $return = $_REQUEST['return'];
        $return = date('Y-m-d',strtotime($return));

    }
    
    $trip = $_REQUEST['trip'];

    $url = "http://localhost/airlines/api/read.php?from=$from&to=$to&departure=$departure&return=$return&trip=$trip";
    $data = file_get_contents($url);
    $data = json_decode($data);
    $data = $data->data;
    
}
?>
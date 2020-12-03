<?php

include("connection.php");
$query = "SELECT f.start_date,f.end_date,ap.city as stcity,ap.name as stname,at.city as encity ,at.name as enname FROM `flights` as f JOIN airlines as al ON al.airline_id = f.airlines_id JOIN airport as ap ON ap.airport_id = f.start_airport_id JOIN airport as at ON at.airport_id = f.end_airport_id WHERE start_date='2020-12-04' and ap.country='canada' and at.country = 'canada'";
$res = mysqli_query($conn,$query);
while($row = mysqli_fetch_row($res)){
    var_dump($row);
    echo "<br>";
}
?>
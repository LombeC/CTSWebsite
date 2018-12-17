<?php

 header("Content-type: text/json");
//$db=new PDO('mysql:dbname=calendar;host=localhost;','root','');
//
//$row = $db->prepare('SELECT * from jsonevents');
//
//$row->execute();
//$myArrayOfEvents = array();
//
//foreach($row as $rec)//foreach loop  
//{  
//    $json_array['unlabeledTitle']=$rec['unlabeledTitle'];  
//    $json_array['title']=$rec['title'];  
//    $json_array['title2']=$rec['title2'];  
//    $json_array['title3']=$rec['title3'];    
//    $json_array['time']=$rec['time'];  
//    $json_array['time2']=$rec['time2'];  
//    $json_array['time3']=$rec['time3'];  
//    $json_array['location']=$rec['location'];  
//    $json_array['location2']=$rec['location2'];  
//    $json_array['location3']=$rec['location3'];  
//    $json_array['date']=$rec['date'];  
//    //here pushing the values in to an array  
//    array_push($myArrayOfEvents,$json_array);  
//  
//}  
  
//built in PHP function to encode the data in to JSON format  
//    $myJsonArray = json_encode(array("jsonevents" => $myArrayOfEvents),JSON_PRETTY_PRINT);  
//    echo $myJsonArray;
//    print_r($myArrayOfEvents);


//ALTERNATIVE CONNECTION METHOD

// Open Connection to DB
 $conn = mysqli_connect("localhost","root", "", "calendar") or die("Error " . mysqli_error($conn));

// Fetch tables from mysql db
$query = "SELECT * from jsonevents";
$result = mysqli_query($conn,$query) or die ("Error in selecting " . mysqli_error($conn));


// Convert MYSQL RESULT TO PHP ARRAY

$altEventsArray = array();
while ($row = mysqli_fetch_assoc($result)){
    $altEventsArray[] = $row;
}

//convert php array to json
//echo "\n\n";
echo json_encode(array("jsonevents" => $altEventsArray), JSON_PRETTY_PRINT)
?>
<?php


// TO BE USED WHEN I START ACCESSING EVENTS FROM A DATABASE
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
//print_r($myArrayOfEvents);
//echo "<br> <br> <br>";
//echo $myArrayOfEvents[0]['title'];

// TO BE USED WHEN I START ACCESSING EVENTS FROM A JSON FILE

//echo "<br> <br> <br>";
//$testEventsArray = json_decode(file_get_contents("../js/ctsEvents.json"), true);
//print_r($testEventsArray);
//echo "<br> <br> <br>";
//
//$date1 = $testEventsArray['jsonevents'][31]['date'];
//$todaysDate = date("Y-m-d");
//$randomDate = date('2017-07-01');
////
//echo "date1 = " . $date1 . "<br>";
//echo "Today's Date = " . $todaysDate . "<br>";
//echo "Random Date = " . $randomDate . "<br>";
//
// $time1 = strtotime($date1);
// $todaysDateTimeStamp = strtotime($todaysDate);
// $randomDateTimeStamp = strtotime($randomDate);

//echo "<br>" . $time1 . "<br>";
//echo $todaysDateTimeStamp . "<br>";
//echo $randomDateTimeStamp . "<br>";

//$time3 = $todaysDateTimeStamp - $time1;
//echo "<br>" .  ( $time3 / 60/60/24 ) . " days <br>";
//
//$testEventsArrayLength = count($testEventsArray['jsonevents']);
//
//for ($i = 0; $i < $testEventsArrayLength; $i++){
//    $testEventsArray['jsonevents'][$i]['date'] = strtotime($testEventsArray['jsonevents'][$i]['date']);
//}

//echo "The modified array is now: <br>";
//print_r($testEventsArray);

//echo "<br><br>";
//
//$upcomingEvents = array();
//for ($i = 0; $i < $testEventsArrayLength; $i++){
//    if ($randomDateTimeStamp < $testEventsArray['jsonevents'][$i]['date']){
//        array_push($upcomingEvents, $testEventsArray['jsonevents'][$i]);
//    }
//}
//
//

//echo "<br><br>";
//$upcomingEventsLength = count($upcomingEvents);
//echo $upcomingEventsLength;

//for($i = 0; $i < $upcomingEventsLength; $i++){
//    $upcomingEvents[$i]['date'] = date('Y-m-d', $upcomingEvents[$i]['date']);
//}

//echo "The upcoming events array is now: <br>";
//print_r($upcomingEvents);

//$fourUpcomingEvents = array_slice($upcomingEvents, 0, 4);
//echo "<br><br>The four upcoming events array is now: <br>";
//print_r($fourUpcomingEvents);

//echo "<br><br>" . date('M', $fourUpcomingEvents[1]['date']);
//To Do

//print_r($myArrayOfEvents);


function createHomepageEventsDiv(){
        // First get all the events from the a json file and store them in an events array
        $allCTSEvents = json_decode(file_get_contents("js/ctsEvents.json"), true);
      
    // Convert the date element of the array to a time stamp. This makes it easy to make a comparison to todays date
        $allCTSEventsLength = count($allCTSEvents['jsonevents']);
        
        for ($i = 0; $i < $allCTSEventsLength; $i++){
            $allCTSEvents['jsonevents'][$i]['date'] = strtotime($allCTSEvents['jsonevents'][$i]['date']);
        } 
        
    // Some days may have multiple events. This allows us to show these events seperately. To expand the ctsevents array
        $allCTSEventsExpanded = array();
        for ($i = 0; $i < $allCTSEventsLength; $i++){
            array_push($allCTSEventsExpanded, $allCTSEvents['jsonevents'][$i]);
            if (isset($allCTSEvents['jsonevents'][$i]['title2'])){
                $temp_array = [
                    "date" => $allCTSEvents['jsonevents'][$i]['date'],
                    "title" => isset($allCTSEvents['jsonevents'][$i]['title2'])? $allCTSEvents['jsonevents'][$i]['title2'] : null, 
                    "location" => isset($allCTSEvents['jsonevents'][$i]['location2']) ? $allCTSEvents['jsonevents'][$i]['location2'] : null,
                    "time" => isset($allCTSEvents['jsonevents'][$i]['time2']) ? $allCTSEvents['jsonevents'][$i]['time2'] : null,
                ];                
                array_push($allCTSEventsExpanded, $temp_array);
            }
            
            if (isset($allCTSEvents['jsonevents'][$i]['title3'])){
                 $temp_array2 = [
                    "date" => $allCTSEvents['jsonevents'][$i]['date'],
                    "title" => isset($allCTSEvents['jsonevents'][$i]['title3'])? $allCTSEvents['jsonevents'][$i]['title3'] : null, 
                    "location" => isset($allCTSEvents['jsonevents'][$i]['location3']) ? $allCTSEvents['jsonevents'][$i]['location3'] : null,
                    "time" => isset($allCTSEvents['jsonevents'][$i]['time3']) ? $allCTSEvents['jsonevents'][$i]['time3'] : null,
                ];                
                array_push($allCTSEventsExpanded, $temp_array2);
            }
            
        }
        
        $allCTSEventsExpandedLength = count($allCTSEventsExpanded);

        //Create a date stamp from today's(or any other random) date.

        $todaysDateTimeStamp = strtotime(date("Y-m-d"));
        
        // From the 'allEvents' array, we only want to show the 4 upcoming events on the homepage. So first we create an array which holds events that occur after today's(or any other random) date.
    
        // First we create an array for all the events that will occur in the future
        $upcomingEvents = array();
        // Array for all past events incase, we have less than 4 future events
        $pastEvents = array();
        // Loop through all the events in the ctsEvents json file and append the future events to the upcoming events array and the past events
        // to the past events array. We compare the 'date' key of the json array to today's date
        for ($i = 0; $i < $allCTSEventsExpandedLength; $i++){
            if ($todaysDateTimeStamp <= $allCTSEventsExpanded[$i]['date']){
                array_push($upcomingEvents, $allCTSEventsExpanded[$i]);
            } else {
                array_push($pastEvents, $allCTSEventsExpanded[$i]);
            }
        }
    
        // get the count of the two arrays we just created
        // Our homepage event div has space to show exactly 4 events. If the upcoming events array has less than 4 events, then we have to add 
        // some past events to the array, and the past events will show on the home page as well. Whenever new events are added to the JSON file, // only the four upcoming events will be shown on the homepage.
        $upcomingEventsLength = count($upcomingEvents);
        $pastEventsLength = count($pastEvents);
    
        // first check if the upcoming events array is less than four
        if ($upcomingEventsLength < 4){
            // if the upcoming events array only has 3 events, then add 1 more.
            //Use array_unshift to make sure you add the old events to the beginning of the array because you want them to appear first on the 
            //homepage
            if ($upcomingEventsLength === 3){ 
                for($i = $pastEventsLength - 1, $j = 0; $j < 1; $i--, $j++){
                    isset($pastEvents[$i]) ? array_unshift($upcomingEvents, $pastEvents[$i]) : "";
                    
                }
            }
            // if the upcoming events array only has 2 events, then add 2 more.
            if ($upcomingEventsLength == 2){ 
                for($i = $pastEventsLength - 1, $j = 0; $j < 2; $i--, $j++){
                    isset($pastEvents[$i]) ? array_unshift($upcomingEvents, $pastEvents[$i]) : "";
                }
            }
            // if the upcoming events array only has 1 events, then add 3 more.
            if ($upcomingEventsLength == 1){
                for($i = $pastEventsLength - 1, $j = 0; $j < 3; $i--, $j++){
                    isset($pastEvents[$i]) ? array_unshift($upcomingEvents, $pastEvents[$i]) : "";
                }
            }
            // if the upcoming events array  has 0 events, then add 4 more.
            if ($upcomingEventsLength == 0){
                for($i = $pastEventsLength - 1, $j = 0; $j < 4; $i--, $j++){
                    isset($pastEvents[$i]) ? array_unshift($upcomingEvents, $pastEvents[$i]) : "";
                }
            }
            // At the end, come up with our final array, four upcoming events which will be used for displaying the events div below.
            $fourUpcomingEvents = $upcomingEvents;
            
        } else {
            // If the upcoming events array already has 4 or more elements, then we only need to make sure that we get the first 4 elements so we
            // use the array_slice function.
            $fourUpcomingEvents = array_slice($upcomingEvents, 0, 4);
        }
        // The since we only want four events we get the first four events from the upcoming events array and add them to a different array
        
    ?>

    <div class="flexContainer flexEventsContainer">
            <?php
                // if the calendar event file is empty or not found, then isset will return false and nothing will be displayed
                if(isset($fourUpcomingEvents)){   
                    // if the fourupcomingevents array is found and is set, then we iterate through it and display the four events on our //homepage
                for ($i = 0; $i < count($fourUpcomingEvents); $i++) {
                    ?>
                    <div class="flexContainerBox flexEventsContainerBox">
                        <div class="flexEventsContainerBoxContents">
                                <div class="circleDate">
                                <div class="circleDateText">
                                    <?php echo date('M', $fourUpcomingEvents[$i]['date']) . ".<br>" . date('d',$fourUpcomingEvents[$i]['date']);?>
                                </div>
                                </div>
                            <div class="eventsContainerEventTitle">
                                 <?php 
                                    if(isset($fourUpcomingEvents[$i]['unlabeledTitle'])){
                                          echo $fourUpcomingEvents[$i]['unlabeledTitle'] . "<br>";
                                      }
                                      if(isset($fourUpcomingEvents[$i]['title'])){
                                          echo $fourUpcomingEvents[$i]['title'];
                                      } 
                                ?>
                            </div>
                            <div class="eventsContainerEventTime">
                                <?php 
                                    if(isset($fourUpcomingEvents[$i]['time'])){
                                        echo $fourUpcomingEvents[$i]['time'];
                                    }
                                ?>
                            </div>
                            <div class="eventsContainerEventLocation">
                                <?php 
                                    if(isset($fourUpcomingEvents[$i]['location'])){
                                        echo $fourUpcomingEvents[$i]['location'];
                                    }
                                ?>
                            </div>
                        </div>
                    </div> <?php
                }
            }
            ?>
        </div>
    <?php
    }
?>